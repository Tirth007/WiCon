@extends('layouts.app')

@section('title')
Bill Generation
@endsection
 
@section('content')
<div class="table-responsive">
<table class="table table-striped"> 
<thead>
<tr> 
 <th>ID</th>
 <th>Code</th> 
 <th>Generate</th>
</tr> 
</thead>
<tbody>
<?php $i=1; ?>
@foreach ($codes as $code) 
 <tr> 
  <td>{{ $i++}} </td>
  <td>{{ $code->code }}</td>
  <td><a href="/generate-bill/{{$code->code}}" class="btn btn-primary">Generate Bill</a></td>  
 </tr> 
@endforeach
</tbody> 
</table> 
@endsection