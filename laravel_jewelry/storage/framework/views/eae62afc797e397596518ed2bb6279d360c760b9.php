<?php $__env->startSection('content'); ?>
<div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">
      <div class="row" id="main" >
          <div class="panel panel-success">
            <div class="panel panel-heading">Read and Reply Message</div>
            <div class="panel panel-body" style="margin-left: 5px;">

              
               <div class="form-group row">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                <h4>
        USER ID : <b><?php echo e($fb->user_id); ?></b></h4>
                </div>
            </div>

             <div class="form-group row">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                <h4>
				ARRIVE DATE : <b><?php echo e($fb->created_at); ?></b></h4>
                </div>
            </div>

            <div class="form-group row">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                <h4>
				SUBJECT : <b style="color: red;"><?php echo e($fb->subject); ?></b></h4>
                </div>
            </div>
    
  			<div class="form-group row">
  				<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                <h4>MESSAGES :</h4>
                 <p><?php echo e($fb->message); ?></p>
                </div>
            </div>

            <div class="form-group row">
  				<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                 <form action="<?php echo e(action('FeedbackController@destroy', $fb['id'])); ?>" 
                    method="post">
                    <?php echo e(csrf_field()); ?>

                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger " type="submit"
                    onclick="return confirm('Are sure for DELETE this Product?')" >
                    <i class="fa fa-fw fa fa-remove" style="font-size: 18px;"></i> Delete Message
                  </button>
            </form >
                </div>
            </div>

            
            <hr><hr>
            <h2>Reply here</h2>
            <form method="POST" action="<?php echo e(url('Admin/Sendback')); ?>"> 
  			
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
                  <input type="hidden" name="id" value="<?php echo e($fb->user_id); ?>" 
                  class="form-control form-control-lg" id="lgFormGroupInput" >
                </div>
            </div>

            <div class="form-group row">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                  <input type="hidden" name="status" value="0" 
                  class="form-control form-control-lg" id="lgFormGroupInput" >
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
                <input type="submit" value="REPLY" class="form-control form-control-lg btn btn-success" 
                id="lgFormGroupInput">
                </div>
            </div>
  			
  		</form>

            </div>
          </div>
      </div>
    </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->
<?php $__env->stopSection(); ?>

		

     
<?php echo $__env->make('layouts.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>