  @extends('layouts.menubar')

@section('content')
<div id="wrapper">
   <div id="page-wrapper">
     <div class="container-fluid">
       <div class="row" id="main" >


        <form class="navbar-form navbar-left" method="POST" action="/pagiSearch">
           {{csrf_field()}}
            <div class="form-group">
            <input type="text" name="q" class="form-control" placeholder="Search Products">
            </div>
             <button type="submit" class="btn btn-primary">Search
              <i class="fa fa-fw fa fa-search"></i></button>  
        </form>
        

        <div class="nav navbar navbar-right" style="margin-right: 5px;">
          <a href="{{url('admin/product')}}"><button class="btn btn-primary">All Products
          <i class="fa fa-fw fa fa-pinterest-p"></i></button></a>​​ &nbsp;&nbsp;&nbsp;

            <a href="{{url('admin/create')}}"><button class="btn btn-success">
            <i class="fa fa-fw fa-plus" style="font-size: 18px;"></i> &nbsp;Add new Product
            </button></a>
        </div><br><br><br>
        
         <div class="panel panel-success">

           <div class="panel-heading ">Products</div>

           <div class="panel-body">
              @if(isset($product))
             <table class="table"> 
               <tr class="warning">
               	<th>#</th>
               	<th>Images</th>
                <th>Products ID</th>
                 <th>Categories ID</th>
               	<th>Name</th>
               	<th>Description</th>
               	<th>Price</th>
               	<th>Action</th>
                <th>Action</th>
               	<th>Action</th>
               </tr>
                
              
                @php($a=1)
                @foreach($product as $products)
                <tr>
                  <td>{{$loop->index+1}}</td>  <!-- or use this one {{$a++}} -->
                  <td><img src="{{asset($products->image)}}" width="70" height="70"></td>
                  <td>{{$products->id}}</td>
                  <td>{{$products->cat_id}}</td>
                  <td>{{$products->proname}}</td>
                  <td>{{$products->description}}</td>
                  <td>{{$products->price}}</td>

                  <td>
                      <a href="{{ action('AdminController@edit', $products['id']) }}"
                      class="btn btn-warning">
                      <i class="fa fa-fw fa fa-refresh" style="font-size: 18px;"></i> Edit</a>  
                  </td>

                  <td>
                      <a href="{{url('admin/viewPro',$products->id)}}">
                      <div class="col-sm-30">
                      <button type="submit" class="btn btn-success">
                      <i class="fa fa-search"></i> View
                      </button>
                      </div>
                      </a>
                  </td>

                  <td>
                      <form action="{{action('ProductsController@destroy', $products['id'])}}" 
                      method="post">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger " type="submit"
                      onclick="return confirm('Are sure for DELETE this Product?')" >
                      <i class="fa fa-fw fa fa-remove" style="font-size: 18px;"></i> Delete </button>
                      </form >
                  </td>

                </tr>

                @endforeach
             

                
             </table> 
             {{$product->links()}}
             @else
             ​​ <center><h3>Product <strong style="color: red;"> NOT FOUND </strong></h3></center>
             @endif
            
           </div>
        </div>

      
         
       </div>
      </div>


    </div> <!-- end container-fluid -->
  </div><!--  end page-wrapper -->
</div><!--  end wrapper -->
@endsection()