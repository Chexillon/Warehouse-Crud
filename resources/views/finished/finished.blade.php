@extends('layouts.app')
@extends('component.pesan')

@section('content')
    <!-- Main Sidebar Container -->
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
              <a href="{{ url('/home')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item ">
              <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-boxes"></i>
                <p>
                  Barang Jadi
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-boxes"></i>
                <p>
                  Barang Setengah Jadi
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-solid fa-box"></i>
                <p>
                  Child Part & Komponen
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ url('raw') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-box"></i>
                <p>
                  Raw Material
                </p>
              </a>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 fw-bold">Barang Jadi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Barang Jadi</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>


      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          @if (Session::has('success'))
<div class="pt-3">
    <div class="alert alert-success">
        {{ Session::get('success') }}

    </div>
</div>
@endif              
        <a href="{{ url('finished/create')}}" class="btn btn-success mt-5 mb-5 fw-bold">Tambah Data +</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Nama Customer</th>
      <th scope="col">Tanggal Produksi/QC</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = $data->firstItem() ?>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $item->kode_barang }}</td>
      <td>{{ $item->nama_barang }}</td>
      <td>{{ $item->nama_customer }}</td>
      <td>{{ $item->tanggal }}</td>
      <td>{{ $item->jumlah }}</td>
      <td>
        <a href="{{ url('finished/'.$item->id.'/edit') }}" class="btn btn-warning ion-edit"></a>
        <form class="d-inline" action="{{ url('finished/'.$item->id) }}" method="post">
          @csrf
          @method('DELETE')
            <button type="submit" name="submit" class="btn btn-danger ion-android-delete"></button>
        </form>
      </td>
      <?php $i++ ?>
    @endforeach
    </tr>
  </tbody>
</table>
{{ $data->links() }}
        </div>
      </section>
@endsection