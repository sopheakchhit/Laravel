 <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
 <script type="text/javascript" src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"​></script>


<!--  FA -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" 
    rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
    <script type="text/javascript" src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"​></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/menubar/css.css')); ?>">
    <script type="text/javascript" src="<?php echo e(url('assets/menubar/js.js')); ?>"></script>

<!--  end FA -->






<div class="container">
  <div class="row">
  	<div class="col-md-12 col-md-offset-0">
            <center><a href="<?php echo e(url('frontend')); ?>"><img src="/assets/img/HLG2.png" 
              style="margin-top: 40px;"></a>
             </center><br>
            <div class="panel panel-primary">
            	<div class="panel-heading"> <i class="fa fa-fw fa fa-user"></i> My Account </div>
                 
				<div class="panel-body" style="margin-left: 50px;">

			<i class="fa fa-fw fa fa-user"></i>	Name  : <h3><?php echo e($user->name); ?></h3> <br><hr> 
			<i class="fa fa-fw fa fa-envelope"></i> Email : <h3><?php echo e($user->email); ?></h3> <br><hr>
			<i class="fa fa-fw fa fa-institution"></i> Address : <h3><?php echo e($user->address); ?></h3> <br><hr>
			<i class="fa fa-fw fa fa-phone-square"></i> Phone Number : <h3><?php echo e($user->phone); ?></h3><br><hr>

		      <!--  <form action="<?php echo e(action('UserController@destroy', $user['id'])); ?>" 
                method="post" style="margin-right: 20px;">
		            <?php echo e(csrf_field()); ?>

		            <input name="_method" type="hidden" value="DELETE">
		            <button class="btn btn-danger " type="submit" 
		            onclick="return confirm('Are sure for DELETE your Account?')" >
		            Delete Account<i class="fa fa-fw fa fa-trash" style="font-size: 18px;"></i></button>
		        </form > -->

                  <!-- <a href="<?php echo e(action('HomeController@edit_customer_acc', $user['id'])); ?>" 
                  class="btn btn-warning">
                  <i class="fa fa-fw fa fa-refresh" style="font-size: 18px;"></i> Edit</a>  -->    
				</div>
			</div>
	</div>
  </div><!-- end row -->
</div><!-- end container -->
