<?php $__env->startSection('title'); ?>
User Codes
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
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
<?php $__currentLoopData = $codes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
 <tr> 
  <td> <?php echo e($i++); ?> </td>
  <td><?php echo e($code->code); ?></td>
  <td></td>  
 </tr> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</tbody> 
</table>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>