@extends('layouts.dashboard')
@section('content')
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
<div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Form Edit Data Dewa Tahunan Kos</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('admin.kos_yearly.update',$kos_yearly_rent->id) }}" method="post">
    <div class="card-body">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <span class="px-1 h3 fw-bold">Biaya Kos</span>
            <span class="px-1 mt-3 h5 text-decoration-underline fw-bold">Tahunan</span>
            <div class="px-0 form-group d-flex flex-column col-12 col-sm-2 mx-sm-2">
                <label for="kos_yearly_rent" class="col-form-label">Sewa Kos Tahunan *</label>
                <div class="px-0 col-sm-12">
                    <input type="number" name="kos_yearly_rent" class="form-control" id="kos_yearly_rent" placeholder="Sewa Kos Tahunan" value="{{ old('kos_yearly_rent',$kos_yearly_rent->fee) }}" required>
                    @error('kos_yearly_rent')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="px-0 form-group d-flex flex-column col-12 col-sm-2 mx-sm-2">
                <label for="kos_yearly_dp" class="col-form-label">DP Kos Tahunan </label>
                <div class="px-0 col-sm-12">
                    <input type="number" name="kos_yearly_dp" class="form-control" id="kos_yearly_dp" placeholder="DP Kos Tahunan" value="{{ old('kos_yearly_dp',$kos_yearly_rent->down_payment) }}">
                    @error('kos_yearly_dp')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="px-0 form-group d-flex flex-column col-12 col-sm-4 mx-sm-2">
                <label for="kos_yearly_charge" class="col-form-label">Biaya Tambahan Penghuni Lebih Dari 1 Orang </label>
                <div class="px-0 col-sm-12">
                    <input type="number" name="kos_yearly_charge" class="form-control" id="kos_yearly_charge" placeholder="Biaya Tambahan Penghuni Lebih Dari 1 Orang" value="{{ old('kos_yearly_charge',$kos_yearly_rent->two_people_charge) }}">
                    @error('kos_yearly_charge')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            {{-- <span class="px-1 mt-3 h5 text-decoration-underline fw-bold">Bulanan (Kosongkan Bila Tidak Ada)</span>
            <div class="px-0 form-group d-flex flex-column col-12 col-sm-2 mx-sm-2">
                <label for="kos_monthly_rent" class="col-form-label">Sewa Kos Bulanan</label>
                <div class="px-0 col-sm-12">
                    <input type="number" name="kos_monthly_rent" class="form-control" id="kos_monthly_rent" value="{{ old('kos_monthly_rent') }}" placeholder="Sewa Kos Bulanan">
                    @error('kos_monthly_rent')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="px-0 form-group d-flex flex-column col-12 col-sm-2 mx-sm-2">
                <label for="kos_monthly_dp" class="col-form-label">DP Kos Bulanan</label>
                <div class="px-0 col-sm-12">
                    <input type="number" name="kos_monthly_dp" class="form-control" id="kos_monthly_dp" value="{{ old('kos_monthly_dp') }}" placeholder="DP Kos Bulanan">
                    @error('kos_monthly_dp')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="px-0 form-group d-flex flex-column col-12 col-sm-4 mx-sm-2">
                <label for="kos_monthly_charge" class="col-form-label">Biaya Tambahan Penghuni Lebih Dari 1 Orang</label>
                <div class="px-0 col-sm-12">
                    <input type="number" name="kos_monthly_charge" class="form-control" id="kos_monthly_charge" value="{{ old('kos_monthly_charge') }}"placeholder="Biaya Tambahan Penghuni Lebih Dari 1 Orang">
                    @error('kos_monthly_charge')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div> --}}
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-info">Submit</button>
    </div>
    <!-- /.card-footer -->
    </form>
</div>
@endsection
