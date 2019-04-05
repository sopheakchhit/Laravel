<?php $__env->startSection('title','Shopping Cart'); ?>

<link rel="shortcut icon" href="/assets/img/sc.png"/>

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


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position:;
   left: 0;
   margin-top: 150px;
   margin-bottom: 0px;
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
<div class="container">
  <div class="row">
  	 <div class="col-md-12 col-md-offset-0">
  	 		<center> <img src="/assets/img/HLG2.png" style="margin-top: 20px;"></center><br>
            <div class="panel panel-primary">
            	 <div class="panel-heading"><center>Your Shopping Products 
            	 	<i class="fa fa-fw fa fa-shopping-cart"></i></center> 
                    <div class="nav navbar navbar-left"><a href="<?php echo e(url('frontend')); ?>">
                    	<button class="btn btn-primary" style="margin-top:-27px;">
                    	<i class="fa fa-fw fa fa-home"></i> Home</button>
                    </a>
                    </div>
            	 </div>
                 

            	 <div class="panel-body">
   <div class="">
  	<!-- <h3 style="color:darkred">Your Shopping Product</h3> -->
  	<center style="color:mediumblue;"><?php echo e(Session::get('msg')); ?> </center>
  	<center style="color:orangered"><?php echo e(Session::get('msgcancel')); ?></center>
  	
      <table class="table table-bordered">
        <thead>
          <tr class="success">
	        <th>#</th>
	       
	        <th>Product Name</th>
	        <th>Product Price</th>
	        <th>Quantity</th>
	         <th>Cancel</th>
	        <th>SubTotal</th>
	       
          </tr>
        </thead>

        <tbody>
        	<?php 
        	  $i = 0; 
              $total = 0;
        	  ?>
        	<?php $__currentLoopData = $cartProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	         <tr>
		        <td class="success"><?php echo e(++$i); ?></td>
		        
		        	<input type="hidden" name="id" value="<?php echo e($cartProduct->id); ?>"> 
		        
		        <td><?php echo e($cartProduct->name); ?></td>
		        <td>$ <?php echo e($cartProduct->price); ?></td>
		        <td>
                    <?php echo Form::open(['url'=> '/update-cart', 'method'=> 'POST']); ?>

                      <input type="number" value="<?php echo e($cartProduct->qty); ?>" min="1" name="qty">
		        	  <input type="hidden" value="<?php echo e($cartProduct->rowId); ?>" name="rowId">
		        	  <button type="button" class="btn btn-default">
		        	  	<input type="submit" value="UPDATE">
		        	  </button>
                      
                    <?php echo Form::close(); ?>

		        </td>
		        <td>
		         	
		         	<a href="<?php echo e(url('/delete-cart-product/'.$cartProduct->rowId )); ?>">
		         	  <button type="button" class="btn btn-danger"
		         	   onclick="return confirm('Are you want to Cancel this Product?')" >Cancel
		         	  <i class="fa fa-fw fa fa-remove"></i></button>
		            </a>
		         	
		         </td> 
		        <?php $subTotal = $cartProduct->qty * $cartProduct->price; ?>
		        <td>$ <?php echo e($subTotal); ?></td>
		         
	         </tr>
	         <?php $total = $total+$subTotal; ?>
	        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	         <tr>
	         	<td></td>
	         	<td></td>
	         	<td></td>
	         	<td></td>
	         	<td>Total Price :</td>
	         	<td> $ <?php echo e($total); ?></td>

	         </tr>
        </tbody>
       
      </table>
   
		 <div class="nav navbar-nav navbar-right" style="margin-right: 5px;"> 
		 	 <a href="<?php echo e(url('frontend')); ?>"> <button class="btn btn-warning"> Continue Shopping 
		 	  <i class="fa fa-fw fa fa-shopping-cart"></i> </button></a> &nbsp; 
		 	 <a href="<?php echo e(url('check-out')); ?>"><button class="btn btn-primary">CheckOut
		 	 <i class="fa fa-fw fa fa-sign-out"></i>  </button> </a>
		 </div> 

 </div>
</div>
</div>
</div>
</div><!-- end row -->
</div><!-- end container -->

<div class="footer">
 <a href="<?php echo e(url('/frontend/about')); ?>" style="color: white;">
  <i class="fa fa-fw fa fa-user"></i> About Us</a>
 <div class="nav navbar navbar-right">Develop at 2018 | WIDYATAMA </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>