@section('dashboardNav')
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ url('/') }}" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
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
 
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                <a href="{{ url('home') }}" class="nav-link {{ 'home' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

             <li class="nav-item">
                <a href="{{ url('masterdata') }}" class="nav-link {{ 'masterdata' == request()->path() ? 'active' : '' }}">
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
                    <a href="{{ url('/transaksi/barangmasuk') }}" class="nav-link {{ 'transaksi/barangmasuk' == request()->path() ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Barang Masuk</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/transaksi/barangkeluar') }}" class="nav-link {{ 'transaksi/barangkeluar' == request()->path() ? 'active' : '' }}">
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
                      <a href="{{ url('/information/finished') }}" class="nav-link {{ 'information/finished' == request()->path() ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Finished Good</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('/information/wip') }}" class="nav-link {{ 'information/wip' == request()->path() ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>WIP</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('/information/child') }}" class="nav-link {{ 'information/child' == request()->path() ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Child Part & Component</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('/information/raw') }}" class="nav-link {{ 'information/raw' == request()->path() ? 'active' : '' }}">
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
                  <a href="{{ url('/akun') }}" class="nav-link {{ 'akun' == request()->path() ? 'active' : '' }} ">
                    <i class="nav-icon fas fa-solid fa-box"></i>
                    <p>
                      Kelola Akun
                    </p>
                  </a>
                </li>
              
             
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@endsection