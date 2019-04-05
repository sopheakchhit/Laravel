<!DOCTYPE html>
<html>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" 
  rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        body{margin-top:50px;}
.glyphicon { margin-right:10px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }
    </style>


     <!--  FA -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"​></script>
<link rel="stylesheet" type="text/css" href="{{url('assets/menubar/css.css')}}">
<script type="text/javascript" src="{{url('assets/menubar/js.js')}}"></script>

<!--  end FA -->
</head>


<body>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-primary">

                    <div class="panel-heading" >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <i class="fa fa-fw fa fa-list"></i>  Categories</a>
                        </h4>
                    </div><br>
                       <center><a href="{{url('/')}}">All Categories</a></center>
                       <hr>
                    <div class="panel panel-success">
                      <div class="panel panel-heading">Gold</div>
                      <div class="panel panel-body">
                          <a href="{{url('cat/gold_ring')}}">Rings</a><br><br>
                          <a href="{{url('cat/gold_necklace')}}">Necklace</a><br><br>
                          <a href="{{url('cat/gold_earrings')}}">Earrings</a>
                      </div>
                    </div>

                     <div class="panel panel-success">
                      <div class="panel panel-heading">Silver</div>
                      <div class="panel panel-body">
                          <a href="{{url('cat/silver_ring')}}">Rings</a><br><br>
                          <a href="{{url('cat/silver_necklace')}}">Necklace</a><br><br>
                          <a href="{{url('cat/silver_earrings')}}">Earrings</a>
                      </div>
                    </div>

                     <div class="panel panel-success">
                      <div class="panel panel-heading">Diamond</div>
                      <div class="panel panel-body">
                          <a href="{{url('cat/diamond_ring')}}">Rings</a><br><br>
                          <a href="{{url('cat/diamond_necklace')}}">Necklace</a><br><br>
                          <a href="{{url('cat/diamond_earrings')}}">Earrings</a>
                      </div>
                    </div>




                </div>
            </div>
        </div>    
    </div>
</div>

</body>
</html>