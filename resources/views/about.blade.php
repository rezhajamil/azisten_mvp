@extends('layouts.app',['title'=>'About|'])
@section('content')
<section class="py-5 my-3 banner d-flex flex-column justify-content-center align-items-center" style="background-image: url({{ asset("images/banner-2.jpg") }});">
    <p class="text-center text-white h1 fw-bolder">Jasa Cari Kosan No.1</p>
    <p class="text-center text-white h6">Azisten adalah penyedia jasa cari kos No.1 di Medan</p>
</section>

<section class="mt-5 about-us">
    <div class="container">
        <div class="mb-3 row">
            <div class="col">
                <p class="h4 text-dark1 fw-bold">Tentang Kami</p>
            </div>
        </div>
    </div>
    <div class="row banner" style="background-image: url({{ asset("images/about-image-5.jpg") }});"></div>
    
    <section class="mb-5 intro" style="background-image: url({{ asset("images/intro.jpg") }});">
    <div class="container-lg d-flex">
      <div class="my-5 row">
        <div class="col-lg-5 col-md-12 col-sm-12 py-lg-5">
          <p class="mb-3 text-center intro-title text-green2 h1 fw-bolder text-lg-start">APA ITU AZISTEN?</p>
          <p class="mb-3 text-justify intro-desc text-light h5">Azisten adalah sebuah platform yang menghubungkan antara mahasiswa dan pemilik 
kos. Dengan fitur yang kami miliki, mahasiswa dapat mencari kos yang sesuai dengan
preferensi mereka. Selain itu kami juga menyediakan beberapa fitur yang membantu 
mahasiswa dalam memenuhi kebutuhan lainnya</p>
          {{-- <button class="px-5 my-4 bg-white border-2 btn btn-outline-green2 btn-intro rounded-pill border-green2 d-none d-md-block d-lg-block">
            <a href="#" class="text-green2 fw-bold">View All</a>
          </button> --}}
        </div>
        <div class="overflow-hidden col-lg-6 col-md-12 col-sm-12 offset-0 offset-md-1 offset-lg-1 py-lg-3 rounded-3">
          <iframe src="https://www.youtube.com/embed/PQlOz09lH6A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>


<section class="our-focus d-none">
    <div class="container">
        <div class="row">
            <p class="text-center text-dark1 display-4 fw-bold text-lg-start text-capitalize">3 Fokus Azisten dalam melakukan pelayanan</p>
        </div>
        <div class="my-3 row my-md-5">
            <div class="p-4 bg-black why-icon-contain col-6 col-md-2 offset-3 offset-lg-0 ">
                <div class="py-3 border border-2 why-icon-contain border-green1 d-flex justify-content-center align-items-center">
                    <i class="fas fa-star why-icon text-green1"></i>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-9 align-self-center ms-0 ms-lg-3">
                <p class="mt-3 text-center text-dark1 fw-bold h1 text-sm-start mt-lg-0">Kualitas Layanan Terbaik</p>
            </div>
        </div>
        <div class="my-3 row my-md-5">
            <div class="p-4 bg-black why-icon-contain col-6 col-md-2 col-lg-2 offset-3 offset-lg-0 ">
                <div class="py-3 border border-2 why-icon-contain border-green1 d-flex justify-content-center align-items-center">
                    <i class="fas fa-lock why-icon text-green1"></i>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-9 align-self-center ms-0 ms-lg-3">
                <p class="mt-3 text-center text-dark1 fw-bold h1 text-sm-start mt-lg-0">Keamanan Barang yang Terjamin</p>
            </div>
        </div>
        <div class="my-3 row my-md-5">
            <div class="p-4 bg-black why-icon-contain col-6 col-md-2 col-lg-2 offset-3 offset-lg-0 ">
                <div class="py-3 border border-2 why-icon-contain border-green1 d-flex justify-content-center align-items-center">
                    <i class="fas fa-thumbs-up why-icon text-green1"></i>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-9 align-self-center ms-0 ms-lg-3">
                <p class="mt-3 text-center text-dark1 fw-bold h1 text-sm-start mt-lg-0">Proses Cepat, Nyaman & Terjangkau</p>
            </div>
        </div>
    </div>
</section>
</section>

<section class="mb-3 our-team" style="background-image: url({{ asset("images/our-team.jpg") }});">
    <div class="container py-5">
        <div class="row">
            <p class="mb-3 text-center text-white h6">OUR TEAM</p>
            <p class="mb-1 text-center text-white h4 fw-bold">WE HAVE</p>
            <p class="text-center text-white h4 fw-bold"><span class="text-green1">Some Awesome </span>People</p>
        </div>
        <div class="container mx-0 mt-3 row team-row mt-lg-5 justify-content-around flex-lg-wrap gy-2">
            <div class="p-0 mt-3 bg-white team-person mt-lg-0 col-12 col-md-3 mx-md-5 position-relative">
                <img src="{{ asset("images/teams/Bobby.jpg") }}" alt="" class="team-pic position-absolute h-75 w-100 cover">
                <x-team_socmed linkedin="https://www.linkedin.com/in/bobby-ardian-412119147"></x-team_socmed>
                <div class="bottom-0 mb-3 position-absolute w-100">
                    <p class="m-0 text-center text-black fw-bold h3">Bobby Ardian</p>
                    <p class="text-center text-grey2 h5 fw-bold">Chief Executive Officer</p>
                </div>
            </div>
            <div class="p-0 mt-3 bg-white team-person mt-lg-0 col-12 col-md-3 mx-md-5 position-relative">
                <img src="{{ asset("images/teams/Pounna.jpg") }}" alt="" class="team-pic position-absolute h-75 w-100 cover">
                <x-team_socmed linkedin="https://www.linkedin.com/in/pounna-rizky-yusra-ramadhan-1621ab1bb/"></x-team_socmed>
                <div class="bottom-0 mb-3 position-absolute w-100">
                    <p class="m-0 text-center text-black fw-bold h3">Pounna Rizky</p>
                    <p class="text-center text-grey2 h5 fw-bold">Chief Financial Officer</p>
                </div>
            </div>
            <div class="p-0 mt-3 bg-white team-person mt-lg-0 col-12 col-md-3 mx-md-5 position-relative">
                <img src="{{ asset("images/teams/Russi.jpg") }}" alt="" class="team-pic position-absolute h-75 w-100 cover">
                <x-team_socmed linkedin="https://www.linkedin.com/in/russi-hersiano-b2b20a186/"></x-team_socmed>
                <div class="bottom-0 mb-3 position-absolute w-100">
                    <p class="m-0 text-center text-black fw-bold h3">Russi Hersiano</p>
                    <p class="text-center text-grey2 h5 fw-bold">Chief Design Officer</p>
                </div>
            </div>
            <div class="container mx-0 row team-row mt-lg-5 justify-content-center flex-lg-wrap gy-2">
                <div class="p-0 mt-3 bg-white team-person mt-lg-0 col-12 col-md-3 mx-md-5 position-relative">
                    <img src="{{ asset("images/teams/Rezha.jpg") }}" alt="" class="team-pic position-absolute h-75 w-100 cover">
                    <x-team_socmed linkedin="https://www.linkedin.com/in/rezha-jamil/"></x-team_socmed>
                    <div class="bottom-0 mb-3 position-absolute w-100">
                        <p class="m-0 text-center text-black fw-bold h3">Rezha Jamil</p>
                        <p class="text-center text-grey2 h5 fw-bold">Chief Technology Officer</p>
                    </div>
                </div>
                <div class="p-0 mt-3 bg-white team-person mt-lg-0 col-12 col-md-3 mx-md-5 position-relative">
                    <img src="{{ asset("images/teams/Nisa.jpg") }}" alt="" class="team-pic position-absolute h-75 w-100 cover">
                    <x-team_socmed linkedin="https://www.linkedin.com/in/tazkiyatun-nisa-3b8647213"></x-team_socmed>
                    <div class="bottom-0 mb-3 position-absolute w-100">
                        <p class="m-0 text-center text-black fw-bold h3">Tazkiyatun Nisa</p>
                        <p class="text-center text-grey2 h5 fw-bold">Junior UI/UX Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<x-footer></x-footer>
@endsection