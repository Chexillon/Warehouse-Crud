<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
  
      <!-- Navbar -->
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <a class="navbar-brand" href="{{ url('/home') }}">
                Warehouse
            </a>
        </ul>
  
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif
  
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>
  
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
  
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>
    </div>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ url('/') }}" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Warehouse</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  
               <li class="nav-item">
                  <a href="{{ url('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
  
               <li class="nav-item">
                  <a href="{{ url('masterdata') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-box"></i>
                    <p>
                      Master Data
                    </p>
                  </a>
                </li>
  
                <li class="nav-item">
                <a href="{{ url('') }}" class="nav-link">
                  <i class="nav-icon fas fa-boxes"></i>
                  <p>
                      Transaksi Barang
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ url('/transaksi/barangmasuk') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Barang Masuk</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('/transaksi/barangkeluar') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Barang Keluar</p>
                      </a>
                    </li>
                  </ul>
                </li>
  
                <li class="nav-item">
                  <a href="{{ url('') }}" class="nav-link">
                    <i class="nav-icon fas fa-boxes"></i>
                    <p>
                        Informasi Gudang
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('/information/finished') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Finished Good</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('/information/wip') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>WIP</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('/information/child') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Child Part & Component</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('/information/raw') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Raw Material</p>
                        </a>
                      </li>
                    </ul>
                  </li>
    
              <li class="nav-item">
                <a href="{{ url('') }}" class="nav-link">
                  <i class="nav-icon fas fa-boxes"></i>
                  <p>
                      Laporan
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Laporan Barang Masuk</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../../index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Laporan Barang Keluar</p>
                      </a>
                    </li>
                  </ul>
  
                  <li class="nav-item">
                    <a href="{{ url('masterdata') }}" class="nav-link">
                      <i class="nav-icon fas fa-solid fa-box"></i>
                      <p>
                        Kelola Akun
                      </p>
                    </a>
                  </li>
      </nav>

  

        <!-- jQuery -->
        <script src="/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="/plugins/moment/moment.min.js"></script>
        <script src="/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/dist/js/pages/dashboard.js"></script>
        @yield('konten')

      </body>
</html>