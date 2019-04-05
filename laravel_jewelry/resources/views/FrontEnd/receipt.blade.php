 	 <title>@yield('title','Receipt')</title>
   <link rel="shortchut icon" href="/assets/img/receipt.png"/>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
  <script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"​></script>
	<!-- Bootstrap -->

  <!--  FA -->
  <link rel="stylesheet" type="text/css" href="{{url('assets/menubar/css.css')}}">
  <script type="text/javascript" src="{{url('assets/menubar/js.js')}}"></script>
  <!--  FA -->


<div class="container">
  <div class="row">
    <center>
      <img src="/assets/img/HLG2.png" width="250" height="150"><br><hr>
      <h2><strong>RECEIPT</strong></h2>
    </center>

  <div class="nav navbar navbar-right">  
    <table align="center">
      <tr>
        <td>
          <script Language="Javascript">function printit()
          {
            if (window.print)
            { window.print() ; }
      
            else 
            {
              var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
              document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
              WebBrowser1.ExecWB(6, 2);
              //Use a 1 vs. a 2 for a prompting dialog box    WebBrowser1.outerHTML = "";
            }
          }
          </script>
    
          <script Language="Javascript">
            var NS = (navigator.appName == "Netscape");
            var VERSION = parseInt(navigator.appVersion);
            
            if (VERSION > 3)
            {

               document.write('<form> <input type=button class="btn btn-danger" value="Print Receipt" name="Print" onClick="printit()"> </form>');
            }
          </script>
        </td>
      </tr>

      <tr>
        <td>
          <strong>After you print receipt success click <a href="{{url('clear')}}">Finish</a></strong> 
        </td>
      </tr>  
    </table>    
  </div>   

  <div style="margin-left: 50px;">
  <b> DATE :  {{$date = date("l, d / F / Y")}}</b> <br><br>
  <b> NAME :  {{Auth::user()->name}} <b> <br><br>
  <b> EMAIL : {{Auth::user()->email}}</b><br><br>
  <b> ADDRESS :  {{Auth::user()->address}}</b><br><br>
  <b> TELEPHONE : {{Auth::user()->phone}}</b>   
  </div> <br><br>


	<table class="table">
		<thead>
      <tr class="success">
    	  <th>#</th>     
    	    <th>Product Name</th>
    	    <th>Product Price</th>
    	    <th>Quantity</th>
    	    <th>SubTotal</th>
    	</tr>
    </thead>

    <tbody>
      <?php $i = 0;  $total = 0;?>
        @foreach($cartProducts as $cartProduct)
      	<tr>
        	<td> {{++$i}} </td>       
          <input type="hidden" name="id" value="{{ $cartProduct->id }} ">           
        	<td> {{$cartProduct->name}} </td>
        	<td> $ {{$cartProduct->price}} </td>
        	<td> {{$cartProduct->qty}} </td> 
        	<?php $subTotal = $cartProduct->qty * $cartProduct->price; ?>
        	<td>$ {{$subTotal}} </td>
      	</tr>
    	  <?php $total = $total+$subTotal; ?>
       
    	 @endforeach
        
    	  <tr>        
          <td></td>
      	  <td></td>
      	  <td></td>
      	  <td class="info"> <b>Total Price :</b></td>
      	  <td class="info">$ {{$total}}</td>    
    	  </tr>

         <tr>        
          <td></td>
          <td class="warning">Shipping cost per item</td>
          <td class="warning">$ 0.3</td>
          <td class="info"> <b> Shipping :</b></td>
          <td class="info">$ {{$shipping = Cart::count() * 0.3}}</td>    
        </tr>

         <tr>        
          <td></td>
          <td class="warning">Tax cost per item</td>
          <td class="warning">$ 0.1</td>
          <td class="info"> <b> Tax :</b></td>
          <td class="info">$ {{$tax = Cart::count() * 0.1}}</td>    
        </tr>

         <tr>        
          <td></td>
          <td class="warning">Total Products Quantity</td>
          <td class="warning">({{Cart::count()}})</td>
          <td class="info"><b>Total Payment :</b> </td>
          <td class="info"> <b style="color: red;">$ {{ $tax + $shipping + $total }}</b></td>    
        </tr>
       
    </tbody>
  </table>
  <br><br><hr>
  <center>
    <h4>
      <strong>Jewelry Online Shop 2018 ®</strong>
    </h4><hr>
  </center>
       
  </div> <!-- end row -->
</div> <!-- end container -->