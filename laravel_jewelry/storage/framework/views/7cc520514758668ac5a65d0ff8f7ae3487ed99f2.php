<?php $__env->startSection('title','ADMIN PRODUCT'); ?>

<?php $__env->startSection('content'); ?>

  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
</head>
<body>
  <div id="wrapper">
    <div id="page-wrapper">
      <div class="container-fluid">
            <!-- Page Heading -->
        <div class="row" id="main" >
         <div class="col-sm-12 col-md-12 well" id="content">
         <div class="panel panel-success">
            <div class="panel-heading ">ADD PRODUCTS</div>
            <div class="panel-body">            
              <form  method="POST" action="<?php echo e(url('Admin/Product')); ?>" enctype="multipart/form-data" >

                <div class="form-group row">
                  <?php echo e(csrf_field()); ?>

                  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Product Name
                  </label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" 
                  placeholder="Product Name" name="proname">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Product Image
                  </label>
                  <div class="col-sm-6">
                  <input type="file" name="image" class="form-control form-control-lg" 
                  id="lgFormGroupInput"  required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Description
                  </label>
                  <div class="col-sm-6">
                  <input type="text" name="description" class="form-control form-control-lg" 
                   id="lgFormGroupInput" placeholder="Description" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Price
                  </label>
                  <div class="col-sm-6">
                  <input type="text" name="price" class="form-control form-control-lg" 
                   id="lgFormGroupInput" placeholder="price" required>
                  </div>
                </div>

                <div class="form-group row">
                 <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Category</label>
                 <div class="col-sm-6">
                <select name="category" class="form-control form-control-lg" id="lgFormGroupInput" required>
                 <option value="" disabled selected style="display: none;">Select Category</option>
                 <option value='1'>Gold Ring</option>
                 <option value="4">Gold Necklace</option>
                 <option value="5">Gold Earrings</option>
                 <option value='2'>Silver Ring</option>
                 <option value="6">Silver Necklace</option>
                 <option value="7">Silver Earrings</option>
                 <option value='3'>Diamond Ring</option>
                 <option value="8">Diamond Necklace</option>
                 <option value="9">Diamond Earrings</option>
                 </select>
                 </div>
                </div>
           
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

          <div class="form-group row">
             <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg"></label>
            <div class="col-md-6">
            <button type="submit" class="btn btn-danger"><i class="fa fa-plus"></i> ADD</button>
            </div>
         </div>
    </form>
    </div>
    </div>
    </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
</div>
</body>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>