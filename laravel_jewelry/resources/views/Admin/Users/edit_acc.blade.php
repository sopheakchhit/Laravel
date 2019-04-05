 <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
 <script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"​></script>


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


<div class="container">
  <div class="row">
  	<div class="col-md-12 col-md-offset-0">
            <center> <img src="/assets/img/HLG2.png" style="margin-top: 40px;"></center><br>
            <div class="panel panel-primary">
            	<div class="panel-heading"> <i class="fa fa-fw fa fa-user"></i> My Account </div>
                 
				<div class="panel-body" style="margin-left: 50px;"><br>
              
            <form method="post" action="{{action('HomeController@update' ,$id)}}">

			  <div class="form-group row">
				  {{csrf_field()}}
	              <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">
	              <i class="fa fa-fw fa fa-user"></i>	Name : </label>
	              <div class="col-sm-6">
	              <input type="text" name="name" class="form-control form-control-lg" 
	              id="lgFormGroupInput" value="{{$user->name}}">
	              </div>
              </div>


              <div class="form-group row">
	              <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">
	              <i class="fa fa-fw fa fa-envelope"></i> Email :</label>
	              <div class="col-sm-6">
	              <input type="text" name="email" class="form-control form-control-lg" 
	              id="lgFormGroupInput" value="{{$user->email}}">
	              </div>
              </div>


              <div class="form-group row">
	              <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">
	              <i class="fa fa-fw fa fa-institution"></i> Address : </label>
	              <div class="col-sm-6">
	              <input type="text" name="add" class="form-control form-control-lg" 
	              id="lgFormGroupInput" value="{{$user->address}}">
	              </div>
              </div>


              <div class="form-group row">
	              <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">
	              <i class="fa fa-fw fa fa-phone-square"></i> Phone Number :  </label>
	              <div class="col-sm-6">
	              <input type="text" name="phone" class="form-control form-control-lg" 
	              id="lgFormGroupInput" value="{{$user->phone}}">
	              </div>
              </div>


              <div class="form-group row">
              	 <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">
	              </label>
			      <div class="col-md-6">
			      <input type="submit" class="form-control form-control-lg btn btn-primary" 
	              id="lgFormGroupInput" value="UPDATE">
	              </div>
              </div>

   		    </form>


				</div>
			</div>
	</div>
  </div><!-- end row -->
</div><!-- end container --><br>
@include('layouts.footer')