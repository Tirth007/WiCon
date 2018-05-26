@extends('layouts.app')

@section('title')
User Codes
@endsection
 
@section('content')
<div class="table-responsive" style="font-family:courier">
<table class="table table-striped"> 
<thead>
<tr> 
 <th>ID</th>
 <th>Code</th> 
 <th>Table</th>
</tr> 
</thead>
<tbody>
<?php $i=1; ?>
@foreach ($codes as $code) 
 <tr> 
  <td> {{ $i++}} </td>
  <td>{{ $code->code }}</td>
  <td></td>  
 </tr> 
@endforeach
</tbody> 
</table>
</div>
@endsection 