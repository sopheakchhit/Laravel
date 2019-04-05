@extends('layouts.menubar')

@section('content')
  
  <div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">
       <div class="row" id="main" >
         <div class="col-sm-12 col-md-12 well" id="content">
         <div class="panel panel-success">
           <div class="panel-heading ">Edit Product</div>
           <div class="panel-body">


   	  <form method="post" action="{{action('ProductsController@update' ,$id)}}">
   	  	<div class="col-md-5">

       <div class="form-group row">
         {{csrf_field()}}
         <input name="_method" type="hidden" value="PATCH">
         <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
         </label>
          <center>
         <div class="col-sm-6">
          <img src="{{asset($product->image)}}" width="250" height="250">
        
          <!-- <input type="file" name="image" value="{{$product->image}}"> -->
         </div>
        </center>
      </div>

      </div>


      <div class="col-md-7">

      <div class="form-group row">
        <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Name
        </label>
        <div class="col-sm-6">
        <input type="text" name="proname" class="form-control form-control-lg" id="lgFormGroupInput"
         value="{{$product->proname}}">
        </div>
       </div>


      <div class="form-group row">
        <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Description
        </label>
        <div class="col-sm-6">
        <input type="text" name="description" class="form-control form-control-lg" id="lgFormGroupInput"
         value="{{$product->description}}">
        </div>
       </div>


       <div class="form-group row">
        <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Categories
        </label>
        <div class="col-sm-6">
        <input type="text" name="cate" class="form-control form-control-lg" id="lgFormGroupInput"
         value="{{$product->cat_id}}">
        </div>
       </div>


        <div class="form-group row">
        <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Price
        </label>
        <div class="col-sm-6">
        <input type="text" name="price" class="form-control form-control-lg" id="lgFormGroupInput"
         value="{{$product->price}}">
        </div>
       </div>

       <div class="form-group row">
        <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">
        </label>
        <div class="col-md-6">
        <input type="submit"  class="form-control form-control-lg btn btn-danger" 
        id="lgFormGroupInput" value="UPDATE">
        </div>
        
    </div>
    </div>

   	  </form>

   	   </div>

        </div>
       
       </div>
      </div>

 </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->

@endsection