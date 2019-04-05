@extends('layouts.menubar')

@section('content')
<div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">
      <div class="row" id="main" >
          <div class="panel panel-success">
            <div class="panel panel-heading">Messages reply Users</div>
            <div class="panel panel-body" style="margin-left: 5px;">

              <table class="table table-bordered">
                <tr class="warning">
                  <th><center>#</center></th>
                  <th><center>USER ID</center></th>
                  <th><center>SUBJECT</center></th>
                  <th><center>MESSAGES</center></th>
                  <th><center>REPLY DATE</center></th>
                  <th><center>ACTION</center></th>
                </tr>

                @foreach($sb as $sbs)
                <tr>
                  <td ><center>{{$loop->index+1}}</center></td>
                  <td><center>{{$sbs->user_id}}</center></td>
                  <td><center>{{$sbs->subject}}</center></td>
                  <td><center>{{$sbs->message}}</center></td>
                  <td><center>{{$sbs->created_at}}</center></td>
                  <td>
                    
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