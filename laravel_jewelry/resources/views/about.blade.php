@extends('layouts.app')
<!-- search with ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- search with ajax -->

<!-- hover dropdown -->
<link rel="stylesheet" type="text/css" href="{{url('assets/hover dropdown/hover.css')}}">
<!-- hover dropdown -->


<!-- backtoTop -->
<link rel="stylesheet" type="text/css" href="{{url('assets/backtoTop/bt.css')}}">
<script type="text/javascript" src="{{url('assets/backtoTop/bt.js')}}"></script>
<!-- backtoTop -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position:;
   left: 0;
   margin-top: 15px;
   margin-bottom: -100px;
   width: 100%;
   background-color:darkslategray;
   color: white;
   padding-left:30px;
   padding-right: 60px;
   padding-top:30px;
   height: 80px;
}
</style>

@section('content')

	<nav class="navbar navbar" style="padding-left: 200px;">
     <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-fw fa fa-home"></i>
      HOME</a>
     </div>
     <ul class="nav navbar-nav">
      <li><a href="#">|</a></li>
      <li><a href="{{url('frontend/feedback')}}" onclick="return confirm('Login First !!')">
      <i class="fa fa-fw fa fa-envelope"></i> 
      MESSAGE US</a></li>
      <li><a href="#">|</a></li>
     <li class="dropdown">
        <a href="#">
          GOLD
          <div class="dropdown-content">
          <a href="{{url('cat/gold_ring')}}">RINGS
          <img src="assets/img/hrg.png" height="50" width="50"></a>
          <a href="{{url('cat/gold_necklace')}}">NECKLACE 
            <img src="assets/img/hng.png" height="50" width="30"></a>
          <a href="{{url('cat/gold_earrings')}}"> EARRINGS 
            <img src="assets/img/heg.png" height="50" width="50"></a>
          </div>  
         </a>
      </li>
      <li><a href="#">|</a></li>
      <li class="dropdown">
        <a href="#">
          SILVER
          <div class="dropdown-content">
          <a href="{{url('cat/silver_ring')}}">RINGS
            <img src="assets/img/hsr.png" height="50" width="50"></a>
          <a href="{{url('cat/silver_necklace')}}">NECKLACE
          <img src="assets/img/hsn.png" height="50" width="30"></a>
          <a href="{{url('cat/silver_earrings')}}">EARRINGS
          <img src="assets/img/hse.png" height="50" width="50"></a>
          </div>  
         </a>
      </li>
       <li><a href="#">|</a></li>
      <li class="dropdown">
        <a href="#">
          DIAMOND
          <div class="dropdown-content">
          <a href="{{url('cat/diamond_ring')}}">RINGS
            <img src="assets/img/hdr.png" width="50" height="50"></a>
          <a href="{{url('cat/diamond_necklace')}}">NECKLACE
           <img src="assets/img/hdn.png" width="30" height="50"></a>
          <a href="{{url('cat/diamond_earrings')}}">EARRINGS
           <img src="assets/img/hde.png" width="50" height="50"></a>
          </div>  
         </a>
      </li>   
     </ul>
    </div>
  </nav>


      @include('layouts.slider') <br>

     <center>
       <marquee>Online Jewelry Shop</marquee>
     </center> <hr><br>
    

  <div class="container">
  	<div class="rwo">
  	 <div class="col-md-12">
      <div class="panel panel-primary">
      	<div class="panel panel-heading">About Online Jewelry Shop</div>
      	<div class="panel panel-body">
      		<div class="col-sm-7">
      			<p style="font-size: 17px;">
      				Our shop was founded in 1989, and has many years experience in selling, high quality JEWELRY for both men and women. We stock popular jewelry brands such as Trollbeads and Links of London, together with classic gold and silver jewellery. Wedding and engagement rings are available from leading brands such as Brown and Newirth, or our in-house design team can help you create the perfect bespoke ring. With the excellent customer service expected of a family-run business, combined with modern techniques and expertise, Online Jewelry Shop is the perfect place for discerning customers.<hr>

					<i class="fa fa-fw fa fa-map-marker"></i> &nbsp;
					:  &nbsp;Russian Federation Blvd. (110), Phnom Penh, Cambodia<br><br>
					<i class="fa fa-fw fa fa-envelope"></i> &nbsp; 
				 	: &nbsp;sopheakchhit99@gmail.com <br><br>
					<i class="fa fa-fw fa fa-tty"></i> &nbsp; 
					: &nbsp;087 23 80 36
      			</p>
      		</div>
      		<div class="col-sm-5">
      			<img src="assets/img/hdr.png" width="100" height="100">
      			<img src="assets/img/hrg.png" width="100" height="100">
      			<img src="assets/img/hde.png" width="100" height="100">
      			<img src="assets/img/hng.png" width="100" height="100">
      			<img src="assets/img/heg.png" width="100" height="100">
      			<img src="assets/img/hdn.png" width="100" height="100">
      			<img src="assets/img/hsr.png" width="100" height="100">
      			<img src="assets/img/hse.png" width="100" height="100">
      		</div>
      	</div>
      </div>
      </div>

  	</div> <!-- end row -->
  </div> <!-- end container -->

  <div class="footer">
   <a href="{{url('about')}}" style="color: white;"><i class="fa fa-fw fa fa-user"></i> About Us</a>
   <div class="nav navbar navbar-right">Develop at 2018 | WIDYATAMA </div>
  </div>

  <div class="nav navbar navbar-right">
    <a href="#" class="scrollToTop">
    <img src="{{asset('assets/img/bt1.svg')}}" width="70" height="70"></a>
  </div>
@endsection