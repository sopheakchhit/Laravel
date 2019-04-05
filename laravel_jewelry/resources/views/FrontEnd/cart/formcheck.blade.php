@extends('layouts.app1')
@section('title','Payment')
<link rel="shortcut icon" href="assets/img/pay.png">


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
       <div class="panel panel-success">
          <div class="panel-heading">Payment</div>
       
          <div class="panel-bady">
          	 <form method="post" action="{{url('order')}}">
         <center> <h3 style="color: blur;">Info Payment</h3> </center>  <hr> 
     
       <div class="nav navbar navbar-right" style="margin-right: 10px;">
          <center> <h4 style="color: red;">PRODUCTS</h4>   <hr>
           	
    	   <table class="table table-bordered">
            <thead>
              <tr>
      	        <th>#</th>
               
      	        <th>Product Price</th>
      	        <th>Product Name</th>
      	        <th>Quantity</th>
      	        <th>SubTotal</th>
              </tr>
            </thead>

            <tbody>
            	<?php $i = 0;  $total = 0; ?>
            	@foreach($cartProducts as $cartProduct)
        	         <tr>
          		        <td>{{++$i}}</td>
          		         <input type="hidden" name="id" value=" {{ $cartProduct->id }}"> 
                      <td> <input type="text" name="price" value="$. {{$cartProduct->price}}"> </td>
          		        <td> <input type="text" name="proName" value="{{ $cartProduct->name}}"> </td>
          		        <td> <input type="text" name="qty" value="{{ $cartProduct->qty}}"> </td> 
          		        <?php $subTotal = $cartProduct->qty * $cartProduct->price; ?>
          		        <td> <input type="text" name="subtotal" value="$. {{ $subTotal}}"> </td>
        	         </tr>
        	         <?php $total = $total+$subTotal; ?>
    	        @endforeach
    	         <tr>
      	          
      	         	<td></td>
      	         	<td></td>
      	         	<td></td>
      	         	<td> Total Payment :</td>
      	         	<td> <input type="text" name="totalpay" value="$. {{$total}}"> </td>
    	         </tr>
             </tbody>
    	     </table>
          </div>
</center>

          <table class="table table-bordered" >
     
             <div class="nav navbar-nav navbar-left" style="margin-left: 20px;">
    	         <center> <h4 style="color: red;">Billing Address</h4> </center>  <hr>
    	        
              <div class="form-group row">
              {{csrf_field()}}
              <label for="lgFormGroupInput" class="col-sm-4 col-form-label col-form-label-lg">
              Name :  <i class="fa fa-fw fa fa-user"></i></label>
              <div class="col-sm-11">
              <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" 
               placeholder="Name" name="name"  value="{{ Auth::user()->name}}" required>
              </div>
              </div>

                        
               <input type="hidden" class="form-control form-control-lg" id="lgFormGroupInput" 
                placeholder="Email" name="id" value="{{ Auth::user()->id}}" required>
                
        
              <div class="form-group row">
              <label for="lgFormGroupInput" class="col-sm-4 col-form-label col-form-label-lg">
                Email : <i class="fa fa-fw fa fa-envelope"></i></label>
                <div class="col-sm-11">
                <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" 
                placeholder="Email" name="email" value="{{ Auth::user()->email}}" required>
                </div>
              </div>


               <div class="form-group row">
                <label for="smFormGroupInput" class="col-sm-4 col-form-label col-form-label-sm">
                  Address : <i class="fa fa-fw fa fa-institution"></i>
                </label>
                <div class="col-sm-11">
                 <input type="text" name="add" class="form-control form-control-lg" 
                  id="lgFormGroupInput" value="{{ Auth::user()->address}}" 
                  placeholder="Address" required>
                </div>
                </div> 

                
            <div class="form-group row">
              <label for="smFormGroupInput" class="col-sm-5 col-form-label col-form-label-sm">
                Phone Number : <i class="fa fa-fw fa fa-mobile"></i>
              </label>
              <div class="col-sm-11">
            <input type="text" name="phn" class="form-control form-control-lg" id="lgFormGroupInput" 
               value="{{ Auth::user()->phone}}" placeholder="Phone Number" required>
              </div>
            </div> 
           
           <hr>

          <!--  <div class="form-group row">
              <label for="lgFormGroupInput" class="col-sm-4 col-form-label col-form-label-lg">
              Card Type </label><br> 
              <div class="col-sm-11">
                &nbsp;<img src="assets/img/acl.jpg" height="25" width="35">
                &nbsp;<img src="assets/img/anz.png" height="25" width="35">
                &nbsp;<img src="assets/img/aba1.png" height="25" width="35">
                &nbsp;<img src="assets/img/mb.jpg" height="25" width="35"> 
              </div>
           </div>


          <div class="form-group row">               
              <div class="col-sm-11">
                <select name="" class="form-control form-control-lg" id="lgFormGroupInput" required>
                  <option value="" disabled selected style="display: none;">Choose Your Card Type</option>
                  <option value="">ACLeda Card</option>
                  <option value="">ANZ Royal Card</option>
                  <option value="">ABA Bank Card</option>
                  <option value="">Maybank Card</option>
                </select>
              </div>
          </div> -->


         <div class="form-group row">
          <label for="smFormGroupInput" class="col-sm-4 col-form-label col-form-label-sm">
            Cart Number : <i class="fa fa-fw  fa fa-credit-card"></i>
          </label>
          <div class="col-sm-11">
          <input type="text" name="cn" class="form-control form-control-lg" id="lgFormGroupInput" 
            placeholder="Cart Number" required>
          </div>
          </div>

         <div class="form-group row">
            <div class="col-sm-5">
              Expires
              <input type="text" name="cn" class="form-control form-control-lg" id="lgFormGroupInput" 
               placeholder="MM/YY" required>
            </div>

            <div class="col-sm-5">
              CSC
              <input type="text" name="cn" class="form-control form-control-lg" id="lgFormGroupInput" 
               placeholder="3 digits" required>
            </div>
          </div>

         <a href="{{url('frontend')}}" onclick="return confirm('Confirm Payment')">
          <button class="btn btn-danger" type="submit">
            Pay Now &nbsp;<i class="fa fa-fw  fa fa-credit-card"></i>
          </button>          
          </a>   
                 
         </div>

        </table>
            
	
      </form>
    </div>

    </div>
   </div>
 </div>
</div>

<div class="footer">
 <a href="{{url('/frontend/about')}}" style="color: white;">
  <i class="fa fa-fw fa fa-user"></i> About Us</a>
 <div class="nav navbar navbar-right">Develop at 2018 | WIDYATAMA </div>
</div>
@endsection