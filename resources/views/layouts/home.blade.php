<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>OSIS</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
  <link rel="stylesheet" href="css/select2-bootstrap.css">
  <link rel="stylesheet" href="css/gh-pages.css">
  
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

<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="/Dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
      <!-- Right Side Of Navbar -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
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
    </ul>
    </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/images/logo.png"
           alt="OSCENT Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">OSIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      {{-- <div class="user-panel mt-1 pb-3 mb-1 d-flex">
        <div class="image">
          <img src="/images/admin.png" class="img-circle elevation-1" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Irham Dollah</a>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/Dashboard" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    Dashboard
                    <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/StockOut" class="nav-link">
                    <i class="fas fa-dollar-sign"></i>
                    <p>
                    Sale
                    <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview menu-open">
                <a href="/Order" class="nav-link">
                <i class="fas fa-cart-arrow-down"></i>
                <p>
                    Order
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">2</span>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/Order/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Order</p>
                    </a>
                </li>
                <li class="nav-item">
                        <a href="/Order" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Order</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
                <a href="/Item" class="nav-link">
                <i class="fas fa-box-open"></i>
                <p>
                    Stock
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">2</span>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/Item/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>New Item</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Item" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Item</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
                <a href="/User" class="nav-link">
                <i class="fas fa-user-alt"></i>
                <p>
                    User
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">2</span>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/User/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/User" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View User</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        @include('inc.messages')
        @yield('content')
    </div>
    @include('inc.footer')
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/dist/js/demo.js"></script>
@yield('bottom')
</body>
</html>
    