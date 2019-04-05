<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
      width: 100%;
      z-index: 9999 !important;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- <title>{{ config('', 'Laravel') }}</title> -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"​></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="300">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <!-- <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp; 
                        <li><a href="#"><i class="fa fa-fw fa-facebook"></i> : 
                        Light of Glory Online Shop</a></li>
                        <li><a href="#"><i class="fa fa-fw fa fa-envelope"></i> :
                        sopheakchhit99@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-fw fa fa-phone"></i> : 
                        087 23 80 36</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login
                            <i class="fa fa-fw fa fa-sign-in"></i> </a></li>
                            <li><a href="#">|</a></li>
                            <li><a href="{{ route('register') }}">Create Account
                                <i class="fa fa-fw fa fa-user-plus"></i></a></li>
                        @else
                            <li>
                                <a href="{{url('frontend/cart-show')}}">
                                  <i class="fa fa-fw fa fa-shopping-cart"></i> Cart 
                                 ( {{Cart::count()}} )
                                </a>

                            </li>
                           
                             
                            <li><a href="#">|</a></li>
                            <li>
                               
                                <a href="{{url('check-out')}}">
                                 <i class="fa fa-fw fa fa-sign-out"></i> CheckOut  
                                </a>
                                
                            </li>
                            <li><a href="#">|</a></li>
                            <li class="dropdown">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                     <i class="fa fa-fw fa fa-user"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                  
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="fa fa-fw fa fa-sign-out"></i> Logout 
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                 <li> <a href="{{url('frontend/user-acc', Auth::user()->id)}}">
                                    <i class="fa fa-fw fa-user"></i> My Account
                                       
                                    </a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        
        
        @yield('content')
        
      <br>
       
      
    </div>
    
   <br>  

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
   
</body>
</html>
