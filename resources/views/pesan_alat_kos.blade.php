@extends('layouts.app',['title'=>'Pesan Peralatan Kos|'])

@section('content')
<div class="cari-kos p-2">
    <div class="cari-kos-wrapper p-3 p-sm-5">
        <div class="cari-kos-title">
            Isi Formulir untuk Pemesanan Peralatan Kos
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
        <form class="cari-kos-form " action="{{ route('user.pesan_alat_kos.store') }}" method="post">
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
            <div class="cari-kos-inputfield">
                <div class="col-12">
                    <label>Plih Peralatan</label>
                </div>
                <ul class="ks-cboxtags col-12 d-flex flex-wrap justify-content-around align-items-center px-0 py-2">
                    @foreach ($products as $product)
                        <li class="me-3 col-4 col-sm-3">
                            <input type="checkbox" id="ak_{{ $product->id }}" name="item[]" value="{{ $product->id}}">
                            <label for="ak_{{ $product->id }}" class="rounded-3 text-wrap">{{ $product->name }}</label>
                        </li>
                    @endforeach
                </ul>
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
