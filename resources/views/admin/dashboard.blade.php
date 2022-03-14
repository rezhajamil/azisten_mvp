@extends('layouts.dashboard')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ route('admin.cari_kos.index') }}">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-house-user"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Pencarian Kos Completed</span>
                  <span class="info-box-number">
                    {{ $cariKosComplete }} / {{ $cariKos }}
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ route('admin.pesan_galon.index') }}">
            <div class="mb-3 info-box">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-tint"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pemesanan Galon Completed</span>
                <span class="info-box-number">
                  {{ $galonPurchaseComplete }} / {{ $galonPurchase }}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </a>
          </div>
          <!-- /.col -->
          
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ route('admin.pesan_catering.index') }}">
              <div class="mb-3 info-box">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-utensils"></i></span>
                
                <div class="info-box-content">
                  <span class="info-box-text">Pemesanan Catering Completed</span>
                  <span class="info-box-number">
                    {{ $alatKosPurchaseComplete }} / {{ $alatKosPurchase }}
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ route('admin.pesan_alat_kos.index') }}">
              <div class="mb-3 info-box">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                
                <div class="info-box-content">
                  <span class="info-box-text">Pemesanan Alat Kos Completed</span>
                  <span class="info-box-number">
                    {{ $alatKosPurchaseComplete }} / {{ $alatKosPurchase }}
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ route('admin.antrian_galon.index') }}">
            <div class="mb-3 info-box">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-tint"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Antrian Galon</span>
                <span class="info-box-number">
                  {{ $galonQueue }}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </a>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ route('admin.customer.index') }}">
              <div class="mb-3 info-box">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Customers</span>
                  <span class="info-box-number">{{ $customers }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ route('admin.afiliasi.index') }}">
              <div class="mb-3 info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Afiliators</span>
                <span class="info-box-number">{{ $afiliators }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </a>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
@endsection