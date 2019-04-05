<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"​></script>
<link rel="stylesheet" type="text/css" href="{{url('assets/menubar/css.css')}}">
<script type="text/javascript" src="{{url('assets/menubar/js.js')}}"></script>
<title>@yield('title')</title>
<content>@yield('content')</content>

<div id="throbber" style="display:none; min-height:200px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar navbar-fixed-top" role="navigation"
     style="background-color:black;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-left top-nav">
            <li>
                <a href="#"><center><i class="fa fa-fw fa fa"></i> LIGHT OF GLORY ONLINE SHOP</center></a>
            </li>
            <li>
                <a href="#">|</a>
            </li>
            <li>
                <a href="#"><center> <i class="fa fa-fw fa fa-user"></i> &nbsp;ADMIN PANEL</center></a>
            </li>
        </ul>

        <ul class="nav navbar-right top-nav">

           <!--  <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" 
                data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>  -->
            <li>
               
            </li>           
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    ADMIN <span class="caret"></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Admin Profile</a></li>
                   <!--  <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>-->
                    <li class="divider"></li> 
                    <!-- <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li> -->

                    <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                         <i class="fa fa-fw fa-power-off"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" 
                              method="POST" style="display: none;">
                              {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>


    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse ">
            <ul class="nav navbar-nav side-nav" style="background-color:black; margin-top: 2px;">

             <li>
            <a href="{{url('admin')}}" style="color: white;"><i class="fa fa-fw fa-home"> </i> HOME</a>
            </li>

             <li>
                <a href="{{url('admin/product')}}" style="color: white;"><i class="fa fa-fw fa-pinterest-p"> </i> PRODUCTS</a>
            </li>

            <li>
                <a href="{{url('admin/user')}}"" style="color: white;"><i class="fa fa-fw fa-user"> </i> USER</a>
            </li>

             <li>
            <a href="{{url('admin/categoires')}}" style="color: white;"><i class="fa fa-fw fa-list"> </i> CATEGORIES</a>
            </li>

            <li>
                <a href="{{url('admin/order')}}" style="color: white;">
                    <i class="fa fa-fw fa fa-file-text"> </i> ORDERS</a>
            </li>

            <li>
                <a href="{{url('admin/chart2')}}" style="color: white;">
                <i class="fa fa-bar-chart"> </i> REPORTS AND FORECASTING</a>
            </li>

             <li>
                <a href="{{url('admin/sendback')}}" style="color: white;">
                    <i class="fa fa-fw fa fa-envelope-o"> </i> SENDBACK</a>
            </li>


            <li>
                <a href="{{url('admin/feedbackAdmin')}}" style="color: white;">
                <i class="fa fa-fw fa fa-edit"> </i> FEEDBACK</a>
            </li>

            <!-- <li>
                <a href="{{url('admin/slider')}}" style="color: white;">
                <i class="fa fa-fw fa fa-edit"> </i> SLIDER</a>
            </li>
              
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1" style="color: white;">
                        <i class="fa fa-fw fa-search"></i> MENU 1 
                        <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2" style="color: white;">
                        <i class="fa fa-fw fa-star"></i>  MENU 2 <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="investigaciones/favoritas" style="color: white;">
                    <i class="fa fa-fw fa-user-plus"></i>  MENU 3</a>
                </li>
                <li>
                    <a href="sugerencias" style="color: white;">
                    <i class="fa fa-fw fa-paper-plane-o"></i> MENU 4</a>
                </li>
                <li>
                    <a href="faq" style="color: white;">
                    <i class="fa fa-fw fa fa-question-circle"></i> MENU 5</a>
                </li> -->
            </ul>

       
            


        </div>
        <!-- /.navbar-collapse -->
    </nav>

    
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
