@extends('layouts.app')
@extends('layouts.dashboardNav')

@section('dashboardActive')
active
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>Barang Jadi</p>
                </div>
                <div class="icon">
                  <i class=" ion ion-ios-box"></i>
                </div>
                <a href="{{ url('finished')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="icon">
              <i class=" ion ion-ios-box"></i>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning text-white">
                <div class="inner text-white">
                  <h3>44</h3>

                  <p>Child Part & Komponen</p>
                </div>
                <div class="icon">
                  <i class="ion ion-gear-b"></i>
                </div>
                <a href="{{ url('child') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right  "></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Raw Material</p>
                </div>
                <div class="icon">
                  <i class="ion ion-gear-a"></i>
                </div>
                <a href="{{ url('raw') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Barang Setengah Jadi</p>
            </div>
            <div class="icon">
              <i class="ion ion-cube"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning text-white">
            <div class="inner text-white">
              <h3>44</h3>

              <p>Child Part & Komponen</p>
            </div>
            <div class="icon">
              <i class="ion ion-gear-b"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right  "></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Raw Material</p>
            </div>
            <div class="icon">
              <i class="ion ion-gear-a"></i>
            </div>
            <a href="{{ url('raw') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->



      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
@endsection