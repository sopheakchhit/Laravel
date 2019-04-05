 	<!-- JQuery -->
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   	<!-- JQuery -->

	<!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
    <script type="text/javascript" src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"​></script>
	<!-- Bootstrap -->

   	<!--  FA -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/menubar/css.css')); ?>">
    <script type="text/javascript" src="<?php echo e(url('assets/menubar/js.js')); ?>"></script>
  	<!--  FA -->

<script type="text/javascript">
  $(document).ready(function(){
    <?php $__currentLoopData = $inbox; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inboxs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      $("#inboxs<?php echo e($inboxs->id); ?>").click(function(){
      	var mId = $("#mId<?php echo e($inboxs->id); ?>").val();
      	$.ajax({
      		type:'get',
      		date: 'mgsId=' + mId,
      		url: '<?php echo e(url('updateInbox')); ?>',
      		success:function(response){
      		console.log(response);
      		}
      	});
      });
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  });
</script>


<div class="container">
	<div class="row">
		<div class="nav navbar navbar-right" style="margin-right: 0px;">
			<a href="<?php echo e(url('frontend')); ?>"><button class="btn btn-primary">
            <i class="fa fa-fw fa fa-home"></i> HOME</button></a>&nbsp;&nbsp;&nbsp;

			
          	<a href="<?php echo e(url('frontend/feedback')); ?>"><button class="btn btn-success">
            <i class="fa fa-fw fa fa-edit"></i> Feedback</button></a>​​ &nbsp;&nbsp;&nbsp;

            <a href="<?php echo e(url('Admin/Sendback')); ?>"><button class="btn btn-danger">
            <i class="fa fa-fw fa fa-envelope-o" style="font-size: 18px;"></i> &nbsp;Inboxs
            </button></a>
        </div>

        <div class="col-md-8">  
	  	<div class="panel panel-success">
	  	<div class="panel panel-heading">My Inboxs 
	  		<div class="nav navbar navbar-right" style="margin-right: 10px;">
	  			<?php echo e(Auth::user()->name); ?>

	  		</div>
	  	</div>
	  	<div class="panel panel-body" style="margin-left: 10px;">
	  		<table class="table">
	  		  	<tr>
		  		  	<th>#</th>
		  		  	<th>FROM</th> 
		  		  	<th><center>SUBJECT</center></th>
		  		  	<th>DATE</th>
	  		  	</tr>
	  		
		  		<?php $__currentLoopData = $inbox; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inboxs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			  	  	<input type="hidden" value="<?php echo e($inboxs->id); ?>" id="mId<?php echo e($inboxs->id); ?>">
			  		<?php if($inboxs->status=="0"): ?>
			  	  	<tr class="info" id="inboxs<?php echo e($inboxs->id); ?>">
			  		<?php else: ?>
			  	  	<tr>
			  		<?php endif; ?>
			  	  	<td><input type="checkbox"></td>
			  		<td>ADMIN</td>
			  		<td>
			  		<center>
			  		<a href="#" data-toggle="collapse" data-target="#d<?php echo e($inboxs->id); ?>">
			  		<?php echo e($inboxs->subject); ?> 
				   	</a> <hr>
				    <div id="d<?php echo e($inboxs->id); ?>" class="collapse" 
				    style="height:auto; width: 300px;"> 
				   	<?php echo e($inboxs->message); ?> <br><hr><a href="#">Delete</a> | <a href="#">Reply</a> 
				   	</center> 
			  		</td>
				    <td><?php echo e($inboxs->created_at); ?></td>
			  		</tr>
		  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  	</table>
	  	</div>
	  </div>
	  </div>

	</div>
</div> 