<?php $__env->startSection('styles'); ?>
<link href="chart/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="chart/js/Chart.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Top 5 Items
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Item Name</th>
				<th>Quantity Sold</th>
			</tr>
		</thead>
		<tbody>
		<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><?php echo e($item->Item_Name); ?></td>
				<td><?php echo e($item->SOLD); ?></td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
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
					<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<li style="color:<?php echo e($color[$i++]); ?>"><?php echo e($item->Item_Name); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
			<canvas id="pie" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
				 <script type="text/javascript">
					var pieData = [
						<?php $j=0; ?>
							<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							{
								value: <?php echo e($item->SOLD); ?>,
								color: "<?php echo e($color[$j++]); ?>",
							},
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							
						];
						new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
				</script>
	</div>
</div>
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>