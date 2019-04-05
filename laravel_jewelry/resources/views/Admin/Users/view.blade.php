@extends('layouts.menubar')

@section('content')
<div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">
       <div class="row" id="main" >

        <div class="panel panel-success">
        	<div class="panel panel-heading">Order and User Info</div>
        	<div class="panel panel-body" style="margin-left: 10px;">

        	  	<div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                <i class="fa fa-info"> </i> 
	                </label>
	                <div class="col-sm-6">
					 <b>{{$user->id}}</b>
	                </div>
                </div><hr>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                <i class="fa fa-user"></i> 
	                </label>
	                <div class="col-sm-6">
	                
					<b>{{$user->name}} </b>
	                </div>
                </div><hr>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                <i class="fa fa-envelope"></i> 
	                </label>
	                <div class="col-sm-6">
	               
					 <b>{{$user->email}} </b>
	                </div>
                </div><hr>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                <i class="fa fa-home"></i> 
	                </label>
	                <div class="col-sm-6">
	               
					<b>{{$user->address}} </b>
	                </div>
                </div><hr><hr>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                <i class="fa fa-phone-square"></i> 
	                </label>
	                <div class="col-sm-6">
	                
					 <b>{{$user->phone}}</b>
	                </div>
                </div>
				
        	</div>
        </div>
		

      </div> <!-- end rwo -->
    </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->
@endsection()



 