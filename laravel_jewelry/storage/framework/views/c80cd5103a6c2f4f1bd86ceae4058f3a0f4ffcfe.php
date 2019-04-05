<?php $__env->startSection('content'); ?>
  
  <div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">
       <div class="row" id="main" >
         <div class="col-sm-12 col-md-12 well" id="content">
         <div class="panel panel-success">
           <div class="panel-heading ">Edit Categories</div>
           <div class="panel-body">


   	  <form method="post" action="<?php echo e(action('CategoryController@update' ,$id)); ?>">
   	  	
       <div class="form-group row">
         <?php echo e(csrf_field()); ?>

         <input name="_method" type="hidden" value="PATCH">
        <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">
          Categories Name
        </label>
        <div class="col-sm-6">
       <input type="text" name="cate_name" class="form-control form-control-lg" id="lgFormGroupInput"
         value="<?php echo e($cate->name); ?>">
        </div> 
       </div>

      
       <div class="form-group row">
        <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">
        </label>
        <div class="col-md-6">
        <button type="submit" class="btn btn-danger"><i class="fa fa-refresh"></i> Update</button>
        </div>
    </div>

   	  </form>

   	   </div>

        </div>
       
       </div>
      </div>

 </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>