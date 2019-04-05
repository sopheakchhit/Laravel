<?php $__env->startSection('content'); ?>
<br>
<div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">

       <div class="row" id="main" >

       <form class="navbar-form navbar-left" method="POST" action="/searchOrder">
           <?php echo e(csrf_field()); ?>

            <div class="form-group">
            <input type="text" name="q" class="form-control" placeholder="Search">
            </div>
             <button type="submit" class="btn btn-primary">Search
              <i class="fa fa-fw fa fa-search"></i></button>
             
        </form>


        <div class="nav navbar navbar-right" style="margin-right: 5px;">
          <a href="<?php echo e(url('admin/order')); ?>"><button class="btn btn-primary">All Orders
          <i class="fa fa-fw fa fa-file-text"></i></button></a>​​ &nbsp;&nbsp;&nbsp;
        </div>

        
        <br><br><br>

         <div class="panel panel-success">

           <div class="panel-heading"> ORDERINGS </div>

           <div class="panel-body">
                <?php if(isset($order)): ?>
             <table class="table"> 
               <tr class="warning">
               	<th><center>#</center></th>
               	<th><center>Order ID</center></th>
                 <th><center>Customer ID</center> </th>
               	<th><center>Products ID</center></th>
               	<th><center>Quantity</center></th>
               	<th><center>Order Date</center></th>
               	<th><center>Action</center></th>
               	<th><center>Action</center></th>
               </tr>
                
               <?php ($i = 1); ?>
               <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><center><?php echo e($i++); ?></center></td>
                  <td><center><?php echo e($orders->id); ?></center></td>
                  <td><center><?php echo e($orders->customer_id); ?></center></td>
                  <td><center><?php echo e($orders->pro_id); ?></center></td>
                  <td><center><?php echo e($orders->qty); ?></center></td>
                  <td><center><?php echo e($orders->created_at); ?></center></td>

                 
                   <td>
                     <center>
                      <a href="<?php echo e(url('admin/viewOrder',$orders->id)); ?>">
                      <div class="col-sm-30">
                      <button type="submit" class="btn btn-success">
                        <i class="fa fa-search"></i> View
                      </button>
                      </div>
                      </a>
                      </center>
                    </td>
                    

                  <td>
                    <center>
                        <form action="<?php echo e(action('OrderController@destroy', $orders,['id'])); ?>" 
                              method="post">
                              <?php echo e(csrf_field()); ?>

                              <input name="_method" type="hidden" value="DELETE">
                              <button class="btn btn-danger " type="submit"
                              onclick="return confirm('Are sure for DELETE this Order Report?')" >
                              <i class="fa fa-fw fa fa-remove" style="font-size: 18px;"></i>  Delete
                              </button>
                        </form>
                    </center>
                  </td>
                       

                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
             </table> 
             
             <?php echo e($order->render()); ?>  
              <?php else: ?>
             ​​ <center><h3>Orders <strong style="color: red;"> NOT FOUND </strong></h3></center>
             <?php endif; ?>
           
           </div>
        </div>
         
      

      </div>
    </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>