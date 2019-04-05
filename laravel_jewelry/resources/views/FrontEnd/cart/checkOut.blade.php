@extends('layouts.app1')
@section('title','CheckOut')


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

<link rel="shortcut icon" href="assets/img/check.png">

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
       <div class="panel panel-success">
          <div class="panel-heading">ORDER  &nbsp;<i class="fa fa-file-text-o"></i></div>

          <div class="panel-body">
              <center> <strong>PRODUCTS</strong> </center> <hr>
    
        <table class="table table-bordered">
            <thead>
              <tr>
    	          <th>#</th>
    	          
    	          <th>Product Name</th>
    	          <th>Product Price</th>
    	          <th>Quantity</th>
    	          <th>SubTotal</th>
    	        </tr>
            </thead>

            <tbody>
            	<?php $i = 0;  $total = 0; ?>
            	@foreach($cartProducts as $cartProduct)
      	         <tr>
        		        <td> {{++$i}} </td>
        		         
                      <input type="hidden" name="id" value="{{ $cartProduct->id }} ">  
                    
        		        <td> {{ $cartProduct->name}} </td>
        		        <td> $ {{ $cartProduct->price}} </td>
        		        <td> {{ $cartProduct->qty}} </td> 
        		        <?php $subTotal = $cartProduct->qty * $cartProduct->price; ?>
        		        <td>$ {{ $subTotal}} </td>
      	         </tr>
    	         <?php $total = $total+$subTotal; ?>
    	        @endforeach
    	         <tr>
      	         
      	         <td></td>
      	         	<td></td>
      	         	<td></td>
      	         	<td> Total Price :</td>
      	         	<td>$ {{$total}}</td>
    	         </tr>
            </tbody>
          </table>  <hr>

        
        <center>
          <div style="font-family: Times New Roman, Times, serif;">
             <strong style="color: brown; font-size: 20px;"></strong><br><br>
             <a href="{{url('formcheck')}}" onclick="return confirm('Confirm Order')">
            <button class="btn btn-danger"> ORDER NOW &nbsp;&nbsp;
            <i class="fa fa-file-text-o"></i></button>
          </a>
          </div><br><br>
        </center>


       <!--  <div style="margin-left: 20px;">
          <h4>Pay with Credit Card</h4>
          <a href="{{url('formcheck')}}"><img src="assets/img/acl.jpg" height="70" width="100"></a> 
          &nbsp;
          <a href="{{url('formcheck')}}"><img src="assets/img/anz.png" height="70" width="100"></a>
          &nbsp;
          <a href="{{url('formcheck')}}"><img src="assets/img/aba1.png" height="70" width="100"></a>
          &nbsp;
          <a href="{{url('formcheck')}}"><img src="assets/img/mb.jpg" height="70" width="100"></a>
          <a href="{{url('formcheck')}}">
            <button class="btn btn-danger">CONTINUE 
              <i class="fa fa-fw fa fa-chevron-circle-right"></i></button>
          </a>
        </div> -->

       

       <!-- <div>
            <center>
                <img src="assets/img/star.jpg" height="50" width="50">
                <img src="assets/img/star.jpg" height="50" width="50">
                <img src="assets/img/star.jpg" height="50" width="50">
            </center>
        </div> -->

       </div> <!-- end panel-body -->
     </div> <!-- end panel panel-info -->
   </div> <!--  end col-md-12 col-md-offset-0   -->
  </div> <!-- end row -->
</div> <!-- end container -->

<div class="footer">
 <a href="{{url('/frontend/about')}}" style="color: white;">
  <i class="fa fa-fw fa fa-user"></i> About Us</a>
 <div class="nav navbar navbar-right">Develop at 2018 | WIDYATAMA </div>
</div>
@endsection
 