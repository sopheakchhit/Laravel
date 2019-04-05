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
            <center><a href="{{url('frontend')}}"><img src="/assets/img/HLG2.png" 
              style="margin-top: 40px;"></a>
             </center><br>
            <div class="panel panel-primary">
            	<div class="panel-heading"> <i class="fa fa-fw fa fa-user"></i> My Account </div>
                 
				<div class="panel-body" style="margin-left: 50px;">

			<i class="fa fa-fw fa fa-user"></i>	Name  : <h3>{{$user->name}}</h3> <br><hr> 
			<i class="fa fa-fw fa fa-envelope"></i> Email : <h3>{{$user->email}}</h3> <br><hr>
			<i class="fa fa-fw fa fa-institution"></i> Address : <h3>{{$user->address}}</h3> <br><hr>
			<i class="fa fa-fw fa fa-phone-square"></i> Phone Number : <h3>{{$user->phone}}</h3><br><hr>

		      <!--  <form action="{{action('UserController@destroy', $user['id'])}}" 
                method="post" style="margin-right: 20px;">
		            {{csrf_field()}}
		            <input name="_method" type="hidden" value="DELETE">
		            <button class="btn btn-danger " type="submit" 
		            onclick="return confirm('Are sure for DELETE your Account?')" >
		            Delete Account<i class="fa fa-fw fa fa-trash" style="font-size: 18px;"></i></button>
		        </form > -->

                  <!-- <a href="{{ action('HomeController@edit_customer_acc', $user['id']) }}" 
                  class="btn btn-warning">
                  <i class="fa fa-fw fa fa-refresh" style="font-size: 18px;"></i> Edit</a>  -->    
				</div>
			</div>
	</div>
  </div><!-- end row -->
</div><!-- end container -->
