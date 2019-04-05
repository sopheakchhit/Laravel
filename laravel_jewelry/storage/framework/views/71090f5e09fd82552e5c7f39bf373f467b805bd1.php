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
	                </label>
	                <div class="col-sm-6">
	                <h4>
					ORDER ID : <b><?php echo e($order->id); ?></b></h4>
	                </div>
                </div>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                </label>
	                <div class="col-sm-6">
	                <h4>
					CUSTOMER ID : <b><?php echo e($order->customer_id); ?> </b></h4>
	                </div>
                </div>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                </label>
	                <div class="col-sm-6">
	                <h4>
					PRODUCT ID : <b><?php echo e($order->pro_id); ?> </b></h4>
	                </div>
                </div>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                </label>
	                <div class="col-sm-6">
	                <h4>
					QUANTITY : <b><?php echo e($order->qty); ?> </b></h4>
	                </div>
                </div>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                </label>
	                <div class="col-sm-6">
	                <h4>
					ORDER DATE : <b><?php echo e($order->created_at); ?></b></h4>
	                </div>
                </div>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                </label>
	                <div class="col-sm-6">
	                <a href="<?php echo e(url('admin/viewUser',$order->customer_id)); ?>">
				 	<button class="btn btn-danger"><i class="fa fa-user"></i> USER INFO</button>
					</a>
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