<div>

            <span>
              <input type="radio" name="pay" checked="checked" id="cash"> Default
            </span>

            <span>
              <input type="radio" name="pay" id="paypal"> PayPal
               <?php echo $__env->make('layouts.paypal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </span>

            <span>
              <input type="submit" id="cashbtn" class="btn btn-primary">
            </span>
 
        </div>

        <script>

               $('#paypalbtn').hide();
               $('#cashbtn').hide();

               $(':radio[id=paypal]').Change(function(){
                    $('#paypalbtn').show();
                    $('#cashbtn').hide();
                });

                $(':radio[id=cash]').Change(function(){
                    $('#paypalbtn').hide();
                    $('#cashbtn').show();
                });
        </script>
