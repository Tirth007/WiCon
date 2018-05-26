<?php

namespace App\Http\Controllers;
use DB;
use Cart;
use Illuminate\Http\Request;
use Response;

class PageController extends Controller
{
    //
    public function home(){
    	return view('user.home');
    }

    public function about(){
    	return view('user.about');
    }

    public function menu(){
        $items = DB::select('select * from items where Availability > 5'); 
        return view('user.menu',['items'=>$items]);
    }

    public function snacks(){
        $items = DB::select('select * from items where Availability > 5 and Category = "Snacks" '); 
        return view('user.menu',['items'=>$items]);
    }

    public function pizza(){
        $items = DB::select('select * from items where Availability > 5 and Category = "Pizza" '); 
        return view('user.menu',['items'=>$items]);
    }

    public function chinese(){
        $items = DB::select('select * from items where Availability > 5 and Category = "Chinese" '); 
        return view('user.menu',['items'=>$items]);
    }

    public function admin(){
        return view('auth.login');
    }

    public function base(){
        return view('admin.base');
    }

    public function game(){
        return view('user.game');
    }
    
    public function menu2(){
        $items = DB::select('select * from items'); 
        return view('user.menu2',['items'=>$items]);
    }

    public function check($code='aaa'){
        if(DB::select('select * from codes where code = ? ',[$code])) {
            session(['pwd'=>$code]);
           // session(['opwd'=>$code]); 
            return redirect()->to('/order');
        }
        else{
            return redirect()->to('/wrongpwd');
        }
    }

    public function analysis(){
        $date = date("Y-m-d");
        $items = DB::select('SELECT Item_Name,SUM(Quantity) as SOLD
        FROM orders
        WHERE DATE(created_at) = ?
        GROUP BY Item_Name
        ORDER BY SOLD DESC
        LIMIT 5',[$date]);
        return view('admin.analysis',['items'=>$items]);
    }

    public function wrongpwd(){
        return view('user.wpwd');
    }

    public function myorder(){
        if(session('pwd')){
            $code = session('pwd');
            $order = DB::select('select * from orders where order_ID = ?' ,[$code]);
            return view('user.myorder',['order'=>$order]);
        }else{
            return view('user.no_order');
        }
    }
  

    public function cart_add(Request $req){

        Cart::add(['id'=>$req->id,'name'=>$req->name,'price'=>$req->price,'qty'=>1]);
       // echo "<script>alert('Added To Cart');</script>";
       
      //  return redirect()->to('/menu');
    }

    public function cart_update($id,$qty){
        Cart::update($id,$qty);
        return redirect()->to('/abc');
    }

    public function cartUpdate(Request $req){
        if($req->msg == 'remove' || $req->qty > 0){
        Cart::update($req->rowid,$req->qty);
        $itemtotal = $req->qty * $req->price;
        $subtotal = Cart::subtotal();
        $tax = Cart::tax();
        $total = Cart::total();
        $data = array('id'=>$req->id,'qty'=>$req->qty,'itemtotal'=>$itemtotal,'subtotal'=>$subtotal,'tax'=>$tax,'total'=>$total);
     //   echo $data;
        echo json_encode($data);
        }
    }

    public function abc(){
        //session()->forget('pwd');
        if(Cart::count() || session('opwd')){
            $cart = Cart::content();
            return view('user.abc',['cart'=>$cart]);
        }
        else
            return view('user.no_order');
    }

    public function order(){
        $content = Cart::content();
        $order_id = session('pwd');
        foreach($content as $row){
        DB::insert('insert into orders (Order_ID,Item_Name,Item_Price,Quantity,Total) values(?,?,?,?,?)',[$order_id,$row->name,$row->price,$row->qty,$row->subtotal]);
        DB::update("update items set Availability = (Availability - $row->qty) where Item_Name = ?",[$row->name]);
        }
        //DB::delete('delete from codes where code = ?',[$order_id]);
        Cart::destroy();
        session()->forget('pwd');
        return redirect()->to('/myorder');
    }

    public function showcode(){
        $codes = DB::select('select * from codes'); 
        return view('admin.code_view',['codes'=>$codes]);
    }

    public function bill(){
        $codes = DB::select('select * from codes'); 
        return view('admin.bill',['codes'=>$codes]);
    }

    public function generate($code){
        $bill = DB::select('select * from orders where order_ID = ? ',[$code]);
        DB::delete('delete from codes where code = ?',[$code]);
        return view('admin.print_bill',['bill'=>$bill]);        
    }


}
/*  public function cart_add($id){
       $item = DB::select('select * from items where Item_ID = ?',[$id]);
       $name = $item[0]->Item_Name;
       $price = $item[0]->Item_Price;
       $quantity = 1;
       DB::insert('insert into carts (Item_Name,Item_Price,Item_Quantity) values(?,?,?)',[$name,$price,$quantity]);
    } */

/*    public function code(){
     //   Code::getQuery()->delete();
       // DB::table('codes')->truncate();
      //  Artisan::call('db:seed');
       // return redirect()->to('/view-code');
    } */