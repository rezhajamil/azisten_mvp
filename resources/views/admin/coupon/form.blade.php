@extends('layouts.dashboard')

@section('content')
    
<div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Form Tambah Kode Kupon</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('admin.coupon.store') }}" method="post">
    <div class="card-body">
        @csrf
        <div class="form-group row">
            <label for="discount_amount" class="col-sm-2 col-form-label">Besar Diskon</label>
            <div class="col-sm-3">
                <input type="number" name="disc_amount" class="form-control" id="discount_amount" placeholder="Besar Diskon" required>
                @error('disc_amount')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- <div class="form-group row">
            <label for="discount_type" class="col-sm-2 col-form-label">Jenis Diskon</label>
            <div class="col-sm-6">
                <input type="text" name="disc_type" class="form-control" id="discount_type" placeholder="Misal (Air Galon)">
                @error('disc_type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div> --}}
        <div class="form-group row">
            <label for="exp_date" class="col-sm-2 col-form-label">Tanggal Expired</label>
            <div class="col-sm-4">
                <input type="date" name="exp_date" class="form-control" id="exp_date" data-toggle="datetimepicker" required>
                @error('exp_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="coupon_amount" class="col-sm-2 col-form-label">Jumlah Kupon</label>
            <div class="col-sm-3">
                <input type="number" name="coupon_amount" class="form-control" id="coupon_amount" placeholder="Jumlah Kupon yang ingin dibuat" required>
                @error('coupon_amount')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
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