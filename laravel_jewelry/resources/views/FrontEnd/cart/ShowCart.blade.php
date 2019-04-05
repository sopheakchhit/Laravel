@extends('layouts.app1')
@section('title','Shopping Cart')

<link rel="shortcut icon" href="/assets/img/sc.png"/>

<!--  FA -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" 
    rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"​></script>
    <link rel="stylesheet" type="text/css" href="{{url('assets/menubar/css.css')}}">
    <script type="text/javascript" src="{{url('assets/menubar/js.js')}}"></script>

<!--  end FA -->


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position:;
   left: 0;
   margin-top: 150px;
   margin-bottom: 0px;
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
<div class="container">
  <div class="row">
  	 <div class="col-md-12 col-md-offset-0">
  	 		<center> <img src="/assets/img/HLG2.png" style="margin-top: 20px;"></center><br>
            <div class="panel panel-primary">
            	 <div class="panel-heading"><center>Your Shopping Products 
            	 	<i class="fa fa-fw fa fa-shopping-cart"></i></center> 
                    <div class="nav navbar navbar-left"><a href="{{url('frontend')}}">
                    	<button class="btn btn-primary" style="margin-top:-27px;">
                    	<i class="fa fa-fw fa fa-home"></i> Home</button>
                    </a>
                    </div>
            	 </div>
                 

            	 <div class="panel-body">
   <div class="">
  	<!-- <h3 style="color:darkred">Your Shopping Product</h3> -->
  	<center style="color:mediumblue;">{{Session::get('msg')}} </center>
  	<center style="color:orangered">{{Session::get('msgcancel')}}</center>
  	
      <table class="table table-bordered">
        <thead>
          <tr class="success">
	        <th>#</th>
	       
	        <th>Product Name</th>
	        <th>Product Price</th>
	        <th>Quantity</th>
	         <th>Cancel</th>
	        <th>SubTotal</th>
	       
          </tr>
        </thead>

        <tbody>
        	<?php 
        	  $i = 0; 
              $total = 0;
        	  ?>
        	@foreach($cartProducts as $cartProduct)
	         <tr>
		        <td class="success">{{++$i}}</td>
		        
		        	<input type="hidden" name="id" value="{{ $cartProduct->id }}"> 
		        
		        <td>{{ $cartProduct->name}}</td>
		        <td>$ {{ $cartProduct->price}}</td>
		        <td>
                    {!! Form::open(['url'=> '/update-cart', 'method'=> 'POST'])!!}
                      <input type="number" value="{{ $cartProduct->qty}}" min="1" name="qty">
		        	  <input type="hidden" value="{{ $cartProduct->rowId}}" name="rowId">
		        	  <button type="button" class="btn btn-default">
		        	  	<input type="submit" value="UPDATE">
		        	  </button>
                      
                    {!! Form::close() !!}
		        </td>
		        <td>
		         	
		         	<a href="{{url('/delete-cart-product/'.$cartProduct->rowId )}}">
		         	  <button type="button" class="btn btn-danger"
		         	   onclick="return confirm('Are you want to Cancel this Product?')" >Cancel
		         	  <i class="fa fa-fw fa fa-remove"></i></button>
		            </a>
		         	
		         </td> 
		        <?php $subTotal = $cartProduct->qty * $cartProduct->price; ?>
		        <td>$ {{ $subTotal}}</td>
		         
	         </tr>
	         <?php $total = $total+$subTotal; ?>
	        @endforeach
	         <tr>
	         	<td></td>
	         	<td></td>
	         	<td></td>
	         	<td></td>
	         	<td>Total Price :</td>
	         	<td> $ {{$total}}</td>

	         </tr>
        </tbody>
       
      </table>
   
		 <div class="nav navbar-nav navbar-right" style="margin-right: 5px;"> 
		 	 <a href="{{url('frontend')}}"> <button class="btn btn-warning"> Continue Shopping 
		 	  <i class="fa fa-fw fa fa-shopping-cart"></i> </button></a> &nbsp; 
		 	 <a href="{{url('check-out')}}"><button class="btn btn-primary">CheckOut
		 	 <i class="fa fa-fw fa fa-sign-out"></i>  </button> </a>
		 </div> 

 </div>
</div>
</div>
</div>
</div><!-- end row -->
</div><!-- end container -->

<div class="footer">
 <a href="{{url('/frontend/about')}}" style="color: white;">
  <i class="fa fa-fw fa fa-user"></i> About Us</a>
 <div class="nav navbar navbar-right">Develop at 2018 | WIDYATAMA </div>
</div>

@endsection
