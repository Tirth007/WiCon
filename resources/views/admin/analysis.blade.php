@extends('layouts.app')


@section('styles')
<link href="chart/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="chart/js/Chart.js"></script>
@endsection

@section('title')
Top 5 Items
@endsection

@section('content')
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Item Name</th>
				<th>Quantity Sold</th>
			</tr>
		</thead>
		<tbody>
		@foreach($items as $item)
			<tr>
				<td>{{$item->Item_Name}}</td>
				<td>{{$item->SOLD}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>

<center>
<div class="area_chart pie_chart">
	<div class="area_chart_left">
		<div class="area_chart_left_main">
			<div class="area_chart_left_l">
				<h3>PIE CHART</h3>
			</div>
			<div class="area_chart_left_r">
				<ul>
					<?php $i=0; $color = array('red','blue','green','purple','orange'); ?>
					@foreach($items as $item)
						<li style="color:{{$color[$i++]}}">{{$item->Item_Name}}</li>
					@endforeach
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
			<canvas id="pie" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
				 <script type="text/javascript">
					var pieData = [
						<?php $j=0; ?>
							@foreach($items as $item)
							{
								value: {{$item->SOLD}},
								color: "{{$color[$j++]}}",
							},
							@endforeach
							
						];
						new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
				</script>
	</div>
</div>
</center>
@endsection