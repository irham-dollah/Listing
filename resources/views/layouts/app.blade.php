<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
    <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
    <meta name="author" content="Codrops" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login | OSIS</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
    {{-- <link href="https://imaluum.iium.edu.my/bower_components/admin-lte/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons 4.4.0 -->
    <link href="https://imaluum.iium.edu.my/bower_components/admin-lte/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.1 -->
    <link href="https://imaluum.iium.edu.my/bower_components/admin-lte/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <!-- <link href="https://imaluum.iium.edu.my/bower_components/admin-lte/dist/css/AdminLTE.css" rel="stylesheet" type="text/css" /> -->
    <!-- css animation -->
    <link href="https://imaluum.iium.edu.my/CSS3FullscreenSlideshow/css/style2.css" rel="stylesheet" type="text/css" /> --}}
    
    {{-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> --}}
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
	<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>

    <style>
        .center{
            text-align: center;
        }
        body{
            background-color: whitesmoke;
            counter-reset: Count-Value;    
        }
        tr td:first-child:before
        {
        counter-increment: Count-Value;   
        content: counter(Count-Value);
        }
    </style>
    @yield('top')
</head>
<body>
    <ul class="cb-slideshow">
        <li><span>AAAA</span><div><h3>O·S·C·E·N·T</h3></div></li>
        <li><span>Image 02</span><div><h3>IN·VEN·TO·RY</h3></div></li>
        <li><span>Image 03</span><div><h3>SYS·TEM</h3></div></li>
        <li><span>Image 04</span><div><h3>>> OS·I·S <<</h3></div></li>
    </ul>

    <div id="app">
        @include('inc.navbar')
        {{-- <div class="container"> --}}
    </div>
    <div classs="contain-wrapper">
        {{-- <section class="content container-fluid"> --}}
        @include('inc.messages')
        @yield('content')
        {{-- </section> --}}
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Final Year Project</b> KOE IIUM
        </div>
        <strong>Copyright &copy; 2019 <a href="https://www.instagram.com/oscent_iium/">Inventory System Oscent</a>.</strong> All rights
        reserved.
    </footer>
        {{-- @include('inc.footer') --}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
