@extends('layouts.app')
@section('title','View')
<link rel="shortcut icon" href="/assets/img/view.png" />


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
      <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-home"></i>
      HOME</a>
     </div>
     <ul class="nav navbar-nav">
      <li><a href="#">|</a></li>
      <li><a href="{{url('frontend/feedback')}}" onclick="return confirm('Login First !!')">
      <i class="fa fa-envelope"></i> MESSAGES US</a></li>
      <li><a href="#">|</a></li>
       <li class="dropdown">
        <a href="#">
          GOLD
          <div class="dropdown-content">
          <a href="{{url('cat/gold_ring')}}">RINGS
          <img src="{{asset('assets/img/hrg.png')}}" height="50" width="50"></a>
          <a href="{{url('cat/gold_necklace')}}">NECKLACE
          <img src="{{asset('assets/img/hng.png')}}" height="50" width="30"></a>
          <a href="{{url('cat/gold_earrings')}}">EARRINGS
          <img src="{{asset('assets/img/heg.png')}}" height="50" width="50"></a>
          </div>  
         </a>
      </li>
      <li><a href="#">|</a></li>
      <li class="dropdown">
        <a href="#">
          SILVER
          <div class="dropdown-content">
          <a href="{{url('cat/silver_ring')}}">RINGS
           <img src="{{asset('assets/img/hsr.png')}}" height="50" width="50"></a>
          <a href="{{url('cat/silver_necklace')}}">NECKLACE
          <img src="{{asset('assets/img/hsn.png')}}" height="50" width="30"></a>
          <a href="{{url('cat/silver_earrings')}}">EARRINGS
          <img src="{{asset('assets/img/hse.png')}}" height="50" width="50"></a>
          </div>  
         </a>
      </li>
       <li><a href="#">|</a></li>
      <li class="dropdown">
        <a href="#">
          DIAMOND
          <div class="dropdown-content">
          <a href="{{url('cat/diamond_ring')}}">RINGS
          <img src="{{asset('assets/img/hdr.png')}}" width="50" height="50"></a>
          <a href="{{url('cat/diamond_necklace')}}">NECKLACE
          <img src="{{asset('assets/img/hdn.png')}}" width="30" height="50"></a>
          <a href="{{url('cat/diamond_earrings')}}">EARRINGS
          <img src="{{asset('assets/img/hde.png')}}" width="50" height="50"></a>
          </div>  
         </a>
      </li>

     </ul>
    </div>
  </nav>


    @include('layouts.slider')
   ​​ <br>

    <center>
      <marquee>Online Jewelry Shop</marquee><hr><br>
       <img src="{{asset('assets/img/HLG2.png')}}">
    </center><br>  
  
<div class="container">
  <div class="row">
   
          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Product Detail 
                 <a href="{{url('/')}}" class="nav navbar-nav navbar-right" 
                 style="padding-right:15px; margin-top:-7px;"><button class="btn btn-info">BACK</button> </a>
                 </div>
               
              <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
            <center>
            	<img src="{{asset($product->image)}}" width="200" height="200"> <hr>
                  
                  <p>Name : {{$product->proname}}</p>
                  <p>Price : $. {{$product->price}}</p>
                  <p>Description : {{$product->description}}</p> 


                   {!! Form::open([ 'url' => '/cart-add', 'method' => 'POST' ]) !!}
                      <input type="hidden" name="productId" value="{{$product->id}}">
                      <input type="hidden" name="qty" value="1">
                      <button type="submit" class="btn btn-success" 
                      onclick="return confirm('You must be Login first !!')">ADD CART 
                        <i class="fa fa-fw fa fa-shopping-cart"></i></button> 
                    {!! Form::close() !!}
                           
            </center>
                </div>
                
            </div>
        </div>

    </div><!-- end row -->
</div><!-- end container --> <br>


    <div class="footer">
      <a href="{{url('about')}}" style="color: white;"><i class="fa fa-fw fa fa-user"></i> About Us</a>
      <div class="nav navbar navbar-right">Develop at 2018 | WIDYATAMA </div>
    </div>
    
    <div class="nav navbar navbar-right">
      <a href="#" class="scrollToTop"> 
      <img src="{{asset('assets/img/bt1.svg')}}" width="70" height="70">
      </a>
  </div>
@endsection
 