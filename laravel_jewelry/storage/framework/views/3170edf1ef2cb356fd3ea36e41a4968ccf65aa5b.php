
<form action="<?php echo e(url('Admin/Users')); ?>" enctype="multipart/form-data" method="POST">
	 <?php echo e(csrf_field()); ?>

	<input type="file" name="img">
	<input type="submit" name="btn" value="add">
</form>