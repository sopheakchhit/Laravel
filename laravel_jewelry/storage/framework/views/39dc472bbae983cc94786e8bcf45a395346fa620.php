  

<?php $__env->startSection('content'); ?>
<div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">
       <div class="row" id="main" >


        <form class="navbar-form navbar-left" method="POST" action="/pagiSearch">
           <?php echo e(csrf_field()); ?>

            <div class="form-group">
            <input type="text" name="q" class="form-control" placeholder="Search Products">
            </div>
             <button type="submit" class="btn btn-primary">Search
              <i class="fa fa-fw fa fa-search"></i></button>  
        </form>
        

        <div class="nav navbar navbar-right" style="margin-right: 5px;">
          <a href="<?php echo e(url('admin/product')); ?>"><button class="btn btn-primary">All Products
          <i class="fa fa-fw fa fa-pinterest-p"></i></button></a>​​ &nbsp;&nbsp;&nbsp;

            <a href="<?php echo e(url('admin/create')); ?>"><button class="btn btn-success">
            <i class="fa fa-fw fa-plus" style="font-size: 18px;"></i> &nbsp;Add new Product
            </button></a>
        </div><br><br><br>
        
         <div class="panel panel-success">

           <div class="panel-heading ">Products</div>

           <div class="panel-body">
              <?php if(isset($product)): ?>
             <table class="table"> 
               <tr class="warning">
               	<th>#</th>
               	<th>Images</th>
                <th>Products ID</th>
                 <th>Categories ID</th>
               	<th>Name</th>
               	<th>Description</th>
               	<th>Price</th>
               	<th>Action</th>
                <th>Action</th>
               	<th>Action</th>
               </tr>
                
              
                <?php ($a=1); ?>
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->index+1); ?></td>  <!-- or use this one <?php echo e($a++); ?> -->
                  <td><img src="<?php echo e(asset($products->image)); ?>" width="70" height="70"></td>
                  <td><?php echo e($products->id); ?></td>
                  <td><?php echo e($products->cat_id); ?></td>
                  <td><?php echo e($products->proname); ?></td>
                  <td><?php echo e($products->description); ?></td>
                  <td><?php echo e($products->price); ?></td>

                  <td>
                      <a href="<?php echo e(action('AdminController@edit', $products['id'])); ?>"
                      class="btn btn-warning">
                      <i class="fa fa-fw fa fa-refresh" style="font-size: 18px;"></i> Edit</a>  
                  </td>

                  <td>
                      <a href="<?php echo e(url('admin/viewPro',$products->id)); ?>">
                      <div class="col-sm-30">
                      <button type="submit" class="btn btn-success">
                      <i class="fa fa-search"></i> View
                      </button>
                      </div>
                      </a>
                  </td>

                  <td>
                      <form action="<?php echo e(action('ProductsController@destroy', $products['id'])); ?>" 
                      method="post">
                      <?php echo e(csrf_field()); ?>

                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger " type="submit"
                      onclick="return confirm('Are sure for DELETE this Product?')" >
                      <i class="fa fa-fw fa fa-remove" style="font-size: 18px;"></i> Delete </button>
                      </form >
                  </td>

                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             

                
             </table> 
             <?php echo e($product->links()); ?>

             <?php else: ?>
             ​​ <center><h3>Product <strong style="color: red;"> NOT FOUND </strong></h3></center>
             <?php endif; ?>
            
           </div>
        </div>

      
         
       </div>
      </div>


    </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>