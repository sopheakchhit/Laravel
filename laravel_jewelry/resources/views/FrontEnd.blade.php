@extends('layouts.app')
@section('title','HOME')
<link rel="shortcut icon" href="/assets/img/home.png" />

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
       <i class="fa fa-fw fa fa-envelope"></i> MESSAGE US</a></li>
      <li><a href="#">|</a></li>
     <li class="dropdown">
        <a href="#">
          GOLD
          <div class="dropdown-content">
          <a href="{{url('cat/gold_ring')}}">RINGS
          <img src="{{asset('assets/img/hrg.png')}}" height="50" width="50"></a>
          <a href="{{url('cat/gold_necklace')}}">NECKLACE 
            <img src="{{asset('assets/img/hng.png')}}" height="50" width="30"></a>
          <a href="{{url('cat/gold_earrings')}}"> EARRINGS 
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
          <form class="navbar-form navbar-left" method="get" action="">
             <div class="form-group">
             <input type="text" name="txt" class="form-control" placeholder="Search" 
              onkeyup="showHint(this.value)">
             </div>
           <!-- <button type="submit" class="btn btn-default">Search</button>-->
          </form>
      </li>
     </ul>
    </div>
  </nav>

    @include('layouts.slider')
   ​​ <br>

     <center> 
      <marquee>Light of Glory Online Shop</marquee>  <hr> <br>
      <img src="{{asset('assets/img/HLG2.png')}}">
     </center> 
     

   <div id="txtHint">
        <div class="panel panel-success" style="margin-left: 10px;">
          <div class="panel panel-heading">ONLINE JEWELRY SHOP</div>
          <div class="panel-body">
         @foreach($product as $products) 
           <div class="col-sm-3">
            <div style="margin: 5px;">
              <div class="panel panel-success"> 
                <div class="panel panel-heading"></div>
                <div class="panel panel-body">
                  <center> <img src="{{asset($products->image)}}" width="170" height="145"> </center>
                  <p>{{$products->proname}}</p>
                  <p>$. {{$products->price}}</p>
                  <a href="{{url('view',$products->id)}}">
                  <div class="col-sm-30">
                  <input type="submit" class="form-control form-control-lg btn btn-danger" 
                  value="VIEW" style="margin-bottom: -45px;">
                  </div>
                  </a>
                </div>
              </div> 
              </div>     
              </div>    
         @endforeach
         </div>
         </div>
        </div>


  <div class="container">
    <div class="row">
    </div><!-- end row -->
  </div><!-- end container -->

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
