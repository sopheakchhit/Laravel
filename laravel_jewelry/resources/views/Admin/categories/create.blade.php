@extends('layouts.menubar')
@section('title','ADMIN PRODUCT')

@section('content')

  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
</head>

<body>
  <div id="wrapper">
    <div id="page-wrapper">
      <div class="container-fluid">
            <!-- Page Heading -->
        <div class="row" id="main" >
         <div class="col-sm-12 col-md-12 well" id="content">
         <div class="panel panel-info">
            <div class="panel-heading ">ADD CATEGORIES</div>
            <div class="panel-body">            
            <form  method="POST" action="{{url('Admin/categories')}}" enctype="multipart/form-data" >

                <div class="form-group row">
                  {{csrf_field()}}
                  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Category Name
                  </label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" 
                  placeholder="Category Name" name="cate_name">
                  </div>
                </div>
           
                <input type="hidden" name="_token" value="{{csrf_token()}}">

          <div class="form-group row">
            <div class="col-md-2"></div>
            <input type="submit" class="btn btn-primary" value="ADD">
         </div>
    </form>
    </div>
    </div>
    </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
</div>
</body>


@endsection