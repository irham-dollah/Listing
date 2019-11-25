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
 
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slideshow/css/style2.css') }}" />
	<script type="text/javascript" src="{{ asset('assets/slideshow/js/modernizr.custom.86080.js') }}"></script>

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
        <li><span>Image 01</span><div><h3>o·s·c·e·n·t</h3></div></li>
        <li><span>Image 02</span><div><h3>in·ven·to·ry</h3></div></li>
        <li><span>Image 03</span><div><h3>sys·tem</h3></div></li>
        <li><span>Image 04</span><div><h3>OS·I·S</h3></div></li>
        <li><span>Image 05</span><div><h3>o·s·c·e·n·t</h3></div></li>
        <li><span>Image 06</span><div><h3>o·s·c·e·n·t</h3></div></li>
    </ul>

    <div id="app">
        @include('inc.navbar')
    </div>
    <div classs="contain-wrapper">
        @include('inc.messages')
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
