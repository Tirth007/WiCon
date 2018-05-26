@extends('layouts.master')

@section('title')
Cart
@endsection

@section('content')
    <br/>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    {{csrf_field()}}
                    @foreach($cart as $item)
                        <tr class="item{{$item->id}}">
                        <td><span class="itemname">{{$item->name}}</span></td>
                        <td>&#8377;<span class="itemprice">{{$item->price}}</span></td>
                        <td>
                        <input type="number" min="1" class="itemqty" style="width:50px" value="{{$item->qty}}" max="10" pattern="[0-9]+" data-id='{{$item->id}}' data-rowid="{{$item->rowId}}" data-price='{{$item->price}}'>
                        </td>
                        <td>&#8377;<span class="itemcost">{{$item->subtotal}}</span></td>
                        <td><button class="btn btn-danger removeitem" data-id="{{$item->id}}" data-msg="remove" data-rowid="{{$item->rowId}}">Delete</button> </td>
                    @endforeach
                        <tr class="info">
                        <td>Subtotal</td>
                        <td></td>
                        <td></td>
                        <td>&#8377;<span id="cart-subtotal">{{Cart::subtotal()}}</span></td>
                        <td></td>
                        </tr>
                        <tr class="success">
                        <td>Tax</td>
                        <td>10%</td>
                        <td></td>
                        <td>&#8377;<span id="cart-tax">{{Cart::tax()}}</span></td>
                        <td></td>
                        </tr>
                        <tr class="warning">
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td>&#8377;<span id="cart-total">{{Cart::total()}}</span></td>
                        <td><button class="btn btn-success" onclick="redirector('/check-code')">Order</button></td>
                        </tr>
                </tbody>
			</table>     
        </div>
 @endsection