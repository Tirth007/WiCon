<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    //
    public function insertform(){
    	return view('admin.item_add');
    }

    public function insert(Request $request){
    $name = $request->input('item_name');
	  $price = $request->input('item_price');
	  $ingredients = $request->input('item_ingredients');
	  $description = $request->input('item_description');
	  $availability = $request->input('availability');
    $category = $request->input('category');
	  if(DB::insert('insert into items (Item_Name,Item_Price,Item_Ingredients,Item_Description,Availability,Category) values(?,?,?,?,?,?)',[$name,$price,$ingredients,$description,$availability,$category])) 
	  {
        return redirect()->to('view-items');
    }else{
        echo 'Item not added.';
        echo "<p><a href='/insert'><button class='btn btn-success'>Try Again</button></a></p>";    
    } 
/*	  echo '<a href="/insert">Click Here</a> to go back.';
    echo "<p><a href='/insert'><button class='btn btn-success'>Add Items</button></a></p>
          <p><a href='/view-items'><button class='btn btn-success'>View Items</button></a></p>
          <p><a href='/edit-items'><button class='btn btn-success'>Update Items</button></a></p>
          <p><a href='/delete-items'><button class='btn btn-success'>Delete Items</button></a></p>"; */
    }

    public function index(){
    	$items = DB::select('select * from items order by Category'); 
  		return view('admin.item_view',['items'=>$items]);
    }

    public function editform(){ 
  		$items = DB::select('select * from items order by Category'); 
  		return view('admin.item_edit',['items'=>$items]); 	
 	  }

    public function orders(){
      $date = date('Y-m-d');
      $orders = DB::select('select * from orders where DATE(created_at) = ? order by created_at DESC',[$date]); 
      return view('admin.order_view',['orders'=>$orders]);
    }
  
    public function newval($id) 
    { 
        $items = DB::select('select * from items where Item_ID = ?',[$id]); 
  		return view('admin.item_update',['items'=>$items]); 
    } 

    public function edit(Request $request,$id) 
    { 
      if($request->msg == 'availability'){
        DB::update('update items set Availability = ? where Item_ID = ?',[$request->qty,$request->id]);
        $data = array('id'=>$request->id,'quantity'=>$request->qty);
        echo json_encode($data);
      }
  		$name = $request->input('item_name');             //item_name is name of input field in form
  		$price = $request->input('item_price');
	  	$ingredients = $request->input('item_ingredients');
	  	$description = $request->input('item_description');
	  	$availability = $request->input('availability');
      $category = $request->input('category');
  		if(DB::update('update items set Item_Name = ?, Item_Price = ?,Item_Ingredients = ?,Item_Description = ?,Availability = ?, Category =  ? where Item_ID = ?',[$name,$price,$ingredients,$description,$availability,$category,$id])) 
  		{
          return redirect()->to('edit-items');
      }else{
          echo "Item not Updated";
          echo "<p><a href='/edit-items'><button class='btn btn-success'>Try Again</button></a></p>";
      }
      /*echo "Record updated successfully.<br/>"; 
  		echo '<a href="/view-items">Click Here</a> to go back.';
      echo "<p><a href='/insert'><button class='btn btn-success'>Add Items</button></a></p>
            <p><a href='/view-items'><button class='btn btn-success'>View Items</button></a></p>
            <p><a href='/edit-items'><button class='btn btn-success'>Update Items</button></a></p>
            <p><a href='/delete-items'><button class='btn btn-success'>Delete Items</button></a></p>"; */
    }

    public function deleteform(){
    	$items = DB::select('select * from items order by Category'); 
  		return view('admin.item_delete',['items'=>$items]);
    }

    public function destroy($id){
    	if(DB::delete('delete from items where Item_ID = ?',[$id]))
      {
        return redirect()->to('delete-items');
      }else{
          echo 'Item not deleted';
          echo "<p><a href='/delete-items'><button class='btn btn-success'>Try Again</button></a></p>";
      } 
      /*
  		echo "Record deleted successfully.<br/>"; 
  		echo '<a href="/delete-items">Click Here</a> to go back.';
      echo "<p><a href='/insert'><button class='btn btn-success'>Add Items</button></a></p>
            <p><a href='/view-items'><button class='btn btn-success'>View Items</button></a></p>
            <p><a href='/edit-items'><button class='btn btn-success'>Update Items</button></a></p>
            <p><a href='/delete-items'><button class='btn btn-success'>Delete Items</button></a></p>";*/
    }
}
