<?php $__env->startSection('title','HOME'); ?>
<link rel="shortcut icon" href="/assets/img/home.png" />

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <a href="<?php echo e(url('/')); ?>"> <img src="/assets/img/HLG2.png"></a> <br> <br> <br>
      
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
      <li><a href=#"">SILVER</a></li>
      <li><a href="#">|</a></li>
      <li><a href="#">GOAL</a></li>
      <li><a href="#">|</a></li>
      <li><a href="#">DIAMAND</a></li>
     </ul>
    </div>
  </nav><br>

     <?php echo $__env->make('layouts.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <br> 

     <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
       <div class="col-md-3">
         <div style="margin:7px;" class="well">
           <figure>
             <img src="<?php echo e(asset($product->image)); ?>" width="170" height="145">
           </figure>
           <p><?php echo e($product->description); ?></p>
           <p>$. <?php echo e($product->price); ?></p>
           
           <a href="<?php echo e(url('view',$product->id)); ?>">
             <button type="submit" class="btn btn-success">View</button>
           </a>
                   
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </div><!-- end row -->
</div><!-- end container -->
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>