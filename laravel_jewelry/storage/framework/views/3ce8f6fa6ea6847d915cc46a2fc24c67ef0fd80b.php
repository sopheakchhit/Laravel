<?php $__env->startSection('title','View'); ?>
<link rel="shortcut icon" href="/assets/img/view.png" />

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <a href="<?php echo e(url('/')); ?>"> <img src="/assets/img/HLG2.png"></a> <br><br><br>
      
  <nav class="navbar navbar-default">
     <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="#">HOME</a>
     </div>
     <ul class="nav navbar-nav">
      <li><a href="#">|</a></li>
      <li><a href="#">ABOUT US</a></li>
      <li><a href="#">|</a></li>
      <li><a href="#">CONTECT US</a></li>
      <li><a href="#">|</a></li>
      <li><a href="#">SILVER</a></li>
      <li><a href="#">|</a></li>
      <li><a href="#">GOAL</a></li>
      <li><a href="#">|</a></li>
      <li><a href="#">DIAMAND</a></li>
     </ul>
    </div>
  </nav><br>



    <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Product Detail 
                 <a href="<?php echo e(url('/')); ?>" class="nav navbar-nav navbar-right" 
                 style="padding-right:15px;">BACK</a>
                 </div>
               
            <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
            <center>
            	<img src="<?php echo e(asset($product->image)); ?>" width="200" height="200"> <hr>
                  
                  <p>Name : <?php echo e($product->proname); ?></p>
                  <p>Price : $. <?php echo e($product->price); ?></p>
                  <p>Description : <?php echo e($product->description); ?></p> 

                  
        <a href="<?php echo e(url('frontend')); ?>"><button type="submit" class="btn btn-success" 
               onclick="return confirm('You must be Login first !!')">ADD CART </button> </a>
                 
            </center>
                </div>
                
            </div>
    </div>
    
    

    </div><!-- end row -->
</div><!-- end container -->
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>