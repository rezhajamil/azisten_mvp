@extends('layouts.app',['title'=>'About|'])
@section('content')
    
<x-navbar nav=$nav></x-navbar>
<section class="banner my-3 d-flex flex-column justify-content-center align-items-center py-5 wow fadeInDown" style="background-image: url({{ asset("images/banner-2.jpg") }});">
    <p class="h1 fw-bolder text-white text-center">Jasa Cari Kosan No.1</p>
    <p class="h6 text-white text-center">Azisten adalah penyedia jasa cari kos No.1 di Medan</p>
</section>

<section class="about-us mt-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <p class="h4 text-dark1 fw-bold">Tentang Kami</p>
            </div>
        </div>
    </div>
    <div class="row banner wow fadeInLeftBig" style="background-image: url({{ asset("images/about-image-5.jpg") }});"></div>
    
    <section class="intro mb-5" style="background-image: url({{ asset("images/intro.jpg") }});">
    <div class="container-lg d-flex">
      <div class="row my-5">
        <div class="col-lg-5 col-md-12 col-sm-12 py-lg-5">
          <p class="intro-title text-green2 h1 fw-bolder mb-3 text-center text-lg-start">APA ITU AZISTEN?</p>
          <p class="intro-desc text-light h5 text-justify mb-3">Azisten adalah sebuah platform yang menghubungkan antara mahasiswa dan pemilik 
kos. Dengan fitur yang kami miliki, mahasiswa dapat mencari kos yang sesuai dengan
preferensi mereka. Selain itu kami juga menyediakan beberapa fitur yang membantu 
mahasiswa dalam memenuhi kebutuhan lainnya</p>
          {{-- <button class="btn btn-outline-green2 bg-white btn-intro rounded-pill px-5 border-green2 border-2 my-4 d-none d-md-block d-lg-block">
            <a href="#" class="text-green2 fw-bold">View All</a>
          </button> --}}
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 offset-0 offset-md-1 offset-lg-1 py-lg-3 rounded-3 overflow-hidden">
          <iframe src="https://www.youtube.com/embed/PQlOz09lH6A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>


<section class="our-focus d-none">
    <div class="container">
        <div class="row">
            <p class="text-dark1 display-4 fw-bold text-center text-lg-start text-capitalize">3 Fokus Azisten dalam melakukan pelayanan</p>
        </div>
        <div class="row my-3 my-md-5 wow slideInLeft">
            <div class="why-icon-contain col-6 col-md-2 offset-3 offset-lg-0 bg-black p-4 ">
                <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center py-3">
                    <i class="fas fa-star why-icon text-green1"></i>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-9 align-self-center ms-0 ms-lg-3">
                <p class="text-dark1 fw-bold h1 mt-3 text-center text-sm-start mt-lg-0">Kualitas Layanan Terbaik</p>
            </div>
        </div>
        <div class="row my-3 my-md-5 wow slideInRight">
            <div class="why-icon-contain col-6 col-md-2 col-lg-2 offset-3 offset-lg-0 bg-black p-4 ">
                <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center py-3">
                    <i class="fas fa-lock why-icon text-green1"></i>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-9 align-self-center ms-0 ms-lg-3">
                <p class="text-dark1 fw-bold h1 mt-3 text-center text-sm-start mt-lg-0">Keamanan Barang yang Terjamin</p>
            </div>
        </div>
        <div class="row my-3 my-md-5 wow slideInLeft">
            <div class="why-icon-contain col-6 col-md-2 col-lg-2 offset-3 offset-lg-0 bg-black p-4 ">
                <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center py-3">
                    <i class="fas fa-thumbs-up why-icon text-green1"></i>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-9 align-self-center ms-0 ms-lg-3">
                <p class="text-dark1 fw-bold h1 mt-3 text-center text-sm-start mt-lg-0">Proses Cepat, Nyaman & Terjangkau</p>
            </div>
        </div>
    </div>
</section>
</section>

<section class="our-team mb-3" style="background-image: url({{ asset("images/our-team.jpg") }});">
    <div class="container py-5">
        <div class="row">
            <p class="text-white h6 text-center mb-3">OUR TEAM</p>
            <p class="text-white h4 text-center fw-bold mb-1">WE HAVE</p>
            <p class="text-white h4 text-center fw-bold"><span class="text-green1">Some Awesome </span>People</p>
        </div>
        <div class="row team-row mt-3 mt-lg-5 mx-0 justify-content-around flex-lg-wrap gy-2 container">
            <div class="team-person mt-3 mt-lg-0 col-12 col-md-3 mx-md-5 bg-white p-0 position-relative">
                <img src="{{ asset("images/teams/Bobby.jpg") }}" alt="" class="team-pic position-absolute h-75 w-100 cover">
                <x-team_socmed linkedin="https://www.linkedin.com/in/bobby-ardian-412119147"></x-team_socmed>
                <div class="position-absolute bottom-0 w-100 mb-3">
                    <p class="text-black fw-bold h3 text-center m-0">Bobby Ardian</p>
                    <p class="text-grey2 h5 fw-bold text-center">Chief Executive Officer</p>
                </div>
            </div>
            <div class="team-person mt-3 mt-lg-0 col-12 col-md-3 mx-md-5 bg-white p-0 position-relative">
                <img src="{{ asset("images/teams/Pounna.jpg") }}" alt="" class="team-pic position-absolute h-75 w-100 cover">
                <x-team_socmed linkedin="https://www.linkedin.com/in/pounna-rizky-yusra-ramadhan-1621ab1bb/"></x-team_socmed>
                <div class="position-absolute bottom-0 w-100 mb-3">
                    <p class="text-black fw-bold h3 text-center m-0">Pounna Rizky</p>
                    <p class="text-grey2 h5 fw-bold text-center">Chief Financial Officer</p>
                </div>
            </div>
            <div class="team-person mt-3 mt-lg-0 col-12 col-md-3 mx-md-5 bg-white p-0 position-relative">
                <img src="{{ asset("images/teams/Russi.jpg") }}" alt="" class="team-pic position-absolute h-75 w-100 cover">
                <x-team_socmed linkedin="https://www.linkedin.com/in/russi-hersiano-b2b20a186/"></x-team_socmed>
                <div class="position-absolute bottom-0 w-100 mb-3">
                    <p class="text-black fw-bold h3 text-center m-0">Russi Hersiano</p>
                    <p class="text-grey2 h5 fw-bold text-center">Chief Design Officer</p>
                </div>
            </div>
            <div class="row team-row mt-lg-5 mx-0 justify-content-center flex-lg-wrap gy-2 container">
                <div class="team-person mt-3 mt-lg-0 col-12 col-md-3 mx-md-5 bg-white p-0 position-relative">
                    <img src="{{ asset("images/teams/Rezha.jpg") }}" alt="" class="team-pic position-absolute h-75 w-100 cover">
                    <x-team_socmed linkedin="https://www.linkedin.com/in/rezha-jamil/"></x-team_socmed>
                    <div class="position-absolute bottom-0 w-100 mb-3">
                        <p class="text-black fw-bold h3 text-center m-0">Rezha Jamil</p>
                        <p class="text-grey2 h5 fw-bold text-center">Chief Technology Officer</p>
                    </div>
                </div>
                <div class="team-person mt-3 mt-lg-0 col-12 col-md-3 mx-md-5 bg-white p-0 position-relative">
                    <img src="{{ asset("images/teams/Nisa.jpg") }}" alt="" class="team-pic position-absolute h-75 w-100 cover">
                    <x-team_socmed linkedin="https://www.linkedin.com/in/tazkiyatun-nisa-3b8647213"></x-team_socmed>
                    <div class="position-absolute bottom-0 w-100 mb-3">
                        <p class="text-black fw-bold h3 text-center m-0">Tazkiyatun Nisa</p>
                        <p class="text-grey2 h5 fw-bold text-center">Junior UI/UX Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<x-footer></x-footer>
@endsection