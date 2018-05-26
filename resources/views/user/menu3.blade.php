
@extends('layouts.master')

@section('title')
Menu 3
@endsection

@section('content')
<div class="menu">
		<div class="container">
			<h3>Menu</h3>
			<p class="nihil">Our Items</p>
			<?php $count=0; $counter=-1; ?>
			
			@foreach($items as $item)
			<?php $count++; $counter++; ?>
			<div class="menu-grids">
				<div class="col-md-4 menu-grid">
					<div class="menu-grd">
						<img src="<?php echo'images/'.$item->Item_Name.'.jpg' ?>" alt=" {{$item->Item_Name}}" class="img-responsive set-img" />
						<h4>{{$item->Item_Name}}</h4>
						<p>{{$item->Item_Description}}</p>
						<div class="menu-grd-pos">
							<p>{{$item->Item_Price}}</p>
						</div>
						<div class="row">
						<div class="col-xs-3">
						<button class="btn btn-success" onclick="redirector('/cart-add/{{$item->Item_ID}}')">Add</button>
						</div>
						<div class="col-xs-2"></div>
						<div class="col-xs-7">
							<input class="qty" style="display:none ; width:50px"  type="number" min="0" value="1" max="{{$item->Availability}}">
						</div>
						</div>
					</div>
				</div>
			<?php 
				if($count>2){
					$count = 0;
					echo '<div class="clearfix"> </div>';
				}
			?>
			</div>
			@endforeach
			<div class='clearfix'></div>
		</div>
</div>	
@endsection