@extends('layouts.menubar')

@section('content')
   <div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">

       <div class="row" id="main" >

         <form class="navbar-form navbar-left" method="POST" action="/searchcate">
              {{csrf_field()}}
              <div class="form-group">
              <input type="text" name="q" class="form-control" placeholder="Search Categories">
              </div>
              <button type="submit" class="btn btn-primary">Search
              <i class="fa fa-fw fa fa-search"></i></button>  
          </form>

        <div class="nav navbar navbar-right" style="margin-right: 5px;">
            <a href="{{url('admin/create_cate')}}"><button class="btn btn-success">
            <i class="fa fa-fw fa-plus" style="font-size: 18px;"></i> &nbsp;Add new Categories
            </button></a>
          </div><br><br><br>
        
         <div class="panel panel-success" style="margin-left: 12px;">

           <div class="panel-heading ">CATEGORIES</div>

           <div class="panel-body">
               @if(isset($cate))
             <table class="table"> 
               <tr class="warning">
               	<th><center>#</center> </th>
               	<th><center>Categories ID</center> </th>
               	<th><center>Categories Name</center> </th> 
              	<th><center>Action</center> </th>
               	<th><center>Action</center></th>
               </tr>
                
                @php($a=1)
                @foreach($cate as $cates)
                <tr>
                  <td><center>{{$a++}}</center> </td>
                  <td><center>{{$cates->id}}</center></td>
                  <td><center>{{$cates->name}}</center> </td>
                 
                  <td>
                   	<center>
                      <a href="{{ action('AdminController@edit_cate', $cates['id']) }}" class="btn btn-warning">
                      <i class="fa fa-fw fa fa-refresh" style="font-size: 18px;"> </i> Edit </a>
                    </center>  
                  </td>

                  <td>
                      <center>
                          <form action="{{action('CategoryController@destroy', $cates['id'])}}" 
                                method="post">
                               {{csrf_field()}}
                               <input name="_method" type="hidden" value="DELETE">
                               <button class="btn btn-danger " type="submit"
                                onclick="return confirm('Are sure for DELETE this Category?')" >
                                <i class="fa fa-fw fa fa-remove" style="font-size: 18px;"></i>  Delete
                               </button>
                               </form >
                        </td>
                   </center>
                </tr>

                @endforeach
                
             </table> 
              {{$cate->render()}}  
              @else
             ​​ <center><h3>Category <strong style="color: red;"> NOT FOUND </strong></h3></center>
             @endif
             <!-- {{$cate->links()}}  or use this one {!! $cate->render() !!} -->
           </div>
        </div>

      
         
       </div>
      </div>


    </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->
@endsection