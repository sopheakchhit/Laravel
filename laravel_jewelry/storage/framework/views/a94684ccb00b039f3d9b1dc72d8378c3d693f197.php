<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>

  
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
      width: 100%;
      z-index: 9999 !important;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
  </style>


 <!--  FA -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
    <script type="text/javascript" src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"​></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/menubar/css.css')); ?>">
    <script type="text/javascript" src="<?php echo e(url('assets/menubar/js.js')); ?>"></script>

<!--  end FA -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- <title><?php echo e(config('', 'Laravel')); ?></title> -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
    <script type="text/javascript" src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"​></script>

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="300">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <!-- <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp; 
                        <li><a href="#"><i class="fa fa-fw fa-facebook"></i> : 
                        Light of Glory Online Shop</a></li>
                        <li><a href="#"><i class="fa fa-fw fa fa-envelope"></i> :
                        sopheakchhit99@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-fw fa fa-phone"></i> : 
                        087 23 80 36</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login
                            <i class="fa fa-fw fa fa-sign-in"></i> </a></li>
                            <li><a href="#">|</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Create Account
                                <i class="fa fa-fw fa fa-user-plus"></i></a></li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo e(url('frontend/cart-show')); ?>">
                                  <i class="fa fa-fw fa fa-shopping-cart"></i> Cart 
                                 ( <?php echo e(Cart::count()); ?> )
                                </a>

                            </li>
                           
                             
                            <li><a href="#">|</a></li>
                            <li>
                               
                                <a href="<?php echo e(url('check-out')); ?>">
                                 <i class="fa fa-fw fa fa-sign-out"></i> CheckOut  
                                </a>
                                
                            </li>
                            <li><a href="#">|</a></li>
                            <li class="dropdown">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                     <i class="fa fa-fw fa fa-user"></i>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                  
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="fa fa-fw fa fa-sign-out"></i> Logout 
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                 <li> <a href="<?php echo e(url('frontend/user-acc', Auth::user()->id)); ?>">
                                    <i class="fa fa-fw fa-user"></i> My Account
                                       
                                    </a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        
        
        <?php echo $__env->yieldContent('content'); ?>
        
      <br>
       
      
    </div>
    
   <br>  

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
   
</body>
</html>
