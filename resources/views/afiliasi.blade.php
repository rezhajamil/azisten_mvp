@extends('layouts.app',['title'=>"Afiliasi|"])

@section('content')    
<div class="container-lg my-3">
  <div class="afiliasi d-flex" style="background-image: url({{ asset("images/afiliasi-1.jpg") }});">
    <div class="container text-white d-flex justify-content-center flex-column">
      <div class="col-lg-8 offset-lg-1">
        <p class="display-3 fw-bold mb-1">Program Afiliasi AZISTEN</p>
        <p class="h5 mb-3">Program AZISTEN dengan komisi sebesar 40%. Daftarkan diri Anda GRATIS sekarang dan dapatkan penghasilan pasif hingga jutaan rupiah!</p>
        {{-- <button class="btn btn-green1 rounded-3">Lihat Selengkapnya</button> --}}
      </div>
    </div>
  </div>
</div>

@if (session('success'))
    <div class="flash-data d-none" data-flashdata="{{ session('success') }}"></div>
    <script>
        var wa=document.querySelector(".flash-data").getAttribute("data-flashdata");
        Swal.fire({
            title: 'Terimakasih',
            text: "Permintaan Anda Telah Kami Terima",
            icon: 'success',
            showCancelButton: false,
            confirmButtonText: 'OK'
            }).then((result) => {
            if (result.isConfirmed) {
                window.open(wa,"_blank");
                // location.href="/afiliasi";
            }
        })
    </script>
@endif

<section class="afiliasi-step my-3 mt-5">
  <div class="container">
    <div class="row mb-3">
      <div class="col">
        <p class="text-black display-5 fw-bold ">5 Langkah Mudah Program Afiliasi AZISTEN</p>
      </div>
    </div>
    <div class="row">
      <aside class="col-12 col-md-6 col-lg-6">
        <img src="{{ asset("images/afiliasi-2.png") }}" alt="Afiliasi" class="img-fluid">
      </aside>
      <article class="col-12 col-md-6 col-lg-6 align-self-center">
        <p>
          <span class="afiliasi-step-num d-inline-flex rounded-circle bg-green1 fw-bold text-white justify-content-center align-items-center">1</span>
          <span class="cara-pesan-text ms-3 text-black fw-bold h5">Daftarkan Dirimu</span>
        </p>
        <p>
          <span class="afiliasi-step-num d-inline-flex rounded-circle bg-green1 fw-bold text-white justify-content-center align-items-center">2</span>
          <span class="cara-pesan-text ms-3 text-black fw-bold h5">Dapatkan Kode Referal</span>
        </p>
        <p>
          <span class="afiliasi-step-num d-inline-flex rounded-circle bg-green1 fw-bold text-white justify-content-center align-items-center">3</span>
          <span class="cara-pesan-text ms-3 text-black fw-bold h5">Mulai Promosikan AZISTEN</span>
        </p>
        <p>
          <span class="afiliasi-step-num d-inline-flex rounded-circle bg-green1 fw-bold text-white justify-content-center align-items-center">4</span>
          <span class="cara-pesan-text ms-3 text-black fw-bold h5">Konversi Pelanggan</span>
        </p>
        <p>
          <span class="afiliasi-step-num d-inline-flex rounded-circle bg-green1 fw-bold text-white justify-content-center align-items-center">5</span>
          <span class="cara-pesan-text ms-3 text-black fw-bold h5">Cairkan Komisi</span>
        </p>
        <div class="text-center text-sm-start">
          <button class="btn btn-green1 text-white px-4 fw-bold rounded-pill"  data-bs-toggle="modal" data-bs-target=".afiliasi-form">Mulai Afiliasi</button>
        </div>
      </article>
    </div>
  </div>
</section>
@include('afiliasi_form')
<x-footer></x-footer>
@endsection
