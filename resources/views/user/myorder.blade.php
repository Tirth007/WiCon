@extends('layouts.master')

@section('title')
MyOrder
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
                    </tr>
                </thead>
                <tbody>
                <?php $amount = 0; ?>
                    @foreach($order as $item)
                        <tr>
                        <td>{{$item->Item_Name}}</td>
                        <td>&#8377;{{$item->Item_Price}}</td>
                        <td>{{$item->Quantity}}</td>
                        <td>&#8377;{{$item->Total}}</td>
                        </tr>
                        <?php $amount = $amount + $item->Total; ?>
                    @endforeach
                        <tr class="info">
                        <td>Subtotal</td>
                        <td></td>
                        <td></td>
                        <td>&#8377;{{$amount}}</td>
                        </tr>
                        <?php $tax = $amount * 0.10; ?> 
                        <tr class="success">
                        <td>Tax</td>
                        <td>10%</td>
                        <td></td>
                        <td>&#8377;{{$tax}}</td>
                        </tr>
                        <tr class="warning">
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td>&#8377;{{$amount + $tax}}</td>
                        </tr>
                </tbody>
			</table>
        </div>
        <br/>
 @endsection