@extends('layouts.app',['title'=>'Pesan Air Galon|'])

@section('content')
<x-navbar nav=$nav></x-navbar>
<div class="cari-kos p-2">
    <div class="cari-kos-wrapper p-3 p-sm-5">
        <div class="cari-kos-title">
            Isi Formulir untuk Pemesanan Air Galon
        </div>
        @if (session('success'))
            <div class="flash-data d-none" data-flashdata="{{ session('success') }}"></div>
            <script>
                var wa=document.querySelector(".flash-data").getAttribute("data-flashdata");
                Swal.fire({
                    title: 'Terimakasih',
                    text: "Pesanan Anda Telah Kami Terima",
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonText: 'OK'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.open(wa,"_blank");
                        location.href="/";
                    }
                })
            </script>
        @endif
        @if($errors->all())
            <div class="alert alert-danger">Kolom Wajib Diisi</div>
        @endif
        <form class="cari-kos-form " action="{{ route('user.pesan_galon.store') }}" method="post">
            @csrf
            <div class="cari-kos-inputfield">
                <label>Nama</label>
                <input type="text" class="input form-control @error('name')is-invalid @enderror" name="name" placeholder="Nama Anda" value="{{ old('name') }}">
                <div class="invalid-feedback">
                    Masukkan Nama Anda
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <label>WA</label>
                <input type="text" class="input form-control @error('phone')is-invalid @enderror" name="phone" pattern="\d*" minlength="11" maxlength="13" placeholder="081234567890" value="{{ old('phone') }}">
                <div class="invalid-feedback">
                    Masukkan nomor WA (11 s/d 13 angka)
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <label>Alamat</label>
                <input type="text" class="input form-control @error('address')is-invalid @enderror" name="address" value="{{ old('address') }}">
                <div class="invalid-feedback">
                    Masukkan Alamat Anda
                </div>
            </div>
            <div class="row">
                <div class="cari-kos-inputfield col-4">
                    <label>Jumlah</label>
                    <input type="number" class="input form-control @error('amount')is-invalid @enderror" name="amount">
                    <div class="invalid-feedback">
                        Masukkan Jumlah Pemesanan
                    </div>
                </div>
                <div class="cari-kos-inputfield col-8 flex-column">
                    <label class="m-sm-0">Jenis Air Galon</label>
                    <div class="cari-kos-custom_select">
                        <select name="type" class="form-select @error('type')is-invalid @enderror" value="{{ old('type') }}">
                            <option value="" selected disabled>Pilih Jenis Air Galon</option>
                            @foreach ($galon_categories as $galon_category)
                                <option value="{{ $galon_category->id }}">{{ $galon_category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="cari-kos-inputfield terms mt-5 d-none">
                <div class="form-check">
                    <input type="checkbox" class="check-kebijakan form-check-input opacity-100" onclick="toogleSubmit()">
                    <label class="m-0 w-100">Menyetujui <a href="/kebijakan" target="_blank">Kebijakan Layanan AZISTEN</a></label>
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <input type="submit" value="Kirim Pesanan" class="btn cari-kos-btn active">
            </div>
        </form>
    </div>
</div>

@endsection
