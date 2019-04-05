 	 <title><?php echo $__env->yieldContent('title','Receipt'); ?></title>
   <link rel="shortchut icon" href="/assets/img/receipt.png"/>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
  <script type="text/javascript" src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"​></script>
	<!-- Bootstrap -->

  <!--  FA -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/menubar/css.css')); ?>">
  <script type="text/javascript" src="<?php echo e(url('assets/menubar/js.js')); ?>"></script>
  <!--  FA -->


<div class="container">
  <div class="row">
    <center>
      <img src="/assets/img/HLG2.png" width="250" height="150"><br><hr>
      <h2><strong>RECEIPT</strong></h2>
    </center>

  <div class="nav navbar navbar-right">  
    <table align="center">
      <tr>
        <td>
          <script Language="Javascript">function printit()
          {
            if (window.print)
            { window.print() ; }
      
            else 
            {
              var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
              document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
              WebBrowser1.ExecWB(6, 2);
              //Use a 1 vs. a 2 for a prompting dialog box    WebBrowser1.outerHTML = "";
            }
          }
          </script>
    
          <script Language="Javascript">
            var NS = (navigator.appName == "Netscape");
            var VERSION = parseInt(navigator.appVersion);
            
            if (VERSION > 3)
            {

               document.write('<form> <input type=button class="btn btn-danger" value="Print Receipt" name="Print" onClick="printit()"> </form>');
            }
          </script>
        </td>
      </tr>

      <tr>
        <td>
          <strong>After you print receipt success click <a href="<?php echo e(url('clear')); ?>">Finish</a></strong> 
        </td>
      </tr>  
    </table>    
  </div>   

  <div style="margin-left: 50px;">
  <b> DATE :  <?php echo e($date = date("l, d / F / Y")); ?></b> <br><br>
  <b> NAME :  <?php echo e(Auth::user()->name); ?> <b> <br><br>
  <b> EMAIL : <?php echo e(Auth::user()->email); ?></b><br><br>
  <b> ADDRESS :  <?php echo e(Auth::user()->address); ?></b><br><br>
  <b> TELEPHONE : <?php echo e(Auth::user()->phone); ?></b>   
  </div> <br><br>


	<table class="table">
		<thead>
      <tr class="success">
    	  <th>#</th>     
    	    <th>Product Name</th>
    	    <th>Product Price</th>
    	    <th>Quantity</th>
    	    <th>SubTotal</th>
    	</tr>
    </thead>

    <tbody>
      <?php $i = 0;  $total = 0;?>
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
      	  <td class="info"> <b>Total Price :</b></td>
      	  <td class="info">$ <?php echo e($total); ?></td>    
    	  </tr>

         <tr>        
          <td></td>
          <td class="warning">Shipping cost per item</td>
          <td class="warning">$ 0.3</td>
          <td class="info"> <b> Shipping :</b></td>
          <td class="info">$ <?php echo e($shipping = Cart::count() * 0.3); ?></td>    
        </tr>

         <tr>        
          <td></td>
          <td class="warning">Tax cost per item</td>
          <td class="warning">$ 0.1</td>
          <td class="info"> <b> Tax :</b></td>
          <td class="info">$ <?php echo e($tax = Cart::count() * 0.1); ?></td>    
        </tr>

         <tr>        
          <td></td>
          <td class="warning">Total Products Quantity</td>
          <td class="warning">(<?php echo e(Cart::count()); ?>)</td>
          <td class="info"><b>Total Payment :</b> </td>
          <td class="info"> <b style="color: red;">$ <?php echo e($tax + $shipping + $total); ?></b></td>    
        </tr>
       
    </tbody>
  </table>
  <br><br><hr>
  <center>
    <h4>
      <strong>Jewelry Online Shop 2018 ®</strong>
    </h4><hr>
  </center>
       
  </div> <!-- end row -->
</div> <!-- end container -->