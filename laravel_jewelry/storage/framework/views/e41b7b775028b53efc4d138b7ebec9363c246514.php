<?php $__env->startSection('content'); ?>
<div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">

       <div class="row" id="main" >

          <form class="navbar-form navbar-left" method="POST" action="/searchUsers">
              <?php echo e(csrf_field()); ?>

              <div class="form-group">
              <input type="text" name="q" class="form-control" placeholder="Search Users">
              </div>
              <button type="submit" class="btn btn-primary">Search
              <i class="fa fa-fw fa fa-search"></i></button>  
          </form><br><br><br>
        
         <div class="panel panel-success" style="margin-left: 12px;">

           <div class="panel-heading "> USERS </div>

           <div class="panel-body">
               <?php if(isset($user)): ?>
             <table class="table"> 
               <tr class="warning">
               	<th>#</th>
               	<th>ID</th>
                 <th>Name</th>
               	<th>Address</th>
               	<th>Phone Number</th>
               	<th>Email</th>
               	<th>Action</th>
               	<th>Action</th>
               </tr>
                
               <?php ($i = 1); ?>
               <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($i++); ?></td>
                  <td><?php echo e($users->id); ?></td>
                  <td><?php echo e($users->name); ?></td>
                  <td><?php echo e($users->address); ?></td>
                  <td><?php echo e($users->phone); ?></td>
                  <td><?php echo e($users->email); ?></td>

                   <td>
                       <a href="<?php echo e(url('admin/viewUser',$users->id)); ?>">
                      <div class="col-sm-30">
                      <button type="submit" class="btn btn-success">
                        <i class="fa fa-search"></i> View
                      </button>
                      </div>
                      </a> 
                    </td>



                  <td>
                          <form action="<?php echo e(action('AdminController@deleteUser', $users['id'])); ?>" 
                                     method="get">
                               <?php echo e(csrf_field()); ?>

                               <input name="_method" type="hidden" value="DELETE">
                               <button class="btn btn-danger " type="submit"
                                onclick="return confirm('Are sure for DELETE this User?')" >
                                <i class="fa fa-fw fa fa-remove" style="font-size: 18px;"></i>  Delete
                               </button>
                               </form >
                        </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
             </table> 
             <?php echo e($user->render()); ?>  
              <?php else: ?>
             ​​ <center><h3>User <strong style="color: red;"> NOT FOUND </strong></h3></center>
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