<?php $__env->startSection('content'); ?>
<div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">
       <div class="row" id="main" >

        <div class="panel panel-success">
        	<div class="panel panel-heading">Order and User Info</div>
        	<div class="panel panel-body" style="margin-left: 10px;">

        	  	<div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                <i class="fa fa-info"> </i> 
	                </label>
	                <div class="col-sm-6">
					 <b><?php echo e($user->id); ?></b>
	                </div>
                </div><hr>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                <i class="fa fa-user"></i> 
	                </label>
	                <div class="col-sm-6">
	                
					<b><?php echo e($user->name); ?> </b>
	                </div>
                </div><hr>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                <i class="fa fa-envelope"></i> 
	                </label>
	                <div class="col-sm-6">
	               
					 <b><?php echo e($user->email); ?> </b>
	                </div>
                </div><hr>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                <i class="fa fa-home"></i> 
	                </label>
	                <div class="col-sm-6">
	               
					<b><?php echo e($user->address); ?> </b>
	                </div>
                </div><hr><hr>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                <i class="fa fa-phone-square"></i> 
	                </label>
	                <div class="col-sm-6">
	                
					 <b><?php echo e($user->phone); ?></b>
	                </div>
                </div>
				
        	</div>
        </div>
		

      </div> <!-- end rwo -->
    </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->
<?php $__env->stopSection(); ?>



 
<?php echo $__env->make('layouts.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>