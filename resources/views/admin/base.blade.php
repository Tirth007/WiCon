@extends('layouts.app')

@section('title')
Base
@endsection

@section('content')

<div class='row'>
	<div class='col-md-6 col-md-offset-3'> 
		<div class='panel panel-default'>
			<div class='panel-body text-center'>
			<p>	<button onclick="redirector('/insert')" class='btn btn-success '>Add Items</button>  </p>
			<p>	<button onclick="redirector('/view-items')" class='btn btn-success '>View Items</button> </p>
			<p>	<button onclick="redirector('/edit-items')" class='btn btn-success '>Update Items</button> </p>
			<p>	<button onclick="redirector('/delete-items')" class='btn btn-success '>Delete Items</button></p>
			<p>	<button onclick="redirector('/view-orders')" class='btn btn-success '>View Orders</button></p>
			<p>	<button onclick="redirector('/code')" class='btn btn-success '>Generate codes</button></p>
			<p>	<button onclick="redirector('/bill')" class='btn btn-success '>Generate bill</button></p>
			</div>
		</div>
	</div>
</div>
@endsection