@extends('layouts.dashboard')
@section('content')
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
<div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Form Data Kos</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('admin.kos_address.update',$kos_address->id) }}" method="post">
    <div class="card-body">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <span class="px-1 h3 fw-bold">Detail Alamat Kos</span>
            <div class="form-group flex-column">
                <label for="kos_address" class="col-sm-2 col-form-label">Alamat Kos *</label>
                <div class="col-sm-6">
                    <input type="text" name="kos_address" class="form-control" id="kos_address" placeholder="Alamat Kos" value="{{ old('kos_address',$kos_address->address) }}" required>
                    @error('kos_address')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="flex-wrap form-group d-flex">
                <div class="form-group d-flex flex-column col-6 col-sm-3">
                    <label for="kos_province" class="col-form-label">Provinsi *</label>
                    <select class="form-control" name="kos_province" id="kos_province" required>
                        <option value="" disabled>Pilih Provinsi</option>
                        <option value="{{ $kos_address->province }}" selected>{{ $kos_address->province }}</option>
                    </select>
                </div>
                <div class="form-group d-flex flex-column col-6 col-sm-3">
                    <label for="kos_city" class="col-form-label">Kota *</label>
                    <select class="form-control" name="kos_city" id="kos_city" required>
                        <option value="" disabled>Pilih Kota</option>
                        <option value="{{ $kos_address->city }}" selected>{{ $kos_address->city }}</option>
                    </select>
                </div>
                <div class="form-group d-flex flex-column col-6 col-sm-3">
                    <label for="kos_district" class="col-form-label">Kecamatan *</label>
                    <select class="form-control" name="kos_district" id="kos_district" required>
                        <option value="" disabled>Pilih Kecamatan</option>
                        <option value="{{ $kos_address->district }}" selected>{{ $kos_address->district }}</option>
                    </select>
                </div>
                <div class="form-group d-flex flex-column col-6 col-sm-3">
                    <label for="kos_sub_district" class="col-form-label">Kelurahan *</label>
                    <select class="form-control" name="kos_sub_district" id="kos_sub_district" required>
                        <option value="" disabled>Pilih Kelurahan</option>
                        <option value="{{ $kos_address->sub_district }}" selected>{{ $kos_address->sub_district }}</option>
                    </select>
                </div>
            </div>
            <div class="flex-wrap d-flex form-group">
                <div class="form-group d-flex flex-column col-4">
                    <label for="kos_latitude" class="col-6col-form-label">Latitude *</label>
                    <div class="p-0 col-12">
                        <input type="text" name="kos_latitude" class="form-control" id="kos_latitude" value="{{ old('kos_latitude',$kos_address->latitude) }}" placeholder="Latitude">
                        @error('kos_latitude')
                            <div class="d-block text-red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group d-flex flex-column col-4">
                    <label for="kos_longitude" class="col-6col-form-label">Longitude *</label>
                    <div class="p-0 col-12">
                        <input type="text" name="kos_longitude" class="form-control" id="kos_longitude" value="{{ old('kos_longitude',$kos_address->longitude) }}" placeholder="Longitude">
                        @error('kos_longitude')
                            <div class="d-block text-red">
                                {{ $message }}
                            </div>
                        @enderror
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

@section('script')
    <script>
        $(document).ready(function(){
            fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
            .then(response => response.json())
            .then(function (provinces) {
                provinces.forEach(data => {
                    $('#kos_province').append(`<option value="${data.name}" tag="${data.id}">${data.name}</option>`);
                });  
            });

            $('#kos_province').change(function() {
                var province_id = $(this).find(':selected').attr('tag');
                $('#kos_city').empty();
                $('#kos_district').empty();
                $('#kos_sub_district').empty();
                $('#kos_city').append(`<option value="" disabled selected>Pilih Kota</option>`);
                $('#kos_district').append(`<option value="" disabled selected>Pilih Kecamatan</option>`);
                $('#kos_sub_district').append(`<option value="" disabled selected>Pilih Kelurahan</option>`);
                fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${province_id}.json`)
                .then(response => response.json())
                .then(function (cities) {
                    cities.forEach(data => {
                        $('#kos_city').append(`<option value="${data.name}" tag="${data.id}">${data.name}</option>`);
                    });  
                });
            });

            $('#kos_city').change(function() {
                var city_id = $(this).find(':selected').attr('tag');
                $('#kos_district').empty();
                $('#kos_sub_district').empty();
                $('#kos_district').append(`<option value="" disabled selected>Pilih Kecamatan</option>`);
                $('#kos_sub_district').append(`<option value="" disabled selected>Pilih Kelurahan</option>`);
                fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/districts/${city_id}.json`)
                .then(response => response.json())
                .then(function (districts) {
                    districts.forEach(data => {
                        $('#kos_district').append(`<option value="${data.name}" tag="${data.id}">${data.name}</option>`);
                    });  
                });
            });

            $('#kos_district').change(function() {
                var district_id = $(this).find(':selected').attr('tag');
                $('#kos_sub_district').empty();
                $('#kos_sub_district').append(`<option value="" disabled selected>Pilih Kelurahan</option>`);
                fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/villages/${district_id}.json`)
                .then(response => response.json())
                .then(function (sub_districts) {
                    sub_districts.forEach(data => {
                        $('#kos_sub_district').append(`<option value="${data.name}" tag="${data.id}">${data.name}</option>`);
                    });  
                });
            });
        });
    </script>
@endsection