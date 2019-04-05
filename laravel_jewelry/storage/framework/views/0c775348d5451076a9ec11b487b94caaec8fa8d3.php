<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>">Login</a>
                        <a href="<?php echo e(url('/register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                 
              <?php $__env->startSection('content'); ?>
 
<div class="container">
  <div class="row">
    <a href="<?php echo e(url('/frontend')); ?>"> <img src="/assets/img/HLG2.png"></a> <br><br><br>
      
  <nav class="navbar navbar-default">
     <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
     </div>
     <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
     </ul>
    </div>
  </nav><br>


    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
      <div class="col-md-3">
        <div style="margin:5px;" class="well">
          <figure>
             <img src="<?php echo e(asset($product->image)); ?>" width="170" height="145">
          </figure>
          <p><?php echo e($product->description); ?></p>
          <p>$. <?php echo e($product->price); ?></p>


          <?php echo Form::open([ 'url' => '/cart-add', 'method' => 'POST' ]); ?>

            <input type="hidden" name="productId" value="<?php echo e($product->id); ?>">
            <input type="hidden" name="qty" value="1">
            <button type="submit" class="btn btn-primary">ADD CART</button> 
          <?php echo Form::close(); ?>


        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
    

    </div><!-- end row -->
</div><!-- end container -->


<?php $__env->stopSection(); ?>


           </div>
    </body>
</html>
