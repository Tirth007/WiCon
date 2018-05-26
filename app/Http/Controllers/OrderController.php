<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Response;

class OrderController extends Controller
{
    public function view_orders(){
      $date = date('Y-m-d');
      $orders = DB::select('select * from orders where DATE(created_at) = ? order by created_at DESC',[$date]); 
      return view('admin.order_view',['orders'=>$orders]);
    }

    public function order(){
        $content = Cart::content();
        $order_id = session('pwd');
        foreach($content as $row){
        DB::insert('insert into orders (Order_ID,Item_Name,Item_Price,Quantity,Total) values(?,?,?,?,?)',[$order_id,$row->name,$row->price,$row->qty,$row->subtotal]);
        DB::update("update items set Availability = (Availability - $row->qty) where Item_Name = ?",[$row->name]);
        }
        Cart::destroy();
        //session()->forget('pwd');
        return redirect()->to('/myorder');
    }

    public function generate_bill($code){
        $bill = DB::select('select * from orders where order_ID = ? ',[$code]);
        DB::delete('delete from codes where code = ?',[$code]);
        return view('admin.print_bill',['bill'=>$bill]);        
    }

    public function check($code='aaa'){
        if(DB::select('select * from codes where code = ? ',[$code])) {
            session(['pwd'=>$code]);
          //  session(['opwd'=>$code]); 
            return redirect()->to('/order');
        }
        else{
            return redirect()->to('/wrongpwd');
        }
    }

    public function check_code(){
        if(session('pwd')){
            $password = session('pwd');
            return redirect()->to('/check/'.$password);
        }else{
            echo ' <script type="text/javascript">
                var password = prompt("Please ask waiter for 6 digit code");
                if(password != "" && password != null)
                    window.open("/check/"+password,"_self");
                else
                    window.open("/abc","_self");
                </script>
            ';
        }
    }

    public function endsession(){
        session()->forget('pwd');
        return redirect()->to('/menu');
    }

    public function today_analysis(){
        $date = date("Y-m-d");
        $items = DB::select('SELECT Item_Name,SUM(Quantity) as SOLD
        FROM orders
        WHERE DATE(created_at) = ?
        GROUP BY Item_Name
        ORDER BY SOLD DESC
        LIMIT 5',[$date]);
        return view('admin.analysis',['items'=>$items]);
    }

    public function weekly_analysis(){
        $date1 = date('Y-m-d',strtotime('-7days'));
        $date2 = date("Y-m-d");
        $items = DB::select('SELECT Item_Name,SUM(Quantity) as SOLD
        FROM orders
        WHERE DATE(created_at) Between ? and ?
        GROUP BY Item_Name
        ORDER BY SOLD DESC
        LIMIT 5',[$date1,$date2]);
        return view('admin.analysis',['items'=>$items]);
    }

    public function monthly_analysis(){
        $month = date("m");
        $items = DB::select('SELECT Item_Name,SUM(Quantity) as SOLD
        FROM orders
        WHERE MONTH(created_at) = ?
        GROUP BY Item_Name
        ORDER BY SOLD DESC
        LIMIT 5',[$month]);
        return view('admin.analysis',['items'=>$items]);
    }

    public function total_analysis(){
        //$date = date("Y-m-d");
        $items = DB::select('SELECT Item_Name,SUM(Quantity) as SOLD
        FROM orders
        GROUP BY Item_Name
        ORDER BY SOLD DESC
        LIMIT 5');
        return view('admin.analysis',['items'=>$items]);
    }

    public function export(Request $request){
        $orders = DB::select('select * from orders');
        if(count($orders)){
            $id = 1;
            $data[] ="id,Order_ID,Item_Name,Item_Price,Quantity,Total,created_at";
            foreach ($orders as $value) {
                $data[] = $id.','.$value->Order_ID.','.$value->Item_Name.','.$value
                ->Item_Price.','.$value->Quantity.','.$value->Total.','.$value->created_at;
                $id++;
            }
            $filename = "order.csv";
            $filepath = 'C:/Users/Hp/Desktop/'.$filename;
            $file = fopen($filepath, "w");

            foreach ($data as $output) {
                fputcsv($file,explode(',',$output));
            }
            fclose($file);

            $headers = ['Content-Type'=>'application/csv'];
            return response()->download($filepath,$filename,$headers);
        }
    }
}
