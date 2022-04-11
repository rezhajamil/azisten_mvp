@extends('layouts.dashboard')

@section('content')
    
@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
<div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Form Edit Data Kos</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('admin.kos.update',$kos->id) }}" method="post">
    <div class="card-body">
        @csrf
        @method('PUT')
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
                            <option value="{{ $host->id }}" {{ old('host_id',$host->id)==$host->id?'selected':'' }}>{{ $host->name }}</option>
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
                    <input type="text" name="kos_name" class="capitalize form-control" id="kos_name" placeholder="Nama Kos" value="{{ old('kos_name',$kos->name) }}" required>
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
                        <option value="{{ $type->id }}" {{ old('kos_type',$kos->type)==$type->id ? 'selected':'' }}>{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label for="kos_facility" class="col-sm-2 col-form-label">Fasilitas Kos *</label>
                @foreach ($facilities as $facility)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="facility-{{ $facility->name }}" value="{{ $facility->id }}" name="kos_facility[]" {{is_array(old('kos_facility',explode(',',$kos->facility))) && in_array($facility->id,old('kos_facility',explode(',',$kos->facility)))?'checked':'' }}>
                        <label class="form-check-label" for="facility-{{ $facility->name }}">{{ $facility->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group row flex-column">
                <label for="kos_category" class="col-sm-2 col-form-label">Kategori Kos *</label>
                <select class="form-control col-3" name="kos_category" required>
                    <option value="" selected disabled>Pilih Kategori Kos</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id==old('kos_category',$kos->category)?'selected':'' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row flex-column">
                <label for="kos_desc" class="col-sm-2 col-form-label">Deskripsi Kos</label>
                <div class="col-sm-6">
                    <textarea name="kos_desc" class="form-control" id="kos_desc" placeholder="Alamat Pemilik Kos">{{ old('kos_desc',$kos->desc) }}</textarea>
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
        });
    </script>
@endsection
