@extends('layouts.app')

@section('title')
Update Item
@endsection

@section('styles')
<link rel="stylesheet" href="/css/form-basic.css">
@endsection
 
@section('content') 
<form  action="/edit/<?php echo $items[0]->Item_ID; ?>" method="post" class="form-basic"> 
 <div class="form-title-row">
                <h1>Update Item</h1>
            </div>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/> 
<div class="form-row">
                <label>
                    <span>Item_Name</span>
                    <input type='text' name='item_name' value="<?php echo $items[0]->Item_Name; ?>" required />
                </label>
 </div> 
 <div class="form-row">
                <label>
                    <span>Item_Price</span>
                    <input type='text' name='item_price' value='<?php echo $items[0]->Item_Price; ?>' pattern="[0-9]+" required/>
                </label>
 </div>
 
 <div class="form-row">
                <label>
                    <span>Item_Ingredients</span>
                    <textarea name='item_ingredients'><?php echo $items[0]->Item_Ingredients; ?></textarea>
                </label>
 </div>
 
 <div class="form-row">
                <label>
                    <span>Item_Description</span>
                    <textarea name='item_description'><?php echo $items[0]->Item_Description; ?></textarea>
                </label>
 </div>
<div class="form-row">
                <label>
                    <span>Availability</span>
                    <input type='text' name='availability' value='<?php echo $items[0]->Availability; ?>' pattern='[0-9]+' required/>
                </label>
 </div>
 <div class="form-row">
                <label>
                    <span>Category</span>
                    <select type='dropdown' name='category' value="{{$items[0]->Category}}" required>
                        <option>Snacks</option>
                        <option <?php if($items[0]->Category == 'Pizza'){ echo 'selected';}?>>Pizza</option>
                        <option <?php if($items[0]->Category == 'Chinese'){ echo 'selected';}?>>Chinese</option>
                    </select>
                </label>
 </div>
<div class="form-row">
                <button type="submit">Update Item</button>
  </div>
 
</form>
@endsection