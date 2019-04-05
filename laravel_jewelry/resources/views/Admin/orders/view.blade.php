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
	                </label>
	                <div class="col-sm-6">
	                <h4>
					ORDER ID : <b>{{$order->id}}</b></h4>
	                </div>
                </div>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                </label>
	                <div class="col-sm-6">
	                <h4>
					CUSTOMER ID : <b>{{$order->customer_id}} </b></h4>
	                </div>
                </div>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                </label>
	                <div class="col-sm-6">
	                <h4>
					PRODUCT ID : <b>{{$order->pro_id}} </b></h4>
	                </div>
                </div>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                </label>
	                <div class="col-sm-6">
	                <h4>
					QUANTITY : <b>{{$order->qty}} </b></h4>
	                </div>
                </div>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                </label>
	                <div class="col-sm-6">
	                <h4>
					ORDER DATE : <b>{{$order->created_at}}</b></h4>
	                </div>
                </div>

                <div class="form-group row">
	                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
	                </label>
	                <div class="col-sm-6">
	                <a href="{{url('admin/viewUser',$order->customer_id)}}">
				 	<button class="btn btn-danger"><i class="fa fa-user"></i> USER INFO</button>
					</a>
	                </div>
                </div>

                
				
        	</div>
        </div>
		

      </div> <!-- end rwo -->
    </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->
@endsection()