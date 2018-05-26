<?php $__env->startSection('title'); ?>
Items | Update
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
<?php echo e(csrf_field()); ?>

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
 <th>EDIT</th>
</tr> 
</thead>
<tbody>                                              <?php    //Item_ID is name of column in database ?>
<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
 <tr> 
  <td><?php echo e($item->Item_ID); ?></td>                     
  <td><?php echo e($item->Item_Name); ?></td>
  <td><?php echo e($item->Item_Price); ?></td>
  <td><?php echo e($item->Item_Ingredients); ?></td>
  <td><?php echo e($item->Item_Description); ?></td>
  <td><input type="number" class="availability" id="item<?php echo e($item->Item_ID); ?>" style="width:60px" value="<?php echo e($item->Availability); ?>" pattern="[0-9]+" data-id="<?php echo e($item->Item_ID); ?>"/></td>
  <td><?php echo e($item->Category); ?></td>
  <td><a href='edit/<?php echo e($item->Item_ID); ?>'>Edit</a></td> 
 </tr> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
</tbody>
</table>
</div> 
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>