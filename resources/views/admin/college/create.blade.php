@extends('layouts.dashboard')

@section('content')
    
<div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Form Tambah Perguruan Tinggi</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('admin.college.store') }}" method="post" enctype="multipart/form-data">
    <div class="card-body">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama*</label>
            <div class="col-sm-3">
                <input type="text" name="name" class="form-control text-capitalize" id="name" placeholder="Nama Perguruan Tinggi" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Alamat*</label>
            <div class="col-sm-3">
                <input type="text" name="address" class="form-control text-capitalize" id="address" placeholder="Alamat Perguruan Tinggi" required>
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="logo" class="col-sm-2 col-form-label">Logo</label>
            <div class="col-sm-3">
                <input type="file" name="logo" class="form-control" id="logo">
                @error('logo')
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