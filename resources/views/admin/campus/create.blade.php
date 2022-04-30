@extends('layouts.dashboard')
@section('content')
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
<div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Form Data Kampus</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('admin.campus.store') }}" method="post">
    <div class="card-body">
        @csrf
        <div class="form-group row">
            <span class="px-1 h3 fw-bold">Detail Alamat Kos</span>
            <div class="form-group flex-column">
                <label for="name" class="col-sm-2 col-form-label">Nama Kampus *</label>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Kampus" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group flex-column">
                <label for="slug" class="col-sm-2 col-form-label">Slug *</label>
                <div class="col-sm-6">
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug Kampus" value="{{ old('slug') }}" required>
                    @error('slug')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group d-flex flex-column col-6 col-sm-3">
                <label for="college_id" class="col-form-label">Perguruan Tinggi *</label>
                <select class="form-control" name="college_id" id="college_id" required>
                    <option value="" disabled>Pilih Perguruan Tinggi</option>
                    @foreach ($colleges as $college)
                        <option value="{{ $college->id }}">{{ $college->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group flex-column">
                <label for="address" class="col-sm-2 col-form-label">Alamat Kampus *</label>
                <div class="col-sm-6">
                    <input type="text" name="address" class="form-control" id="address" placeholder="Alamat Kampus" value="{{ old('address') }}" required>
                    @error('address')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="flex-wrap form-group d-flex">
                <div class="form-group d-flex flex-column col-6 col-sm-3">
                    <label for="province" class="col-form-label">Provinsi *</label>
                    <select class="form-control" name="province" id="province" required>
                        <option value="" disabled>Pilih Provinsi</option>
                        {{-- <option value="{{ $kos_address->province }}" selected>{{ $kos_address->province }}</option> --}}
                    </select>
                    @error('province')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group d-flex flex-column col-6 col-sm-3">
                    <label for="city" class="col-form-label">Kota *</label>
                    <select class="form-control" name="city" id="city" required>
                        <option value="" disabled>Pilih Kota</option>
                        {{-- <option value="{{ $kos_address->city }}" selected>{{ $kos_address->city }}</option> --}}
                    </select>
                    @error('city')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group d-flex flex-column col-6 col-sm-3">
                    <label for="district" class="col-form-label">Kecamatan *</label>
                    <select class="form-control" name="district" id="district" required>
                        <option value="" disabled>Pilih Kecamatan</option>
                        {{-- <option value="{{ $kos_address->district }}" selected>{{ $kos_address->district }}</option> --}}
                    </select>
                    @error('district')
                        <div class="d-block text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="flex-wrap d-flex form-group">
                <div class="form-group d-flex flex-column col-4">
                    <label for="latitude" class="col-6col-form-label">Latitude *</label>
                    <div class="p-0 col-12">
                        <input type="text" name="latitude" class="form-control" id="latitude" value="{{ old('latitude') }}" placeholder="Latitude">
                        @error('latitude')
                            <div class="d-block text-red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group d-flex flex-column col-4">
                    <label for="longitude" class="col-6col-form-label">Longitude *</label>
                    <div class="p-0 col-12">
                        <input type="text" name="longitude" class="form-control" id="longitude" value="{{ old('longitude') }}" placeholder="Longitude">
                        @error('longitude')
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
                    $('#province').append(`<option value="${data.name}" tag="${data.id}">${data.name}</option>`);
                });  
            });

            $('#province').change(function() {
                var province_id = $(this).find(':selected').attr('tag');
                $('#city').empty();
                $('#district').empty();
                $('#city').append(`<option value="" disabled selected>Pilih Kota</option>`);
                $('#district').append(`<option value="" disabled selected>Pilih Kecamatan</option>`);
                fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${province_id}.json`)
                .then(response => response.json())
                .then(function (cities) {
                    cities.forEach(data => {
                        $('#city').append(`<option value="${data.name}" tag="${data.id}">${data.name}</option>`);
                    });  
                });
            });

            $('#city').change(function() {
                var city_id = $(this).find(':selected').attr('tag');
                $('#district').empty();
                $('#district').append(`<option value="" disabled selected>Pilih Kecamatan</option>`);
                fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/districts/${city_id}.json`)
                .then(response => response.json())
                .then(function (districts) {
                    districts.forEach(data => {
                        $('#district').append(`<option value="${data.name}" tag="${data.id}">${data.name}</option>`);
                    });  
                });
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            $('#name').change(function(){
                fetch('/admin/campus/checkSlug?name='+$(this).val())
                .then(response => console.log(response.json()))
                .catch(error => console.log(error));
                // .then(data=>$('#slug').val(data.slug));
            });
        })
    </script>
@endsection