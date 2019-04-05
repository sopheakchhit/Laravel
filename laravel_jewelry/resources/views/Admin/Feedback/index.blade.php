  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <!--  FA -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" 
    id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"​></script>
    <link rel="stylesheet" type="text/css" href="{{url('assets/menubar/css.css')}}">
    <script type="text/javascript" src="{{url('assets/menubar/js.js')}}"></script>

  <!--  end FA -->

<div class="container">
 <div class="row">
   <center style="color:mediumblue;">{{Session::get('msg')}} </center>
  
    <div class="nav navbar navbar-right" style="margin-right: 0px;">
          <a href="{{url('frontend')}}"><button class="btn btn-primary">
            <i class="fa fa-fw fa fa-home"></i> HOME</button></a>&nbsp;&nbsp;&nbsp;

          <a href="{{url('frontend/feedback')}}"><button class="btn btn-success">
            <i class="fa fa-fw fa fa-edit"></i> Feedback</button></a>​​ &nbsp;&nbsp;

            <a href="{{url('Admin/Sendback')}}"><button class="btn btn-danger">
            <i class="fa fa-fw fa fa-envelope-o" style="font-size: 18px;"></i> &nbsp;Inboxs
            </button></a>
        </div>

   <div class="col-md-8">  
  <div class="panel panel-success">
  	<div class="panel panel-heading">My Feedback</div>
  	<div class="panel panel-body" style="margin-left:10px;">
  		<form method="POST" action="{{url('Admin/Feedback')}}"> 
  			
  		      <div class="form-group row">
                {{csrf_field()}}
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                <h4>SUBJECT :</h4>
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" 
                placeholder="Subject" name="sub">
                </div>
            </div>
    
            <div class="form-group row">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                  <input type="hidden" name="id" value="{{Auth::user()->id}}" 
                  class="form-control form-control-lg" id="lgFormGroupInput" >
                </div>
            </div>

  			    <div class="form-group row">
  				      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                <h4>MESSAGES :</h4>
                <textarea class="form-control" rows="7" name="msg" placeholder="Messages"></textarea>
                </div>
            </div>

            <div class="form-group row">
  				      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">
                </label>
                <div class="col-sm-6">
                <input type="submit" value="SEND" class="form-control form-control-lg btn btn-success" 
                id="lgFormGroupInput">
                </div>
            </div>
  			
  		</form>
  	</div>
  </div>
  </div>  
 </div>
</div>
