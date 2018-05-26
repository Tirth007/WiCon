<?php $__env->startSection('title'); ?>
Items | View
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
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
<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
 <tr> 
  <td><?php echo e($item->Item_ID); ?></td> 
  <td><?php echo e($item->Item_Name); ?></td>
  <td><?php echo e($item->Item_Price); ?></td>
  <td><?php echo e($item->Item_Ingredients); ?></td>
  <td><?php echo e($item->Item_Description); ?></td>
  <td><?php echo e($item->Availability); ?></td> 
  <td><?php echo e($item->Category); ?></td>
 </tr> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</tbody> 
</table> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>