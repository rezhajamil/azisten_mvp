@extends('layouts.app',['title'=>'Pesan Catering|'])

@section('content')
<div class="cari-kos p-2">
    <div class="cari-kos-wrapper p-3 p-sm-5">
        <div class="cari-kos-title">
            Isi Formulir untuk Pemesanan Catering
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
        <form class="cari-kos-form " action="{{ route('pesan_catering.store') }}" method="post">
            @csrf
            <div class="cari-kos-inputfield">
                <label>Nama</label>
                <input type="text" class="input form-control @error('name')is-invalid @enderror" name="name" placeholder="Nama Anda">
                <div class="invalid-feedback">
                    Masukkan Nama Anda
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <label>WA</label>
                <input type="text" class="input form-control @error('phone')is-invalid @enderror" name="phone" pattern="\d*" minlength="11" maxlength="12" placeholder="081234567890">
                <div class="invalid-feedback">
                    Masukkan nomor WA (11 s/d 12 angka)
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <label>Alamat</label>
                <input type="text" class="input form-control @error('address')is-invalid @enderror" name="address">
                <div class="invalid-feedback">
                    Masukkan Alamat Anda
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <label>Jenis Paket Catering</label>
                <div class="cari-kos-custom_select">
                    <select name="type" class="form-select @error('type')is-invalid @enderror">
                        <option value="" selected disabled>Pilih Paket Catering</option>
                        @foreach ($catering_categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <label>Durasi Catering</label>
                <div class="cari-kos-custom_select">
                    <select name="duration" class="form-select @error('duration')is-invalid @enderror">
                        <option value="" selected disabled>Pilih Durasi Catering</option>
                        @foreach ($catering_durations as $duration)
                        <option value="{{ $duration->id }}">{{ $duration->name." (".$duration->amount." porsi)" }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="cari-kos-inputfield terms mt-5 d-none">
                <div class="form-check">
                    <input type="checkbox" class="check-kebijakan form-check-input opacity-100" onclick="toogleSubmit()">
                    <label class="m-0 w-100">Menyetujui <a href="/kebijakan" target="_blank">Kebijakan Layanan AZISTEN</a></label>
                </div>
            </div>
            <div class="cari-kos-inputfield mt-4">
                <input type="submit" value="Kirim Pesanan" class="btn cari-kos-btn active">
            </div>
        </form>
    </div>
</div>

@endsection
