@extends('layouts.menubar')

@section('content')
<div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">
      <div class="row" id="main" >
          <div class="panel panel-success">
            <div class="panel panel-heading">Messages from Users</div>
            <div class="panel panel-body" style="margin-left: 5px;">

              <table class="table table-bordered">
                <tr class="warning">
                  <th><center>#</center></th>
                  <th><center>USER ID</center></th>
                  <th><center>SUBJECT</center></th>
                  <th><center>MESSAGES</center></th>
                  <th><center>ARRIVE DATE</center></th>
                  <th><center>ACTION</center></th>
                </tr>

                @foreach($fb as $fbs)
                <tr>
                  <td ><center>{{$loop->index+1}}</center></td>
                  <td><center>{{$fbs->user_id}}</center></td>
                  <td><center>{{$fbs->subject}}</center></td>
                  <td><center>{{$fbs->message}}</center></td>
                  <td><center>{{$fbs->created_at}}</center></td>
                  <td>
                    <center>
                      <a href="{{url('read',$fbs->id)}}">
                      <button class="btn btn-success"><i class="fa fa-fw fa fa-book"></i> 
                      Read and Reply</button></a>
                    </center>
                  </td>
                </tr>
                @endforeach
              </table>

            </div>
          </div>
      </div>
    </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->
@endsection()