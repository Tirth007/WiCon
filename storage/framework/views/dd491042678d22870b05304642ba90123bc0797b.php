<?php $__env->startSection('title'); ?>
Cart
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
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo e(csrf_field()); ?>

                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr class="item<?php echo e($item->id); ?>">
                        <td><span class="itemname"><?php echo e($item->name); ?></span></td>
                        <td>&#8377;<span class="itemprice"><?php echo e($item->price); ?></span></td>
                        <td>
                        <input type="number" min="1" class="itemqty" style="width:50px" value="<?php echo e($item->qty); ?>" max="10" pattern="[0-9]+" data-id='<?php echo e($item->id); ?>' data-rowid="<?php echo e($item->rowId); ?>" data-price='<?php echo e($item->price); ?>'>
                        </td>
                        <td>&#8377;<span class="itemcost"><?php echo e($item->subtotal); ?></span></td>
                        <td><button class="btn btn-danger removeitem" data-id="<?php echo e($item->id); ?>" data-msg="remove" data-rowid="<?php echo e($item->rowId); ?>">Delete</button> </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        <tr class="info">
                        <td>Subtotal</td>
                        <td></td>
                        <td></td>
                        <td>&#8377;<span id="cart-subtotal"><?php echo e(Cart::subtotal()); ?></span></td>
                        <td></td>
                        </tr>
                        <tr class="success">
                        <td>Tax</td>
                        <td>10%</td>
                        <td></td>
                        <td>&#8377;<span id="cart-tax"><?php echo e(Cart::tax()); ?></span></td>
                        <td></td>
                        </tr>
                        <tr class="warning">
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td>&#8377;<span id="cart-total"><?php echo e(Cart::total()); ?></span></td>
                        <td><button class="btn btn-success" onclick="redirector('/check-code')">Order</button></td>
                        </tr>
                </tbody>
			</table>     
        </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>