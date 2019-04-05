<?php $__env->startSection('content'); ?>
   <div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">

       <div class="row" id="main" >

         <form class="navbar-form navbar-left" method="POST" action="/searchcate">
              <?php echo e(csrf_field()); ?>

              <div class="form-group">
              <input type="text" name="q" class="form-control" placeholder="Search Categories">
              </div>
              <button type="submit" class="btn btn-primary">Search
              <i class="fa fa-fw fa fa-search"></i></button>  
          </form>

        <div class="nav navbar navbar-right" style="margin-right: 5px;">
            <a href="<?php echo e(url('admin/create_cate')); ?>"><button class="btn btn-success">
            <i class="fa fa-fw fa-plus" style="font-size: 18px;"></i> &nbsp;Add new Categories
            </button></a>
          </div><br><br><br>
        
         <div class="panel panel-success" style="margin-left: 12px;">

           <div class="panel-heading ">CATEGORIES</div>

           <div class="panel-body">
               <?php if(isset($cate)): ?>
             <table class="table"> 
               <tr class="warning">
               	<th><center>#</center> </th>
               	<th><center>Categories ID</center> </th>
               	<th><center>Categories Name</center> </th> 
              	<th><center>Action</center> </th>
               	<th><center>Action</center></th>
               </tr>
                
                <?php ($a=1); ?>
                <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cates): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><center><?php echo e($a++); ?></center> </td>
                  <td><center><?php echo e($cates->id); ?></center></td>
                  <td><center><?php echo e($cates->name); ?></center> </td>
                 
                  <td>
                   	<center>
                      <a href="<?php echo e(action('AdminController@edit_cate', $cates['id'])); ?>" class="btn btn-warning">
                      <i class="fa fa-fw fa fa-refresh" style="font-size: 18px;"> </i> Edit </a>
                    </center>  
                  </td>

                  <td>
                      <center>
                          <form action="<?php echo e(action('CategoryController@destroy', $cates['id'])); ?>" 
                                method="post">
                               <?php echo e(csrf_field()); ?>

                               <input name="_method" type="hidden" value="DELETE">
                               <button class="btn btn-danger " type="submit"
                                onclick="return confirm('Are sure for DELETE this Category?')" >
                                <i class="fa fa-fw fa fa-remove" style="font-size: 18px;"></i>  Delete
                               </button>
                               </form >
                        </td>
                   </center>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
             </table> 
              <?php echo e($cate->render()); ?>  
              <?php else: ?>
             ​​ <center><h3>Category <strong style="color: red;"> NOT FOUND </strong></h3></center>
             <?php endif; ?>
             <!-- <?php echo e($cate->links()); ?>  or use this one <?php echo $cate->render(); ?> -->
           </div>
        </div>

      
         
       </div>
      </div>


    </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>