<!--<html> 
<head><title>Bill Generation</title>
<link rel="stylesheet" href="../css/demo.css"> 
<link rel="stylesheet" href="../css/bootstrap.css">
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
</head> 
<body>  
-->


<?php $__env->startSection('title'); ?>
Print bill
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container" id="div_print"> 
<?php if($bill){ ?>
<div class="pull-right"><b>Date: <?php echo e($bill[0]->created_at); ?></b> </div><br/> <?php } ?>
<div class="table-responsive">
<table class="table table-striped"> 
<thead>
<tr> 
 <th>Name</th>
 <th>Price</th> 
 <th>Quantity</th>
 <th>Total</th>
</tr>
</thead>
<tbody>
	<?php $amount = 0; ?>
                    <?php $__currentLoopData = $bill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                        <td><?php echo e($item->Item_Name); ?></td>
                        <td>&#8377;<?php echo e($item->Item_Price); ?></td>
                        <td><?php echo e($item->Quantity); ?></td>
                        <td>&#8377;<?php echo e($item->Total); ?></td>
                        </tr>
                        <?php $amount = $amount + $item->Total; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        <tr class="info">
                        <td>Subtotal</td>
                        <td></td>
                        <td></td>
                        <td>&#8377;<?php echo e($amount); ?></td>
                        </tr>
                        <?php $tax = $amount * 0.10; ?> 
                        <tr class="success">
                        <td>Tax</td>
                        <td>10%</td>
                        <td></td>
                        <td>&#8377;<?php echo e($tax); ?></td>
                        </tr>
                        <tr class="danger">
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td><b>&#8377;<?php echo e($amount + $tax); ?></b></td>
                        </tr>
</tbody> 
</table> 
</div>
</div>
<center>
<button id="print" onclick="printContent('div_print');" class="btn btn-primary" >Print It</button>
</center>
<script>
function printContent(el){
var restorepage = $('body').html();
var printcontent = $('#' + el).clone();
$('body').empty().html(printcontent);
window.print();
$('body').html(restorepage);
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>