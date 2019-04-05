 	<!-- JQuery -->
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   	<!-- JQuery -->

	<!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"​></script>
	<!-- Bootstrap -->

   	<!--  FA -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/menubar/css.css')}}">
    <script type="text/javascript" src="{{url('assets/menubar/js.js')}}"></script>
  	<!--  FA -->

<script type="text/javascript">
  $(document).ready(function(){
    @foreach($inbox as $inboxs)
      $("#inboxs{{$inboxs->id}}").click(function(){
      	var mId = $("#mId{{$inboxs->id}}").val();
      	$.ajax({
      		type:'get',
      		date: 'mgsId=' + mId,
      		url: '{{url('updateInbox')}}',
      		success:function(response){
      		console.log(response);
      		}
      	});
      });
    @endforeach
  });
</script>


<div class="container">
	<div class="row">
		<div class="nav navbar navbar-right" style="margin-right: 0px;">
			<a href="{{url('frontend')}}"><button class="btn btn-primary">
            <i class="fa fa-fw fa fa-home"></i> HOME</button></a>&nbsp;&nbsp;&nbsp;

			
          	<a href="{{url('frontend/feedback')}}"><button class="btn btn-success">
            <i class="fa fa-fw fa fa-edit"></i> Feedback</button></a>​​ &nbsp;&nbsp;&nbsp;

            <a href="{{url('Admin/Sendback')}}"><button class="btn btn-danger">
            <i class="fa fa-fw fa fa-envelope-o" style="font-size: 18px;"></i> &nbsp;Inboxs
            </button></a>
        </div>

        <div class="col-md-8">  
	  	<div class="panel panel-success">
	  	<div class="panel panel-heading">My Inboxs 
	  		<div class="nav navbar navbar-right" style="margin-right: 10px;">
	  			{{Auth::user()->name}}
	  		</div>
	  	</div>
	  	<div class="panel panel-body" style="margin-left: 10px;">
	  		<table class="table">
	  		  	<tr>
		  		  	<th>#</th>
		  		  	<th>FROM</th> 
		  		  	<th><center>SUBJECT</center></th>
		  		  	<th>DATE</th>
	  		  	</tr>
	  		
		  		@foreach($inbox as $inboxs)
			  	  	<input type="hidden" value="{{$inboxs->id}}" id="mId{{$inboxs->id}}">
			  		@if($inboxs->status=="0")
			  	  	<tr class="info" id="inboxs{{$inboxs->id}}">
			  		@else
			  	  	<tr>
			  		@endif
			  	  	<td><input type="checkbox"></td>
			  		<td>ADMIN</td>
			  		<td>
			  		<center>
			  		<a href="#" data-toggle="collapse" data-target="#d{{$inboxs->id}}">
			  		{{$inboxs->subject}} 
				   	</a> <hr>
				    <div id="d{{$inboxs->id}}" class="collapse" 
				    style="height:auto; width: 300px;"> 
				   	{{$inboxs->message}} <br><hr><a href="#">Delete</a> | <a href="#">Reply</a> 
				   	</center> 
			  		</td>
				    <td>{{$inboxs->created_at}}</td>
			  		</tr>
		  		@endforeach
		  	</table>
	  	</div>
	  </div>
	  </div>

	</div>
</div> 