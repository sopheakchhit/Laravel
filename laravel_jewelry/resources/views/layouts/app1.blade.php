<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"​></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('', 'HOME') }}</title> -->
    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                  
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                         <li><a href="#"><i class="fa fa-fw fa-facebook"></i> : 
                        Jewelry Online Shop</a></li>
                        <li><a href="#"><i class="fa fa-fw fa fa-envelope"></i> :
                        sopheakchhit99@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-fw fa fa-phone"></i> : 
                        087 23 80 36</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li>
                            <a href="{{url('frontend/cart-show')}}"> <i class="fa fa-fw fa fa-shopping-cart"></i>
                            Cart ( {{Cart::count()}} )</a>
                        </li>
                         
                        <li><a href="#">|</a></li>
                            <li>
                               
                                <a href="{{url('check-out')}}">
                                  <i class="fa fa-fw fa fa-sign-out"></i> CheckOut 
                                </a>
                                
                            </li> 
                           
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        
        @yield('content')
    </div>
   
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

  
</body>
</html>
