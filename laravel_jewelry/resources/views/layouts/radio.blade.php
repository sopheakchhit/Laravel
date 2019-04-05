<div>

            <span>
              <input type="radio" name="pay" checked="checked" id="cash"> Default
            </span>

            <span>
              <input type="radio" name="pay" id="paypal"> PayPal
               @include('layouts.paypal')
            </span>

            <span>
              <input type="submit" id="cashbtn" class="btn btn-primary">
            </span>
 
        </div>

        <script>

               $('#paypalbtn').hide();
               $('#cashbtn').hide();

               $(':radio[id=paypal]').change(function(){
                    $('#paypalbtn').show();
                    $('#cashbtn').hide();
                });

                $(':radio[id=cash]').hange(function(){
                    $('#paypalbtn').hide();
                    $('#cashbtn').show();
                });
        </script>
