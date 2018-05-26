<?php $__env->startSection('title'); ?>
MyOrder
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <br/>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php $amount = 0; ?>
                    <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
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
                        <tr class="warning">
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td>&#8377;<?php echo e($amount + $tax); ?></td>
                        </tr>
                </tbody>
			</table>
        </div>
        <br/>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>