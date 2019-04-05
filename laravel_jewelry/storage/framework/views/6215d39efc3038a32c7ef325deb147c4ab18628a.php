<?php $__env->startSection('title','View'); ?>
<link rel="shortcut icon" href="/assets/img/view.png" />


<!-- hover dropdown -->
<link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/hover dropdown/hover.css')); ?>">
<!-- hover dropdown -->


<!-- backtoTop -->
<link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/backtoTop/bt.css')); ?>">
<script type="text/javascript" src="<?php echo e(url('assets/backtoTop/bt.js')); ?>"></script>
<!-- backtoTop -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position:;
   left: 0;
   margin-top: 15px;
   margin-bottom: -100px;
   width: 100%;
   background-color:darkslategray;
   color: white;
   padding-left:30px;
   padding-right: 60px;
   padding-top:30px;
   height: 80px;
}
</style>

<?php $__env->startSection('content'); ?>

<nav class="navbar navbar" style="padding-left: 200px;">
     <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i>
      HOME</a>
     </div>
     <ul class="nav navbar-nav">
      <li><a href="#">|</a></li>
      <li><a href="<?php echo e(url('frontend/feedback')); ?>" onclick="return confirm('Login First !!')">
      <i class="fa fa-envelope"></i> MESSAGES US</a></li>
      <li><a href="#">|</a></li>
       <li class="dropdown">
        <a href="#">
          GOLD
          <div class="dropdown-content">
          <a href="<?php echo e(url('cat/gold_ring')); ?>">RINGS
          <img src="<?php echo e(asset('assets/img/hrg.png')); ?>" height="50" width="50"></a>
          <a href="<?php echo e(url('cat/gold_necklace')); ?>">NECKLACE
          <img src="<?php echo e(asset('assets/img/hng.png')); ?>" height="50" width="30"></a>
          <a href="<?php echo e(url('cat/gold_earrings')); ?>">EARRINGS
          <img src="<?php echo e(asset('assets/img/heg.png')); ?>" height="50" width="50"></a>
          </div>  
         </a>
      </li>
      <li><a href="#">|</a></li>
      <li class="dropdown">
        <a href="#">
          SILVER
          <div class="dropdown-content">
          <a href="<?php echo e(url('cat/silver_ring')); ?>">RINGS
           <img src="<?php echo e(asset('assets/img/hsr.png')); ?>" height="50" width="50"></a>
          <a href="<?php echo e(url('cat/silver_necklace')); ?>">NECKLACE
          <img src="<?php echo e(asset('assets/img/hsn.png')); ?>" height="50" width="30"></a>
          <a href="<?php echo e(url('cat/silver_earrings')); ?>">EARRINGS
          <img src="<?php echo e(asset('assets/img/hse.png')); ?>" height="50" width="50"></a>
          </div>  
         </a>
      </li>
       <li><a href="#">|</a></li>
      <li class="dropdown">
        <a href="#">
          DIAMOND
          <div class="dropdown-content">
          <a href="<?php echo e(url('cat/diamond_ring')); ?>">RINGS
          <img src="<?php echo e(asset('assets/img/hdr.png')); ?>" width="50" height="50"></a>
          <a href="<?php echo e(url('cat/diamond_necklace')); ?>">NECKLACE
          <img src="<?php echo e(asset('assets/img/hdn.png')); ?>" width="30" height="50"></a>
          <a href="<?php echo e(url('cat/diamond_earrings')); ?>">EARRINGS
          <img src="<?php echo e(asset('assets/img/hde.png')); ?>" width="50" height="50"></a>
          </div>  
         </a>
      </li>

     </ul>
    </div>
  </nav>


    <?php echo $__env->make('layouts.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   ​​ <br>

    <center>
      <marquee>Online Jewelry Shop</marquee><hr><br>
       <img src="<?php echo e(asset('assets/img/HLG2.png')); ?>">
    </center><br>  
  
<div class="container">
  <div class="row">
   
          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Product Detail 
                 <a href="<?php echo e(url('/')); ?>" class="nav navbar-nav navbar-right" 
                 style="padding-right:15px; margin-top:-7px;"><button class="btn btn-info">BACK</button> </a>
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


                   <?php echo Form::open([ 'url' => '/cart-add', 'method' => 'POST' ]); ?>

                      <input type="hidden" name="productId" value="<?php echo e($product->id); ?>">
                      <input type="hidden" name="qty" value="1">
                      <button type="submit" class="btn btn-success" 
                      onclick="return confirm('You must be Login first !!')">ADD CART 
                        <i class="fa fa-fw fa fa-shopping-cart"></i></button> 
                    <?php echo Form::close(); ?>

                           
            </center>
                </div>
                
            </div>
        </div>

    </div><!-- end row -->
</div><!-- end container --> <br>


    <div class="footer">
      <a href="<?php echo e(url('about')); ?>" style="color: white;"><i class="fa fa-fw fa fa-user"></i> About Us</a>
      <div class="nav navbar navbar-right">Develop at 2018 | WIDYATAMA </div>
    </div>
    
    <div class="nav navbar navbar-right">
      <a href="#" class="scrollToTop"> 
      <img src="<?php echo e(asset('assets/img/bt1.svg')); ?>" width="70" height="70">
      </a>
  </div>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>