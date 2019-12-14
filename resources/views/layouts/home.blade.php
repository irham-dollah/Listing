<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OSIS</title>

  <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="/fonts/googleFont/sourceSansPro">    
    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/fonts/googleFont/sourceSansPro">

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .center{
            text-align: center;
        }
    </style>
    @yield('top')
</head>

<body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="/Dashboard" class="logo">
                <span class="logo-mini"><b>OS</b>IS</span>
                <span class="logo-lg"><b>INVENTORY</b>SYSTEM</span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        <i class="fa fa-fw fa-power-off"></i> Log Out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    {{-- <li class="{{  request()->is('Dashboard') ? 'active' : ''  }}"><a href="{{ url('/Dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li> --}}
                    <li class="header">SALE</li>
                    <li class="{{  request()->is('Cart/*') ? 'active' : ''  }}"><a href="{{ route('Cart.index') }}"><i class="fas fa-dollar-sign"></i> <span>New Sale</span></a></li>        
                    <li class="{{  request()->is('sale/*') ? 'active' : ''  }}"><a href="{{ route('Sale.index') }}"><i class="fas fa-dollar-sign"></i> <span>View Sale</span></a></li>        
                    <li class="header">ORDER</li>
                    <li class="{{  request()->is('OrderCart/*') ? 'active' : ''  }}"><a href="{{ route('OrderCart.index') }}"><i class="fas fa-shopping-cart"></i> <span>New Order</span></a></li>        
                    <li class="{{  request()->is('Order') ? 'active' : ''  }}"><a href="{{ route('Order.index') }}"><i class="fas fa-shopping-cart"></i> <span>View Order</span></a></li>        
                    <li class="header">ITEM</li>
                    <li class="{{  request()->is('Item/create') ? 'active' : ''  }}"><a href="{{ route('Item.create') }}"><i class="fas fa-box-open"></i> <span>New Item</span></a></li>        
                    <li class="{{  request()->is('Item') ? 'active' : ''  }}"><a href="{{ route('Item.index') }}"><i class="fas fa-box-open"></i> <span>View Item</span></a></li>        
                    <li class="header">USER</li>
                    <li class="{{  request()->is('User/create') ? 'active' : ''  }}"><a href="{{ route('User.create') }}"><i class="fas fa-user-alt"></i> <span>New User</span></a></li>        
                    <li class="{{  request()->is('User') ? 'active' : ''  }}"><a href="{{ route('User.index') }}"><i class="fas fa-user-alt"></i> <span>View User</span></a></li>        
                </ul>
            </section>
        </aside>
    <div class="content-wrapper">
        <section class="content">     
            @include('inc.messages')
            @yield('content')
        </section>
    </div>
    @include('inc.footer')
    <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>
<!--Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<!--Chart-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
<!--Cart-->
<script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }} "></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>


@yield('bottom')
</body>
</html>
    