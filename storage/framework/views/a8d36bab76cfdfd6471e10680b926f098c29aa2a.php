<?php $__env->startSection('title'); ?>
View Orders
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
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
<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
 <tr> 
  <td><?php echo e($order->Order_ID); ?></td> 
  <td><?php echo e($order->Item_Name); ?></td>
  <td><?php echo e($order->Item_Price); ?></td>
  <td><?php echo e($order->Quantity); ?></td>
  <td><?php echo e($order->created_at); ?></td>
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
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</tbody> 
</table> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>