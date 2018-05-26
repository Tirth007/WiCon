<?php $__env->startSection('title'); ?>
Insert Item
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="css/form-basic.css">
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?> 
<form action="/create" method="post" class="form-basic"> 
            <div class="form-title-row">
                <h1>Insert new Item</h1>
            </div>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <div class="form-row">
                <label>
                    <span>Item_Name</span>
                    <input type='text' name='item_name' required/>
                </label>
                </div> 
                <div class="form-row">
                <label>
                    <span>Item_Price</span>
                    <input type='text' name='item_price' pattern='[0-9]+' required/>
                </label>
                </div>  
                <div class="form-row">
                <label>
                    <span>Item_Ingredients</span>
                    <textarea name='item_ingredients'></textarea>
                </label>
                 </div>
 
                <div class="form-row">
                <label>
                    <span>Item_Description</span>
                    <textarea name='item_description' ></textarea>
                </label>
                </div>
                <div class="form-row">
                <label>
                    <span>Availability</span>
                    <input type='text' name='availability' pattern='[0-9]+' required/>
                </label>
                </div>
                <div class="form-row">
                <label>
                    <span>Category</span>
                    <select type='dropdown' name='category' required>
                        <option>Snacks</option>
                        <option>Pizza</option>
                        <option>Chinese</option>
                    </select> 
                </label>
                </div>         
 
 
  <div class="form-row">
                <button type="submit">Insert Item</button>
  </div>
</form> 
<?php $__env->stopSection(); ?>
<!--
  <ul>
        <li> <a href='/view-orders'>View Orders</a></li>
        <li> <a href='/view-items'>View Items</a></li>
        <li><a href='/edit-items'>Update Items</a></li>
        <li><a href='/delete-items'>Delete Items</a></li>
  </ul>
</body>  
</html> --> 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>