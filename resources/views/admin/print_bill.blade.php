<!--<html> 
<head><title>Bill Generation</title>
<link rel="stylesheet" href="../css/demo.css"> 
<link rel="stylesheet" href="../css/bootstrap.css">
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
</head> 
<body>  
-->
@extends('layouts.app')

@section('title')
Print bill
@endsection

@section('content')
<div class="container" id="div_print"> 
<?php if($bill){ ?>
<div class="pull-right"><b>Date: {{$bill[0]->created_at}}</b> </div><br/> <?php } ?>
<div class="table-responsive">
<table class="table table-striped"> 
<thead>
<tr> 
 <th>Name</th>
 <th>Price</th> 
 <th>Quantity</th>
 <th>Total</th>
</tr>
</thead>
<tbody>
	<?php $amount = 0; ?>
                    @foreach($bill as $item)
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
                        <tr class="danger">
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td><b>&#8377;{{$amount + $tax}}</b></td>
                        </tr>
</tbody> 
</table> 
</div>
</div>
<center>
<button id="print" onclick="printContent('div_print');" class="btn btn-primary" >Print It</button>
</center>
<script>
function printContent(el){
var restorepage = $('body').html();
var printcontent = $('#' + el).clone();
$('body').empty().html(printcontent);
window.print();
$('body').html(restorepage);
}
</script>
@endsection