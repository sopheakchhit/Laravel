<?php $__env->startSection('content'); ?>
<div id="wrapper">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row" id="main" >
	<div class="panel panel-success">
		<div class="panel panel-heading">Product View</div>
		<div class="panel panel-body" style="margin-left: 10px;">
			<div class="col-md-12">
				<div class="col-sm-6">
					<img src="<?php echo e(asset($product->image)); ?>" width="300" height="250">
				</div>
				<div class="col-sm-6">
					<h4><strong>ID : <?php echo e($product->id); ?></strong></h4><hr>
					<h4><strong>NAME : <?php echo e($product->proname); ?></strong></h4><hr>
					<h4><strong>PRICE : $ <?php echo e($product->price); ?></strong></h4><hr>
					<h4><strong>DESCRIPTION : <?php echo e($product->description); ?></strong></h4><hr>
				</div>
			</div>			
		</div>
	</div>
</div> <!-- end row -->
</div> <!-- end container-fluid -->
</div><!--  end page-wrapper -->
</div><!--  end wrapper -->
<?php $__env->stopSection(); ?>

		
<?php echo $__env->make('layouts.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>