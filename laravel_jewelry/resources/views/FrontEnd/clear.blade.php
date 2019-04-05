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
		<img src="/assets/img/HLG2.png" width="350" height="150"><br><br><hr>
		<strong>
		  Your Order has been completed successful !! <br><br>
		  Thank you for choose our shop and purchase our product. 
		</strong><br><br>
		<a href="{{url('frontend')}}">
		<button class="btn btn-danger"><i class="fa fa-home"></i> HOME</button> </a><hr>
		<h4><strong>Jewelry Online Shop 2018 ®</strong></h4>
	</center>
  </div>
</div>

{{Cart::destroy()}}