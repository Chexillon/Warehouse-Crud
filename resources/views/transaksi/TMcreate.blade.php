@extends('layouts.app')
@extends('layouts.dashboardNav')

@section('content')
      
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Transaksi Barang Masuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active">Transaksi Barang Masuk</li>
              <li class="breadcrumb-item active">Input Barang Masuk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @if ($errors->any())
<div class="pt-3">
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $item)
      <li>{{ $item }}</li>
          
      @endforeach
    </ul>

  </div>
</div>
@endif
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Transaksi Masuk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('finished')}}" method="post">
                @csrf
                <div class="card-body container">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pilih Kategori</label>
                        <select type="text" class="form-control" id="text" name="kategori" placeholder="Nama Barang" >
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                      </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <select type="text" class="form-control" id="text" name="nama_barang" placeholder="Nama Barang" >
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis</label>
                    <select type="text" class="form-control" id="jenis" name="jenis"  >
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">No Surat Jalan</label>
                    <input type="text" class="form-control" id="text" name="surat_jalan" placeholder="No Surat Jalan" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Customer</label>
                    <input type="text" class="form-control" id="text" name="nama_customer" placeholder="Nama Customer" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" id="jumlah" >
                  </div>
        
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <div class="flex-row">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="{{ url('finished') }}" class="btn btn-danger ml-3">Cancel</a>
                </div>
                </div>
              </form>
            </div>
        <!-- ./wrapper -->

        
</body>

</html>
@endsection