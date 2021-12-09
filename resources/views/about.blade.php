@extends('layouts.app',['title'=>'About'])
@section('content')
    
<section class="banner my-3 d-flex flex-column justify-content-center align-items-center py-5 wow fadeInDown" style="background-image: url({{ asset("images/banner-2.jpg") }});">
    <p class="h1 fw-bolder text-white text-center">Jasa Cari Kosan No.1</p>
    <p class="h6 text-white text-center">Azisten adalah penyedia jasa cari kos No.1 di Medan</p>
</section>

<section class="about-us my-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <p class="h4 text-dark1 fw-bold">Tentang Kami</p>
            </div>
        </div>
    </div>
    <div class="row banner mb-4 wow fadeInLeftBig" style="background-image: url({{ asset("images/about-image-5.jpg") }});"></div>
    <div class="container mb-5">
        <p class="text-grey1 h5 text-justify">Azisten adalah perusahaan dibidang jasa yang memberikan solusi mahasiswa dalam menangani kebersihan dan keamanan barang barang pribadi. Serta melakukan pencarian kosan bagi mereka yang berasal dari luar kota medan kesulitan mencari kosan yang sesuai dengan kebutuhan masing masing secara personal.</p>
    </div>
    <div class="our-focus">
        <div class="container">
            <div class="row">
                <p class="text-dark1 display-4 fw-bold text-center text-lg-start">3 Fokus Azisten dalam melakukan pelayanan</p>
            </div>
            <div class="row my-5 wow slideInLeft">
                <div class="why-icon-contain col-6 col-md-2 col-lg-2 offset-3 offset-lg-0 bg-black p-4 ">
                    <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center h-100">
                        <i class="fas fa-star why-icon text-green1"></i>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-9 ms-0 ms-lg-3">
                    <p class="text-dark1 fw-bold h4 mt-5 mt-lg-0">Kualitas Layanan Tinggi</p>
                    <p class="text-danger h5 text-justify">Azisten berusaha untuk mendorong pertumbuhan sosial dan ekonomi di Indonesia, dengan tujuan meningkatkan kehidupan seluruh masyarakat Indonesia. Dengan melatih para teknisi, membangun keterampilan mereka, dan memberi mereka pekerjaan, perusahaan dapat meningkatkan pendapatan dan standar hidup mereka. Karena pelatihan ketat mereka, teknisi kami dilengkapi dengan skillset yang sangat baik yang juga sangat menguntungkan pelanggan kami. Setiap kali pelanggan memesan layanan Seekmi, mereka menikmati ketenangan bahwa layanan akan selesai dengan kualitas terbaik, dengan teknisi yang cakap, dan dengan harga terjangkau.</p>
                </div>
            </div>
            <div class="row my-5 wow slideInRight">
                <div class="why-icon-contain col-6 col-md-2 col-lg-2 offset-3 offset-lg-0 bg-black p-4 ">
                    <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center h-100">
                        <i class="fas fa-lock why-icon text-green1"></i>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-9 ms-0 ms-lg-3">
                    <p class="text-dark1 fw-bold h4 mt-5 mt-lg-0">Keamanan Barang yang Terjamin</p>
                    <p class="text-danger h5 text-justify">Azisten berusaha untuk mendorong pertumbuhan sosial dan ekonomi di Indonesia, dengan tujuan meningkatkan kehidupan seluruh masyarakat Indonesia. Dengan melatih para teknisi, membangun keterampilan mereka, dan memberi mereka pekerjaan, perusahaan dapat meningkatkan pendapatan dan standar hidup mereka. Karena pelatihan ketat mereka, teknisi kami dilengkapi dengan skillset yang sangat baik yang juga sangat menguntungkan pelanggan kami. Setiap kali pelanggan memesan layanan Seekmi, mereka menikmati ketenangan bahwa layanan akan selesai dengan kualitas terbaik, dengan teknisi yang cakap, dan dengan harga terjangkau.</p>
                </div>
            </div>
            <div class="row my-5 wow slideInLeft">
                <div class="why-icon-contain col-6 col-md-2 col-lg-2 offset-3 offset-lg-0 bg-black p-4 ">
                    <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center h-100">
                        <i class="fas fa-thumbs-up why-icon text-green1"></i>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-9 ms-0 ms-lg-3">
                    <p class="text-dark1 fw-bold h4 mt-5 mt-lg-0">Proses Cepat, Nyaman & Terjangkau</p>
                    <p class="text-danger h5 text-justify">Seekmi berusaha untuk mendorong pertumbuhan sosial dan ekonomi di Indonesia, dengan tujuan meningkatkan kehidupan seluruh masyarakat Indonesia. Dengan melatih para teknisi, membangun keterampilan mereka, dan memberi mereka pekerjaan, perusahaan dapat meningkatkan pendapatan dan standar hidup mereka. Karena pelatihan ketat mereka, teknisi kami dilengkapi dengan skillset yang sangat baik yang juga sangat menguntungkan pelanggan kami. Setiap kali pelanggan memesan layanan Seekmi, mereka menikmati ketenangan bahwa layanan akan selesai dengan kualitas terbaik, dengan teknisi yang cakap, dan dengan harga terjangkau.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-team my-5" style="background-image: url({{ asset("images/our-team.jpg") }});">
    <div class="container py-5">
        <div class="row">
            <p class="text-white h6 text-center mb-3">OUR TEAM</p>
            <p class="text-white h4 text-center fw-bold mb-1">WE HAVE</p>
            <p class="text-white h4 text-center fw-bold"><span class="text-green1">Some Awesome </span>People</p>
        </div>
        <div class="row team-row mt-3 mt-lg-5 mx-0 justify-content-around flex-lg-nowrap container">
            <div class="team-person mt-3 mt-lg-0 col-12 col-md-3 me-lg-5 bg-white p-0">
                <div class="team-pic h-75 m-0 mb-3 d-flex justify-content-end align-items-center position-relative w-100" style="background-image: url({{ asset("images/teams/Bobby.jpg") }});">
                    {{-- <x-team_socmed></x-team_socmed> --}}
                </div>
                <p class="text-black fw-bold h3 text-center m-0">Bobby Ardian</p>
                <p class="text-grey2 h5 fw-bold text-center">Chief Executive Officer</p>
            </div>
            <div class="team-person mt-3 mt-lg-0 col-12 col-md-3 me-lg-5 bg-white p-0">
                <div class="team-pic h-75 m-0 mb-3 d-flex justify-content-end align-items-center position-relative" style="background-image: url({{ asset("images/teams/Pounna.jpg") }});">
                    {{-- <x-team_socmed></x-team_socmed> --}}
                </div>
                <p class="text-black fw-bold h3 text-center m-0">Pouna Rizky</p>
                <p class="text-grey2 h5 fw-bold text-center">Chief Financial Officer</p>
            </div>
            <div class="team-person mt-3 mt-lg-0 col-12 col-md-3 me-lg-5 bg-white p-0">
                <div class="team-pic h-75 m-0 mb-3 d-flex justify-content-end align-items-center position-relative" style="background-image: url({{ asset("images/teams/Russi.jpg") }});">
                    {{-- <x-team_socmed></x-team_socmed> --}}
                </div>
                <p class="text-black fw-bold h3 text-center m-0">Russi Hersiano</p>
                <p class="text-grey2 h5 fw-bold text-center">Chief Design Officer</p>
            </div>
            <div class="team-person mt-3 mt-lg-0 col-12 col-md-3 bg-white p-0">
                <div class="team-pic h-75 m-0 mb-3 d-flex justify-content-end align-items-center position-relative" style="background-image: url({{ asset("images/teams/Rezha.jpg") }});">
                    {{-- <x-team_socmed></x-team_socmed> --}}
                </div>
                <p class="text-black fw-bold h3 text-center m-0">Rezha Jamil</p>
                <p class="text-grey2 h5 fw-bold text-center">Chief Technology Officer</p>
            </div>
        </div>
    </div>
</section>
<x-footer></x-footer>
@endsection