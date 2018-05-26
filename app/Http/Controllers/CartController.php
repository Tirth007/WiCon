<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    //
    public function cart_add(Request $req){
        Cart::add(['id'=>$req->id,'name'=>$req->name,'price'=>$req->price,'qty'=>1]);
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
        echo json_encode($data);
        }
    }
}
