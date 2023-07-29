@extends('layouts.app')
@extends('layouts.dashboardNav')

@section('content')
      
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active">Master Data</li>
              <li class="breadcrumb-item active">Input Barang</li>
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
              <form action="{{ url('masterdata')}}" method="post">
                @csrf
                <div class="card-body container">
                    <div class="form-group">
                        <label for="kategori">Pilih Kategori</label>
                        <select type="text" class="form-control" id="text" name="kategori">
                            <option value="">- Pilih -</option>
                            <option value="">- 1 -</option>
                            <option value="">- 2 -</option>
                            <option value="">- 3 -</option>

                            {{-- @foreach ($kategori as $item)
                            <option value="{{$item ->id}}">{{$item->nama}}</option>  
                            @endforeach --}}
                        </select>
                      </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Supplier</label>
                    <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" placeholder="Nama Supplier" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang" id="kode_barang" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis</label>
                    <input type="text" class="form-control" name="jenis" id="jenis" >
                  </div>
        
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <div class="flex-row">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="{{ url('masterdata') }}" class="btn btn-danger ml-3">Cancel</a>
                </div>
                </div>
              </form>
            </div>
        <!-- ./wrapper -->

        
</body>

</html>
@endsection