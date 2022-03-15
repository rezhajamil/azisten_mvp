@extends('layouts.app',['title'=>'Pesan Air Galon|'])

@section('content')
<div class="p-2 cari-kos" x-data={queue:false}>
    <div class="p-3 cari-kos-wrapper p-sm-5">
        <div class="cari-kos-title">
            Isi Formulir untuk Pemesanan Air Galon
        </div>
        @if (session('success'))
            <div class="flash-data d-none" data-flashdata="{{ session('success') }}"></div>
            <script>
                var wa=document.querySelector(".flash-data").getAttribute("data-flashdata");
                Swal.fire({
                    title: 'Terimakasih AINSTEIN',
                    text: "Tolong Kirim Pesan Berikut Agar Permintaannya Diproses Ya",
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonText: 'Kirim Pesan'
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
                    <input type="text" class="focus:outline-green-600 w-[90%] px-1 border-[1px] py-2 capitalize rounded-sm  border-slate-400 focus-visible:border-green-600 focus:rounded-sm @error('name')is-invalid @enderror" name="name" placeholder="Nama Anda" value="{{ old('name') }}">
                    <div class="invalid-feedback">
                        Masukkan Nama Anda
                    </div>
                </div>
                <div class="flex flex-col ">
                    <label class="text-sm text-gray-500">WA</label>
                    <input type="text" class="focus:outline-green-600 w-[90%] px-1 border-[1px] py-2 rounded-sm  border-slate-400 focus-visible:border-green-600 focus:rounded-sm @error('phone')is-invalid @enderror" name="phone" pattern="\d*" minlength="11" maxlength="13" placeholder="081234567890" value="{{ old('phone') }}">
                    <div class="invalid-feedback">
                        Masukkan nomor WA (11 s/d 13 angka)
                    </div>
                </div>
            </div>
            {{-- <div class="cari-kos-inputfield">
            </div> --}}
            <div class="cari-kos-inputfield">
                <label>Alamat</label>
                <input type="text" class="focus:outline-green-600 w-full px-1 border-[1px] py-2 rounded-sm  border-slate-400 focus-visible:border-green-600 focus:rounded-sm @error('address')is-invalid @enderror" name="address" value="{{ old('address') }}">
                <div class="invalid-feedback">
                    Masukkan Alamat Anda
                </div>
            </div>
            <div class="row">
                <div class="w-1/3 cari-kos-inputfield">
                    <label>Jumlah</label>
                    <input type="number" class="focus:outline-green-600 w-full px-1 border-[1px] py-2  rounded-sm border-slate-400 focus-visible:border-green-600 focus:rounded-sm @error('amount')is-invalid @enderror" name="amount">
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
                <input type="text" name="coupon" id="coupon" class="focus:outline-green-600 w-1/3 mb-3 border-[1px] px-1 py-2 uppercase rounded-sm border-slate-400 focus:focus-visible:border-green-600ocus:rounded-sm" maxlength="6">
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
        <div class="flex justify-center mt-5 mb-2">
            <a href="#" class="text-sm font-semibold text-green-600 underline" x-on:click="queue=!queue">Sudah Pesan? Cek Antrianmu Disini</a>
        </div>
    </div>
    <div class="absolute inset-0 flex items-center justify-center w-full h-full bg-neutral-800/60" x-show="queue">
        <div class="flex flex-col items-center justify-center px-4 py-3 bg-white rounded-lg" x-transition>
            <a href="#" type="button" class="ml-auto font-bold text-black" x-on:click="queue=false">X</a>
            <span class="mb-3 text-lg font-bold text-green-600">Cek Antrianmu</span>
            <form action="{{ route('user.pesan_galon.queue') }}" method="POST" class="form-queue">
                @method('POST')
                @csrf
                <input type="text" class="px-1 py-2 border-[1px] focus-visible:outline-green-500 " name="phone" placeholder="081234567890" required>
                <button type="submit" class="block w-full px-3 py-2 mt-3 font-bold text-white transition bg-green-600 rounded hover:bg-green-800">Cek</button>
            </form>
            <span class="hidden text-slate-500" id="phone">081234567890</span>
            <span class="hidden font-bold text-neutral-900" id="queue">Kamu Antrian Ke - </span>
            <button class="hidden w-full px-3 py-2 mt-3 mb-2 font-bold text-white transition bg-green-600 rounded hover:bg-green-800" id="btn-request-lokasi">Request Lokasi Driver</button>
        </div>
    </div>
</div>

<script>
    function toggleHidden(id) {
        let input=document.getElementById(id);
        input.classList.toggle('hidden');
    }
</script>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            var req_loc_msg="Halo AZISTEN\nSaya ingin request lokasi driver galon."
            $('.form-queue').on('submit',function () {
                $('.loading-animation').show();
                $.ajax({
                    type: "POST",
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function (response) {
                        $('.loading-animation').hide();
                        if (response.status == 200) {
                            $('.form-queue').addClass('hidden');
                            $('#phone').removeClass('hidden');
                            $('#queue').removeClass('hidden');
                            $('#phone').text(response.phone);
                            if (response.queue) {
                                $('#queue').text('Kamu Antrian Ke - '+response.queue);
                                $('#btn-request-lokasi').removeClass('hidden');
                                $('#btn-request-lokasi').click(function () {
                                    window.location.href = "https://wa.me/6285869205026?text="+encodeURI(req_loc_msg);
                                });
                            }else{
                                $('#queue').text('Maaf, antrianmu tidak ditemukan');
                            }
                        } else {
                            Swal.fire({
                                title: 'Gagal',
                                text: 'Gagal Cek Antrian',
                                icon: 'error',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            })
                        }
                    }
                });
                console.log($(this).serialize())

                event.preventDefault();
            })
        });
    </script>
@endsection
