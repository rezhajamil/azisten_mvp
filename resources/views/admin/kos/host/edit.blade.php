@extends('layouts.dashboard')

@section('content')
    
@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
<div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Form Edit Data Pemilik Kos</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('admin.host.update',$host->id) }}" method="post">
    <div class="card-body">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <span class="px-1 h3 fw-bold">Pemilik Kos</span>
            <div class="my-3 new-host col-12">
                <div class="d-flex flex-column">
                    <div class="form-group row">
                        <label for="host_name" class="capitalize col-sm-2 col-form-label">Nama Pemilik Kos *</label>
                        <div class="col-sm-6">
                            <input type="text" name="host_name" class="form-control" id="host_name" placeholder="Nama Pemilik Kos" value="{{ old('host_name',$host->name) }}">
                            @error('host_name')
                                <div class="d-block text-red">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="host_phone" class="col-sm-2 col-form-label">No. Telp Pemilik Kos *</label>
                        <div class="col-sm-6">
                            <input type="text" name="host_phone" class="form-control" id="host_phone" placeholder="No. Telp Pemilik Kos (081234567890)" value="{{ old('host_phone',$host->phone) }}">
                            @error('host_phone')
                                <div class="d-block text-red">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="host_email" class="col-sm-2 col-form-label">Email Pemilik Kos</label>
                        <div class="col-sm-6">
                            <input type="email" name="host_email" class="form-control" id="host_email" placeholder="Email Pemilik Kos" value="{{ old('host_email',$host->email) }}">
                            @error('host_email')
                                <div class="d-block text-red">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="host_address" class="col-sm-2 col-form-label">Alamat Pemilik Kos</label>
                        <div class="col-sm-6">
                            <textarea name="host_address" class="form-control" id="host_address" placeholder="Alamat Pemilik Kos">{{ old('host_address',$host->address) }}</textarea>
                        </div>
                    </div>
                </div>
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


