 	<!-- Bootstrap -->
   	<link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
   	<script type="text/javascript" src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"​></script>
	<!-- Bootstrap -->

   	<!--  FA -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/menubar/css.css')); ?>">
    <script type="text/javascript" src="<?php echo e(url('assets/menubar/js.js')); ?>"></script>
  	<!--  FA -->


<div style="margin-left: 50px;">
<b> DATE : <?php echo e($date = date("l, d / F / Y")); ?> <br> </b>
<?php echo e(Auth::user()->name); ?><br>
<?php echo e(Auth::user()->email); ?><br>
<?php echo e(Auth::user()->address); ?><br>
<?php echo e(Auth::user()->phone); ?>

</div>

<center> 
	Your payment are success !! <br>
	<!-- <a href="<?php echo e(url('frontend')); ?>"> 
		<button class="btn btn-primary"><i class="fa fa-fw fa fa-home"></i> Home</button>
	</a> -->
<table align="center">
	<tr>
		<td>
		<script Language="Javascript">function printit()
		{
			if (window.print)
			{
				window.print() ;
			}
			
			else 
			{
				var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
				document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
				WebBrowser1.ExecWB(6, 2);//Use a 1 vs. a 2 for a prompting dialog box    WebBrowser1.outerHTML = "";
			}
		}
		</script>
		
		<script Language="Javascript">
			var NS = (navigator.appName == "Netscape");
			var VERSION = parseInt(navigator.appVersion);
			
			if (VERSION > 3)
			{
				document.write('<form> <input type=button value="Print this Page" name="Print" onClick="printit()"> </form>');
			}
		</script>
		</td>
	</tr>
</table>


		  <table class="table table-bordered">
		  	
            <thead>
              <tr>
    	          <th>#</th>
    	          
    	          <th>Product Name</th>
    	          <th>Product Price</th>
    	          <th>Quantity</th>
    	          <th>SubTotal</th>
    	        </tr>
            </thead>

            <tbody>
            	<?php $i = 0;  $total = 0; ?>
            	<?php $__currentLoopData = $cartProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      	         <tr>
        		        <td> <?php echo e(++$i); ?> </td>
        		         
                      <input type="hidden" name="id" value="<?php echo e($cartProduct->id); ?> ">  
                    
        		        <td> <?php echo e($cartProduct->name); ?> </td>
        		        <td> $ <?php echo e($cartProduct->price); ?> </td>
        		        <td> <?php echo e($cartProduct->qty); ?> </td> 
        		        <?php $subTotal = $cartProduct->qty * $cartProduct->price; ?>
        		        <td>$ <?php echo e($subTotal); ?> </td>
      	         </tr>
    	         <?php $total = $total+$subTotal; ?>
    	        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    	         <tr>
      	         
      	         <td></td>
      	         	<td></td>
      	         	<td></td>
      	         	<td> Total Price :</td>
      	         	<td>$ <?php echo e($total); ?></td>
    	         </tr>
            </tbody>
          </table> 
          after you print receipt success click <a href="<?php echo e(url('clear')); ?>">Finish</a>
        </center>