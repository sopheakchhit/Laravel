<?php $__env->startSection('content'); ?>
<div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">
      <div class="row" id="main" >
          <div class="panel panel-success">
            <div class="panel panel-heading">Messages reply Users</div>
            <div class="panel panel-body" style="margin-left: 5px;">

              <table class="table table-bordered">
                <tr class="warning">
                  <th><center>#</center></th>
                  <th><center>USER ID</center></th>
                  <th><center>SUBJECT</center></th>
                  <th><center>MESSAGES</center></th>
                  <th><center>REPLY DATE</center></th>
                  <th><center>ACTION</center></th>
                </tr>

                <?php $__currentLoopData = $sb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sbs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td ><center><?php echo e($loop->index+1); ?></center></td>
                  <td><center><?php echo e($sbs->user_id); ?></center></td>
                  <td><center><?php echo e($sbs->subject); ?></center></td>
                  <td><center><?php echo e($sbs->message); ?></center></td>
                  <td><center><?php echo e($sbs->created_at); ?></center></td>
                  <td>
                    
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>

            </div>
          </div>
      </div>
    </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>