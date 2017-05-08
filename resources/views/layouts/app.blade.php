<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang=lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom CSS -->

	   <link rel="stylesheet" href="css/main.css">


	    <script src="//use.edgefonts.net/bebas-neue.js"></script>

<!-- CSRF Token -->


  <title>{{ config('app.name', 'Carrental Service') }}</title>

<!-- Styles -->


<!-- Scripts -->
<script>
  window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
  ]) !!};
</script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="/css/custom.css" rel="stylesheet">
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>


</head>

<body >
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


        <div id="app">
             <nav class="navbar navbar-default navbar-static-top">
                 <div class="container">
                     <div class="navbar-header" style="margin:-10px">

                         <!-- Collapsed Hamburger -->
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                             <span class="sr-only">Toggle Navigation</span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                         </button>

                         <!-- Branding Image -->
                         <a class="navbar-brand" style="margin:-10px" href="{{ url('/') }}">
                             <!-- {{ config('app.name', 'Carrental Service') }} -->
                             <img src="/images/cssimg/logo1.png" alt="" width="160">
                         </a>
                     </div>

                     <div class="collapse navbar-collapse" id="app-navbar-collapse">
                         <!-- Left Side Of Navbar -->
                         <ul class="nav navbar-nav">
                             &nbsp;
                         </ul>

                         <!-- Right Side Of Navbar -->
                         <ul class="nav navbar-nav navbar-right">
                             <!-- Authentication Links -->
                             @if (Auth::guest())
                                 <li><a href="{{ route('login') }}">Login</a></li>
                                 <li><a href="{{ route('register') }}">Register</a></li>
                             @else
                                 <li class="dropdown">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                         {{ Auth::user()->name }} <span class="caret"></span>
                                     </a>

                                     <ul class="dropdown-menu" role="menu">
                                         <li>
                                             <a href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                                 Logout
                                             </a>

                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                 {{ csrf_field() }}
                                             </form>
                                         </li>
                                     </ul>
                                 </li>
                             @endif
                         </ul>
                     </div>
                 </div>
             </nav>

             @yield('content')
         </div>

            <script src="{{ asset('js/app.js') }}"></script>





        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
@yield('script')
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>

    </body>
</html>
