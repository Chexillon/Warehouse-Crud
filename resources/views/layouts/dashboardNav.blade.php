@section('dashboardNav')
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
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@endsection