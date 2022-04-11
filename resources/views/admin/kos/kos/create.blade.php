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
    <form class="form-horizontal" action="{{ route('admin.kos.store') }}" method="post" enctype="multipart/form-data">
    <div class="card-body">
        @csrf
        <div class="form-group row">
            <span class="px-1 h3 fw-bold">Pemilik Kos</span>
            <div class="custom-control custom-radio">
                <input type="radio" id="exist-host" name="exist_host" value="exist" class="custom-control-input" checked>
                <label class="custom-control-label fw-normal" for="exist-host">Pilih Pemilik Kos</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="new-host" name="exist_host" value="new" class="custom-control-input">
                <label class="custom-control-label fw-normal" for="new-host">Tambah Data Pemilik Kos</label>
            </div>
            <div class="my-3 exist-host col-sm-5">
                <select class="form-control" name="host_id" required>
                    <option value="" selected disabled>Pilih Pemilik Kos</option>
                    @if ($hosts->count() > 0)
                        @foreach ($hosts as $host)
                            <option value="{{ $host->id }}" {{ old('host_id')==$host->id?'selected':'' }}>{{ $host->name }}</option>
                        @endforeach
                    @else
                        <option value="" disabled>Data Pemilik Kos Tidak Ada</option>
                    @endif
                </select>
            </div>
            <div class="my-3 new-host col-12" style="display: none">
                <div class="d-flex flex-column">
                    <div class="form-group row">
                        <label for="host_name" class="capitalize col-sm-2 col-form-label">Nama Pemilik Kos *</label>
                        <div class="col-sm-6">
                            <input type="text" name="host_name" class="form-control" id="host_name" placeholder="Nama Pemilik Kos" value="{{ old('host_name') }}">
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
                            <input type="text" name="host_phone" class="form-control" id="host_phone" placeholder="No. Telp Pemilik Kos (081234567890)" value="{{ old('host_phone') }}">
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
                            <input type="email" name="host_email" class="form-control" id="host_email" placeholder="Email Pemilik Kos" value="{{ old('host_email') }}">
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
                            <textarea name="host_address" class="form-control" id="host_address" placeholder="Alamat Pemilik Kos">{{ old('host_address') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <span class="px-1 h3 fw-bold">Informasi Kos</span>
            <div class="form-group row flex-column">
                <label for="kos_name" class="col-sm-2 col-form-label">Nama Kos *</label>
                <div class="col-sm-6">
                    <input type="text" name="kos_name" class="capitalize form-control" id="kos_name" placeholder="Nama Kos" value="{{ old('kos_name') }}" required>
                    @error('kos_name')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row flex-column">
                <label for="kos_type" class="col-sm-2 col-form-label">Tipe Kos *</label>
                <select class="form-control col-3" name="kos_type" required>
                    <option value="" selected disabled>Pilih Tipe Kos</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ old('kos_type')==$type->id ? 'selected':'' }}>{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label for="kos_facility" class="col-sm-2 col-form-label">Fasilitas Kos *</label>
                @foreach ($facilities as $facility)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="facility-{{ $facility->name }}" value="{{ $facility->id }}" name="kos_facility[]" {{is_array(old('kos_facility')) && in_array($facility->id,old('kos_facility'))?'checked':'' }}>
                        <label class="form-check-label" for="facility-{{ $facility->name }}">{{ $facility->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group row flex-column">
                <label for="kos_category" class="col-sm-2 col-form-label">Kategori Kos *</label>
                <select class="form-control col-3" name="kos_category" required>
                    <option value="" selected disabled>Pilih Kategori Kos</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id==old('kos_category')?'selected':'' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row flex-column">
                <label for="kos_desc" class="col-sm-2 col-form-label">Deskripsi Kos</label>
                <div class="col-sm-6">
                    <textarea name="kos_desc" class="form-control" id="kos_desc" placeholder="Alamat Pemilik Kos">{{ old('kos_desc') }}</textarea>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <span class="px-1 h3 fw-bold">Detail Alamat Kos</span>
            <div class="form-group flex-column">
                <label for="kos_address" class="col-sm-2 col-form-label">Alamat Kos *</label>
                <div class="col-sm-6">
                    <input type="text" name="kos_address" class="form-control" id="kos_address" placeholder="Alamat Kos" value="{{ old('kos_address') }}" required>
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
                        <option value="" selected disabled>Pilih Provinsi</option>
                    </select>
                </div>
                <div class="form-group d-flex flex-column col-6 col-sm-3">
                    <label for="kos_city" class="col-form-label">Kota *</label>
                    <select class="form-control" name="kos_city" id="kos_city" required>
                        <option value="" selected disabled>Pilih Kota</option>
                    </select>
                </div>
                <div class="form-group d-flex flex-column col-6 col-sm-3">
                    <label for="kos_district" class="col-form-label">Kecamatan *</label>
                    <select class="form-control" name="kos_district" id="kos_district" required>
                        <option value="" selected disabled>Pilih Kecamatan</option>
                    </select>
                </div>
                <div class="form-group d-flex flex-column col-6 col-sm-3">
                    <label for="kos_sub_district" class="col-form-label">Kelurahan *</label>
                    <select class="form-control" name="kos_sub_district" id="kos_sub_district" required>
                        <option value="" selected disabled>Pilih Kelurahan</option>
                    </select>
                </div>
            </div>
            <div class="flex-wrap d-flex form-group">
                <div class="form-group d-flex flex-column col-4">
                    <label for="kos_latitude" class="col-6col-form-label">Latitude *</label>
                    <div class="p-0 col-12">
                        <input type="text" name="kos_latitude" class="form-control" id="kos_latitude" value="{{ old('kos_latitude') }}" placeholder="Latitude">
                        @error('kos_latitude')
                            <div class="d-block text-red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group d-flex flex-column col-4">
                    <label for="kos_longitude" class="col-6col-form-label">Longtitude *</label>
                    <div class="p-0 col-12">
                        <input type="text" name="kos_longitude" class="form-control" id="kos_longitude" value="{{ old('kos_longitude') }}" placeholder="Longtitude">
                        @error('kos_longitude')
                            <div class="d-block text-red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <span class="px-1 h3 fw-bold">Biaya Kos</span>
            <span class="px-1 mt-3 h5 text-decoration-underline fw-bold">Tahunan</span>
            <div class="px-0 form-group d-flex flex-column col-12 col-sm-2 mx-sm-2">
                <label for="kos_yearly_rent" class="col-form-label">Sewa Kos Tahunan *</label>
                <div class="px-0 col-sm-12">
                    <input type="number" name="kos_yearly_rent" class="form-control" id="kos_yearly_rent" placeholder="Sewa Kos Tahunan" value="{{ old('kos_yearly_rent') }}" required>
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
                    <input type="number" name="kos_yearly_dp" class="form-control" id="kos_yearly_dp" placeholder="DP Kos Tahunan" value="{{ old('kos_yearly_dp') }}">
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
                    <input type="number" name="kos_yearly_charge" class="form-control" id="kos_yearly_charge" placeholder="Biaya Tambahan Penghuni Lebih Dari 1 Orang" value="{{ old('kos_yearly_charge') }}">
                    @error('kos_yearly_charge')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <span class="px-1 mt-3 h5 text-decoration-underline fw-bold">Bulanan (Kosongkan Bila Tidak Ada)</span>
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
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <span class="px-1 h3 fw-bold">Gambar Kos</span>
            <label for="kos_images" class="form-label">Tambah Gambar Kos</label>
            <input class="form-control" type="file" id="kos_images" name="kos_images[]" multiple accept="image/*" required/>
            @error('kos_images')
                <div class="d-block text-red">
                    {{ $message }}
                </div>
            @enderror
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
        $(document).ready(function() {
            $('input[name="exist_host"]').change(function() {
                if ($(this).val() == 'exist') {
                    $('.exist-host').show();
                    $('.exist-host select').prop('required', true);
                    $('.new-host').hide();
                    $('.new-host input[name=host_name]').prop('required', false);
                    $('.new-host input[name=host_phone]').prop('required', false);
                } else {
                    $('.exist-host').hide();
                    $('.exist-host select').val('').change();
                    $('.new-host').show();
                    $('.exist-host select').prop('required', false);
                    $('.new-host input[name=host_name]').prop('required', true);
                    $('.new-host input[name=host_phone]').prop('required', true);
                }
            });


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