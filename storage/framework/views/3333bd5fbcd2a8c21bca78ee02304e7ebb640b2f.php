<?php $__env->startSection('title'); ?>
Menu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br/>
<div class="menu">
		<div class="container">
			
			<h3>Menu</h3>
			<p class="nihil">Our Items</p>
			<?php $count=0; $counter=-1; ?>
			<?php echo e(csrf_field()); ?>

			<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<?php $count++; $counter++; ?>
			<div class="menu-grids">
				<div class="col-md-4 menu-grid">
					<div class="menu-grd">
						<img src="<?php echo'images/'.$item->Item_Name.'.jpg' ?>" alt=" <?php echo e($item->Item_Name); ?>" class="set-img"/>
						<h4><?php echo e($item->Item_Name); ?></h4>
						<p><?php echo e($item->Item_Description); ?></p>
						<div class="menu-grd-pos">
							<p>&#8377;<?php echo e($item->Item_Price); ?></p>
						</div>
						<div class="row">
						<div class="col-xs-3">
			<!--data-id="<?php echo e($item->Item_ID); ?>" data-name="<?php echo e($item->Item_Name); ?>" data-price="<?php echo e($item->Item_Price); ?>"-->			
						<button class="btn btn-success cartadd" data-id="<?php echo e($item->Item_ID); ?>" data-name="<?php echo e($item->Item_Name); ?>" data-price="<?php echo e($item->Item_Price); ?>">Add</button>
						</div>
						<div class="col-xs-6"></div>
						<div class="col-xs-3">
							<span style="font-size:24px">&#8377;<?php echo e($item->Item_Price); ?></span>
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
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			<div class='clearfix'></div>

		<!--	<button class="btn btn-success" onclick="check()">Checkout</button>  -->
		</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">    
    	    <div class="modal-body">
            <h2>Added to cart</h2>
            <button class="btn btn-primary" onclick="redirector('/abc')">Go to Cart</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>