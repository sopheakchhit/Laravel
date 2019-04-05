<?php $__env->startSection('title','ADMIN SLIDER'); ?>

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
         <div class="panel panel-info">
            <div class="panel-heading ">ADD IMAGE FOR SLIDER</div>
            <div class="panel-body">            
              <form  method="POST" action="<?php echo e(url('Admin/Slider')); ?>" enctype="multipart/form-data" >

                <div class="form-group row">
                  <?php echo e(csrf_field()); ?>

                  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                    Image Slider
                  </label>
                  <div class="col-sm-6">
                  <input type="file" name="image" class="form-control form-control-lg" 
                  id="lgFormGroupInput"  required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                  Slider Name
                  </label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" 
                  placeholder="Slider Name" name="name">
                  </div>
                </div>
       
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

          <div class="form-group row">
            <div class="col-md-2"></div>
            <input type="submit" class="btn btn-primary" value="ADD">
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