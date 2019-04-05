
@extends('layouts.app')
@section('title','HOME')
<link rel="shortcut icon" href="/assets/img/home.png" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 

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
      <a class="navbar-brand" href="{{url('frontend')}}"><i class="fa fa-fw fa fa-home"></i>
      HOME</a>
     </div>
     <ul class="nav navbar-nav">
      <li><a href="#">|</a></li>
      <li><a href="{{url('frontend/feedback')}}"> <i class="fa fa-fw fa fa-envelope"></i>
      MESSAGE US</a></li>
      <li><a href="#">|</a></li>
      <li class="dropdown">
        <a href="#">
          GOLD
          <div class="dropdown-content">
          <a href="{{url('frontend/gold_ring')}}">RINGS
          <img src="{{asset('assets/img/hrg.png')}}" height="50" width="50"></a>
          <a href="{{url('frontend/gold_necklace')}}">NECKLACE
          <img src="{{asset('assets/img/hng.png')}}" height="50" width="30"></a>
          <a href="{{url('frontend/gold_earrings')}}">EARRINGS
          <img src="{{asset('assets/img/heg.png')}}" height="50" width="50"></a>
          </div>  
         </a>
      </li>
      <li><a href="#">|</a></li>
      <li class="dropdown">
        <a href="#">
          SILVER
          <div class="dropdown-content">
          <a href="{{url('frontend/silver_ring')}}">RINGS
          <img src="{{asset('assets/img/hsr.png')}}" height="50" width="50"></a>
          <a href="{{url('frontend/silver_necklace')}}">NECKLACE
          <img src="{{asset('assets/img/hsn.png')}}" height="50" width="30"></a>
          <a href="{{url('frontend/silver_earrings')}}">EARRINGS
           <img src="{{asset('assets/img/hse.png')}}" height="50" width="50"></a>
          </div>  
         </a>
      </li>
       <li><a href="#">|</a></li>
      <li class="dropdown">
        <a href="#">
          DIAMOND
          <div class="dropdown-content">
          <a href="{{url('frontend/diamond_ring')}}">RINGS
          <img src="{{asset('assets/img/hdr.png')}}" width="50" height="50"></a>
          <a href="{{url('frontend/diamond_necklace')}}">NECKLACE
          <img src="{{asset('assets/img/hdn.png')}}" width="30" height="50"></a>
          <a href="{{url('frontend/diamond_earrings')}}">EARRINGS
          <img src="{{asset('assets/img/hde.png')}}" width="50" height="50"></a>
          </div>  
         </a>
      </li>



<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "{{url('search')}}?q=" + str, true);
        xmlhttp.send();
    }
}
</script>


       <li>
          <form class="navbar-form navbar-left" method="get" action="{{url('searchbtn')}}">
             <div class="form-group">
             <input type="text" name="txt" class="form-control" placeholder="Search" >
              </div>
            <button type="submit" class="btn btn-primary">Search
              <i class="fa fa-fw fa fa-search"></i></button>
          </form>
      </li>
                                                        
     </ul>
    </div>
  </nav>

   
     @include('layouts.slider') <br>
   
    <center>
      <marquee> Jewelry Online Shop </marquee> <hr> <br>
      <img src="{{asset('assets/img/HLG2.png')}}">
    </center> <br>


      <div id="txtHint">
        <div class="panel panel-success" style="margin-left: 10px;">
          <div class="panel panel-heading">ONLINE JEWELRY SHOP</div>
          <div class="panel-body">
              @foreach($product as $product) 
                <div class="col-sm-3">
                  <div style="margin: 5px;" >
                  <div class="panel panel-info">
                <div class="panel panel-heading"></div>
                <div class="panel panel-body">
                    <center> <img src="{{asset($product->image)}}" width="170" height="145"> </center>
                    <p>{{$product->proname}}</p>
                    <p>$. {{$product->price}}</p>

                    {!! Form::open([ 'url' => '/cart-add', 'method' => 'POST' ]) !!}
                      <input type="hidden" name="productId" value="{{$product->id}}">
                      <input type="hidden" name="qty" value="1">
                      <input type="submit" class="form-control form-control-lg btn btn-danger" 
                      value="ADD TO CART" style="margin-bottom: -45px;">
                    {!! Form::close() !!}
                    
                  </div>
                </div>
              </div>
              </div>
             @endforeach
              </div>
              </div>
             </div>
            </div>


     

<div class="container">
  <div class="row">
  </div><!-- end row -->
</div><!-- end container -->

 <div class="footer">
 <a href="{{url('/frontend/about')}}" style="color: white;">
  <i class="fa fa-fw fa fa-user"></i> About Us</a>
 <div class="nav navbar navbar-right">Develop at 2018 | WIDYATAMA </div>
</div>

 <div class="nav navbar navbar-right">
    <a href="#" class="scrollToTop">
    <img src="{{asset('assets/img/bt1.svg')}}" width="70" height="70"></a>
  </div>
@endsection


