@extends('layouts.app',['title'=>'Pesan Air Galon|'])

@section('content')
<div class="p-2 cari-kos">
    <div class="p-3 cari-kos-wrapper p-sm-5">
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
        @if (session('coupon_fail'))
            <div class="alert alert-danger">{{ session('coupon_fail') }}</div>
        @endif
        @if($errors->all())
            <div class="alert alert-danger">Kolom Wajib Diisi</div>
        @endif
        <form class="cari-kos-form " action="{{ route('user.pesan_galon.store') }}" method="post">
            @csrf
            <div class="flex flex-row mb-3 gap-x-2">
                <div class="flex flex-col">
                    <label class="text-sm text-gray-500">Nama</label>
                    <input type="text" class="w-[90%] px-1 border-[1px] py-2 capitalize rounded-sm  border-slate-400 focus-visible:border-green-600 focus:rounded-sm @error('name')is-invalid @enderror" name="name" placeholder="Nama Anda" value="{{ old('name') }}">
                    <div class="invalid-feedback">
                        Masukkan Nama Anda
                    </div>
                </div>
                <div class="flex flex-col ">
                    <label class="text-sm text-gray-500">WA</label>
                    <input type="text" class="w-[90%] px-1 border-[1px] py-2 rounded-sm  border-slate-400 focus-visible:border-green-600 focus:rounded-sm @error('phone')is-invalid @enderror" name="phone" pattern="\d*" minlength="11" maxlength="13" placeholder="081234567890" value="{{ old('phone') }}">
                    <div class="invalid-feedback">
                        Masukkan nomor WA (11 s/d 13 angka)
                    </div>
                </div>
            </div>
            {{-- <div class="cari-kos-inputfield">
            </div> --}}
            <div class="cari-kos-inputfield">
                <label>Alamat</label>
                <input type="text" class="w-full px-1 border-[1px] py-2 rounded-sm  border-slate-400 focus-visible:border-green-600 focus:rounded-sm @error('address')is-invalid @enderror" name="address" value="{{ old('address') }}">
                <div class="invalid-feedback">
                    Masukkan Alamat Anda
                </div>
            </div>
            <div class="row">
                <div class="w-1/3 cari-kos-inputfield">
                    <label>Jumlah</label>
                    <input type="number" class="w-full px-1 border-[1px] py-2  rounded-sm border-slate-400 focus-visible:border-green-600 focus:rounded-sm @error('amount')is-invalid @enderror" name="amount">
                    <div class="invalid-feedback">
                        Masukkan Jumlah Pemesanan
                    </div>
                </div>
                <div class="w-2/3 cari-kos-inputfield flex-column">
                    <label class="m-sm-0">Jenis Air Galon</label>
                    <div class="cari-kos-custom_select">
                        <select name="type" class="focus-visible:border-green-600  @error('type')is-invalid @enderror" value="{{ old('type') }}">
                            <option value="" selected disabled>Pilih Jenis Air Galon</option>
                            @foreach ($galon_categories as $galon_category)
                                <option value="{{ $galon_category->id }}">{{ $galon_category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <p class="mb-2 italic font-semibold text-green-600 underline cursor-pointer w-fit" onclick="toggleHidden('voucher')">Punya kode voucher?</p>
            <div class="hidden mb-2" id="voucher">
                <label for="coupon" class="block text-sm text-gray-500">Kode Voucher</label>
                <input type="text" name="coupon" id="coupon" class="w-1/3 mb-3 uppercase rounded-sm border-slate-400 focus:focus-visible:border-green-600ocus:rounded-sm" maxlength="6">
            </div>
            <div class="mt-5 cari-kos-inputfield terms d-none">
                <div class="form-check">
                    <input type="checkbox" class="opacity-100 check-kebijakan form-check-input" onclick="toggleSubmit()">
                    <label class="m-0 w-100">Menyetujui <a href="/kebijakan" target="_blank">Kebijakan Layanan AZISTEN</a></label>
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <input type="submit" value="Kirim Pesanan" class="btn cari-kos-btn active">
            </div>
        </form>
        {{-- <div class="fixed inset-0 z-50 flex items-center justify-center w-full h-full px-4 overflow-y-auto bg-slate-500/70">
            <div class="overflow-hidden bg-white rounded-lg shadow">
                <div class="bg-green-700">
                    <span class="font-semibold text-white">Masukkan Kode Voucher</span>
                </div>
            </div>
        </div> --}}
    </div>
</div>

<script>
    function toggleHidden(id) {
        let input=document.getElementById(id);
        input.classList.toggle('hidden');
    }
</script>

@endsection
