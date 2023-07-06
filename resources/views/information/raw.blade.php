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
              <h1 class="m-0 fw-bold">Master Data</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Master Data</li>
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


<table class="table table-light mb-5">
  <h5 class="p-3 bg-dark text-white rounded">Raw Material</h5>
  <thead>
    <tr class="table-secondary">
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Nama Supplier</th>
      <th scope="col">Jenis Barang</th>
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
</body>

</html>
@endsection