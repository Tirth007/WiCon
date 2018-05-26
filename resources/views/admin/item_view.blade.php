@extends('layouts.app')

@section('title')
Items | View
@endsection
 
@section('content')
<div class="table-responsive">
<table class="table table-striped"> 
<thead>
<tr class="success"> 
 <th>ID</th> 
 <th>Name</th>
 <th>Price</th>
 <th>Ingredients</th>
 <th>Description</th>
 <th>Availability</th>
 <th>Category</th>
</tr> 
</thead>
<tbody>
@foreach ($items as $item) 
 <tr> 
  <td>{{ $item->Item_ID }}</td> 
  <td>{{ $item->Item_Name }}</td>
  <td>{{ $item->Item_Price }}</td>
  <td>{{ $item->Item_Ingredients }}</td>
  <td>{{ $item->Item_Description }}</td>
  <td>{{ $item->Availability }}</td> 
  <td>{{ $item->Category }}</td>
 </tr> 
@endforeach
</tbody> 
</table> 
</div>
@endsection