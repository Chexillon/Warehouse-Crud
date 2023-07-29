@extends('layouts.app')
@extends('layouts.dashboardNav')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 fw-bold">Barang Keluar</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Barang Keluar</li>
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
        <a href="{{ url('/transaksi/barangkeluar/create')}}" class="btn btn-success mt-5 mb-5 fw-bold ion-android-add-circle"> Tambah Data</a>
        <table class="table table-light mb-5">
         <h5 class="p-3 bg-dark text-white rounded">Barang Finished</h5>
  <thead>
    <tr class="table-secondary">
      <th scope="col">No</th>
      <th scope="col">No Surat Jalan</th>
      <th scope="col">No PO</th>
      <th scope="col">Driver</th>
      <th scope="col">No Polisi</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Nama Customer</th>
      <th scope="col">Keterangan</th>
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
      <td>{{ $item->nama_barang }}</td>
      <td>{{ $item->nama_customer }}</td>
      <td>{{ $item->tanggal }}</td>
      <td>{{ $item->jumlah }}</td>
      <td>
        <a href="{{ url('masterdata/'.$item->id.'/edit') }}" class="btn btn-warning ion-edit"></a>
        <form class="d-inline" action="{{ url('masterdata/'.$item->id) }}" method="post">
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

<table class="table table-light mb-5">
  <h5 class="p-3 bg-dark text-white rounded">Barang WIP</h5>
<thead>
<tr class="table-secondary">
<th scope="col">No</th>
<th scope="col">Nama Barang</th>
<th scope="col">Nama Customer</th>
<th scope="col">Tanggal Produksi/QC</th>
<th scope="col">OK</th>
<th scope="col">Reject</th>
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
 <a href="{{ url('masterdata/'.$item->id.'/edit') }}" class="btn btn-warning ion-edit"></a>
 <form class="d-inline" action="{{ url('masterdata/'.$item->id) }}" method="post">
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


<table class="table table-light mb-5">
  <h5 class="p-3 bg-dark text-white rounded">Raw Material</h5>
  <thead>
    <tr class="table-secondary">
      <th scope="col">No</th>
      <th scope="col">Jenis</th>
      <th scope="col">Shift</th>
      <th scope="col">Jam</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Tanggal Produksi/QC</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Jumlah</th>
      <th scope="col">PIC</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = $data->firstItem() ?>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $item->nama_barang }}</td>
      <td>{{ $item->nama_supplier }}</td>
      <td>{{ $item->jumlah }}</td>
      <td>{{ $item->nama_barang }}</td>
      <td>{{ $item->nama_supplier }}</td>
      <td>{{ $item->jumlah }}</td>
      <td>{{ $item->nama_supplier }}</td>
      <td>{{ $item->jumlah }}</td>
      <td>  
        <a href="{{ url('raw/'.$item->id.'/edit') }}" class="btn btn-warning ion-edit"></a>
        <form class="d-inline" action="{{ url('raw/'.$item->id) }}" method="post">
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


<table class="table table-light">
  <h5 class="p-3 bg-dark text-white rounded">Child Part & Komponen</h5>
  <thead>
    <tr class="table-secondary">
      <th scope="col">No</th>
      <th scope="col">Jenis</th>
      <th scope="col">Shift</th>
      <th scope="col">Jam</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Tanggal Produksi/QC</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Jumlah</th>
      <th scope="col">PIC</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = $data->firstItem() ?>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $item->nama_barang }}</td>
      <td>{{ $item->nama_supplier }}</td>
      <td>{{ $item->jumlah }}</td>
      <td>{{ $item->nama_barang }}</td>
      <td>{{ $item->nama_supplier }}</td>
      <td>{{ $item->jumlah }}</td>
      <td>{{ $item->nama_supplier }}</td>
      <td>{{ $item->jumlah }}</td>
      <td>      
        <a href="{{ url('raw/'.$item->id.'/edit') }}" class="btn btn-warning ion-edit"></a>
        <form class="d-inline" action="{{ url('raw/'.$item->id) }}" method="post">
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




  </section>
@endsection