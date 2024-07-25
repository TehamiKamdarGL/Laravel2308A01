@extends('layouts.admin_main')

@section('main-section')
   <div class="container w-50 h-100">
      <form action="/insert" method="POST" enctype="multipart/form-data">
         <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" name="productname" id="">
         </div>
         <div class="form-group">
            <label for="product_desc">Product Description</label>
            <input type="text" class="form-control" name="productdesc" id="">
         </div>
         <div class="form-group">
            <label for="product_price">Product Price</label>
            <input type="text" class="form-control" name="productprice" id="">
         </div>
         <div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control" name="productimage" id="">
         </div>
         <div class="form-group">
            <label for="product_active">Product Active</label>
            <select class="form-select" name="productactive" id="">
               <option value="" selected disabled>Select an option..</option>
               <option value="yes">Yes</option>
               <option value="no">No</option>
            </select>
         </div>
         <div class="form-group">
            <button type="submit" class="btn w-100 btn-primary mt-3">Save</button>
         </div>
      </form>
   </div>
@endsection