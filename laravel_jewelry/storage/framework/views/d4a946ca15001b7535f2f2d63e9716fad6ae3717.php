<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <!-- <form action="https://www.sandbox.paypal.com/us/cgi-bin/webscr" method="post"> -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="upload" value="1">
  <input type="hidden" name="business" value="sopheakchhit99-facilitator@gmail.com">

   <?php $count = 0;?>

   <?php $__currentLoopData = $cartProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php  $count++; ?>
      <input type="hidden" name="item_name_<?php echo e($count); ?>" value="<?php echo e($cartProduct->name); ?>">
      <input type="hidden" name="item_number_<?php echo e($count); ?>" value="<?php echo e($cartProduct->id); ?>">
      <input type="hidden" name="quantity_<?php echo e($count); ?>" value="<?php echo e($cartProduct->qty); ?>">
      <input type="hidden" name="amount_<?php echo e($count); ?>" value="<?php echo e($cartProduct->price); ?>">
      <input type="hidden" name="shipping_<?php echo e($count); ?>" value="0.50"> 
      <input type="hidden" name="tax_<?php echo e($count); ?>" value="0.05">
      <br>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
  <input type=image id="paypalbtn" src=assets/img/pp.png alt="Submit feedback" height="90" width="300">

</form>