
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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


<div class="container" style="margin-top: 100px;">
	  <div class="panel panel-info">
	  	<div class="panel panel-heading">My Inboxs 
	  		<div class="nav navbar navbar-right" style="margin-right: 10px;">
	  			<?php echo e(Auth::user()->name); ?>

	  		</div>
	  	</div>
	  	<div class="panel panel-body">
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
		  	  <tr class="success" id="inboxs<?php echo e($inboxs->id); ?>">
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
