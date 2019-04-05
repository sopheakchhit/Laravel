<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <!-- <form action="https://www.sandbox.paypal.com/us/cgi-bin/webscr" method="post"> -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="upload" value="1">
  <input type="hidden" name="business" value="sopheakchhit99-facilitator@gmail.com">

   <?php $count = 0;?>

   @foreach($cartProducts as $cartProduct)
      <?php  $count++; ?>
      <input type="hidden" name="item_name_{{$count}}" value="{{ $cartProduct->name}}">
      <input type="hidden" name="item_number_{{$count}}" value="{{ $cartProduct->id }}">
      <input type="hidden" name="quantity_{{$count}}" value="{{ $cartProduct->qty}}">
      <input type="hidden" name="amount_{{$count}}" value="{{$cartProduct->price}}">
      <input type="hidden" name="shipping_{{$count}}" value="0.50"> 
      <input type="hidden" name="tax_{{$count}}" value="0.05">
      <br>
  @endforeach
   
  <input type=image id="paypalbtn" src=assets/img/pp.png alt="Submit feedback" height="90" width="300">

</form>