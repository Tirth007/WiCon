@extends('layouts.app')

@section('title')
View Orders
@endsection
 
@section('content')
<?php use App\Code; ?>
<div class="table-responsive">
<table class="table table-striped"> 
<thead>
<tr class="success"> 
 <th>ID</th> 
 <th>Name</th>
 <th>Price</th>
 <th>Quantity</th>
 <th>Date & Time</th>
 <th>Status</th>
</tr>
</thead>
<tbody>
@foreach ($orders as $order) 
 <tr> 
  <td>{{ $order->Order_ID }}</td> 
  <td>{{ $order->Item_Name }}</td>
  <td>{{ $order->Item_Price }}</td>
  <td>{{ $order->Quantity }}</td>
  <td>{{ $order->created_at }}</td>
  <td>
  	<?php 
  	 $a = Code::whereCode($order->Order_ID)->get();
  	 if($a == '[]'){
  	 	echo 'Paid';
  	 }else{
  	 	echo 'UnPaid';
  	 }
  	?>
  </td>
 </tr> 
@endforeach
</tbody> 
</table> 
</div>
@endsection