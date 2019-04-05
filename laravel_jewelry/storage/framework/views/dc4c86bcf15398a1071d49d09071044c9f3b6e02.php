<?php $__env->startSection('content'); ?>
<div class="container">
 <div class="row">
  <div class="panel panel-primary">
  	<div class="panel panel-heading">FeedBack Us</div>
  	<div class="panel panel-body" style="margin-left:10px;">
  		<form method="post" action="#"> 
  			
  		    <div class="form-group row">
                <?php echo e(csrf_field()); ?>

                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                <h4>SUBJECT :</h4>
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" 
                placeholder="Subject" name="sub">
                </div>
            </div>

  			<div class="form-group row">
  				<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                <h4>MESSAGES :</h4>
                <textarea class="form-control" rows="7" name="msg" placeholder="Messages"></textarea>
                </div>
            </div>

            <div class="form-group row">
  				<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                <input type="submit" value="SEND" class="form-control form-control-lg btn btn-primary" 
                id="lgFormGroupInput">
                </div>
            </div>
  			
  		</form>
  	</div>
  </div>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>