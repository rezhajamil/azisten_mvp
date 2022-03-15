
  @extends('layouts.app',['footer'=>true])
  @section('content')
  <div class="px-0 my-3 container-lg">
    <div class="jumbotron d-flex rounded-0" style="background-image: url({{ asset("images/jumbotron.jpg") }});">
      <div class="container mt-auto text-white j-capt justify-content-end flex-column">
        <div class="col-lg-5 offset-lg-1">
          <p class="mb-2 display-3 fw-bold">Mau Cari Kosan ?</p>
          <p class="mb-3 text-justify h6 fw-normal">Cari kos kini bisa lebih hemat waktu,uang,<br class="d-sm-none"> dan tenaga dengan layanan kami.</p>
          <div class="col-12">
            <div class="p-2 mb-4 bg-white search rounded-pill pe-3 w-100 d-flex align-items-center pointer-event" onclick="location.href='/cari_kos'">
              <div class="dropdown me-1">
                <button class="btn btn-green1 btn-filter dropdown-toggle rounded-pill" type="button" id="btnSearch">
                  <span class="me-5">Cari Kos</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnSearch">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
              <form action="" method="post" class="p-0 border-0 form-control flex-grow-1" onclick="location.href='/cari_kos'">
                <input type="text" class="bg-white border-0 input-search w-100" placeholder="Pilih Kosanmu" disabled>
              </form>
              <span class="search-icon">
                <i class="bi bi-search "></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <section class="py-3 mt-3 kos-list mt-md-5">
    <div class="kos-carousel owl-carousel">
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos_old/1/1/kos_1_1.jpeg") }}" alt="kos_1" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos_old/1/2/kos_2_1.jpeg") }}" alt="kos_2" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos_old/1/3/kos_3_1.jpeg") }}" alt="kos_3" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos_old/1/5/kos_5_1.jpeg") }}" alt="kos_5" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos_old/1/6/kos_6_1.jpeg") }}" alt="kos_6" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos_old/1/7/kos_7_1.jpeg") }}" alt="kos_7" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos_old/1/8/kos_8_1.jpeg") }}" alt="kos_8" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos_old/1/9/kos_9_1.jpeg") }}" alt="kos_9" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos_old/1/10/kos_10_1.jpeg")}}" alt="kos_10" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos_old/1/12/kos_12_1.jpeg")}}" alt="kos_12" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos_old/1/13/kos_13_1.jpeg")}}" alt="kos_13" class="img-fluid rounded-3"></a></div>
    </div>
  </section> --}}

  <section class="my-2 layanan my-md-4">
    <div class="px-2 lg:px-5">
      <div class="mb-2 row layanan-head">
        <div class="col-lg-9">
          <p class="title h2 text-dark1 fw-bold">Layanan Azisten Lainnya</p>
        </div>
      </div>
      <div class="flex justify-evenly gap-x-6">
        <div class="w-1/3 md:w-1/4">
          <a href="/pesan_galon" class="flex h-full">
            <div class="flex px-2 py-3 transition duration-500 rounded-[4px] lg:py-3 lg:px-2 gap-x-1 md:rounded-xl lg:rounded-2xl hover:scale-110 align-items-center bg-green1 lg:p-4 w-fit">
              <div class="w-1/3 pr-2 layanan-icon">
                <img src="{{ asset("images/icons/gallon.png") }}" alt="air galon">
              </div>
              <span class="w-2/3 text-sm text-white lg:text-3xl fw-bold lg:text-nowrap">Galon Express</span>
            </div>
          </a>
        </div>
        <div class="w-1/3 md:w-1/4">
          <a href="/pesan_catering" class="flex h-full" x-on:click.prevent>
            <div class="relative flex px-2 py-3 transition duration-500 rounded-[4px] group lg:py-3 lg:px-2 gap-x-1 md:rounded-xl lg:rounded-2xl hover:scale-110 align-items-center bg-green1 lg:p-4 w-fit">
              <div class="w-1/3 pr-2 layanan-icon">
                <img src="{{ asset("images/icons/food-tray.png") }}" alt="catering">
              </div>
              <span class="w-2/3 text-sm text-white lg:text-3xl fw-bold lg:text-nowrap">Catering</span>
              <div class="absolute hidden px-3 py-1 bg-red-600 rounded-lg -top-2 right-2 md:block">
                <span class="text-sm font-bold text-white text-nowrap">Coming Soon</span>
              </div>
              <div class="absolute inset-0 flex items-center justify-center px-3 py-1 transition-all bg-red-600 rounded opacity-[0] md:hidden group-hover:opacity-100">
                <span class="text-sm font-bold text-white text-nowrap">Coming Soon</span>
              </div>
            </div>
          </a>
        </div>
        <div class="w-1/3 md:w-1/4">
          <a href="/pesan_alat_kos" class="flex h-full" x-on:click.prevent>
            <div class="relative flex px-2 py-3 transition duration-500 rounded-[4px] group lg:py-3 lg:px-2 gap-x-1 md:rounded-xl lg:rounded-2xl hover:scale-110 align-items-center bg-green1 lg:p-4 w-fit">
              <div class="w-1/3 pr-2 layanan-icon">
                <img src="{{ asset("images/icons/shopping-cart.png") }}" alt="alat kos">
              </div>
              <span class="w-2/3 text-sm text-white lg:text-3xl fw-bold lg:text-nowrap">Alat Kos</span>
              <div class="absolute hidden px-3 py-1 bg-red-600 rounded-lg -top-2 right-2 md:block">
                <span class="text-sm font-bold text-white text-nowrap">Coming Soon</span>
              </div>
              <div class="absolute inset-0 flex items-center justify-center px-3 py-1 transition-all bg-red-600 rounded opacity-[0] md:hidden group-hover:opacity-100">
                <span class="text-sm font-bold text-white text-nowrap">Coming Soon</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="py-3 mt-4 md:mt-5 cara-pesan">
    <div class="container-lg">
      <div class="row align-items-lg-center">
        <div class="col-lg-5 col-md-12 col-sm-12 py-lg-5">
          <span class="mb-3 title text-dark1 fw-bold h2 d-inline-block">Cara Memesan Layanan</span>
          <div class="p-2 mb-3 cara-pesan-step rounded-3 w-100">
            <span class="cara-pesan-num d-inline-flex rounded-circle fw-bold justify-content-center align-items-center">1</span>
            <span class="cara-pesan-text ms-3 fw-bold">Cari dan Pilih Layanan</span>
          </div>
          <div class="p-2 mb-3 cara-pesan-step rounded-3 w-100">
            <span class="cara-pesan-num d-inline-flex rounded-circle fw-bold justify-content-center align-items-center">2</span>
            <span class="cara-pesan-text ms-3 fw-bold">Isi Formulir</span>
          </div>
          <div class="p-2 mb-3 cara-pesan-step rounded-3 w-100">
            <span class="cara-pesan-num d-inline-flex rounded-circle fw-bold justify-content-center align-items-center">3</span>
            <span class="cara-pesan-text ms-3 fw-bold">Lakukan Pembayaran</span>
          </div>
          <div class="p-2 mb-3 cara-pesan-step rounded-3 w-100">
            <span class="cara-pesan-num d-inline-flex rounded-circle fw-bold justify-content-center align-items-center">4</span>
            <span class="cara-pesan-text ms-3 fw-bold">Tim Lakukan Pelayanan</span>
          </div>
        </div>
        <div class="text-center col-lg col-lg-6 col-md-12 col-sm-12 py-lg-5 offset-lg-1 d-none d-sm-block d-md-block d-lg-block">
          <img src="{{ asset("images/about-image-3.jpg") }}" alt="Logo Azisten" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section class="py-4 my-0 why" style="background-image: url({{ asset("images/why-bg.png") }});">
    <div class="mx-1 row justify-content-center">
      <span class="w-auto px-0 text-white h1 fw-bold d-inline-block">Kenapa harus</span>
      <span class="w-auto px-0 text-white h1 fw-bold d-inline-block ps-2">memilih Azisten?</span>
    </div>
    <div class="p-0 container-md">
      <div class="container mx-0 mt-3 row px-md-0">
        <div class="p-2 bg-black align-self-center col-5 col-lg-2 offset-lg-0 p-md-4 why-icon-contain">
          <div class="border-2 why-icon-contain border-green1 d-flex justify-content-center align-items-center">
            <i class="p-3 fas fa-medal why-icon text-green1"></i>
          </div>
        </div>
        <div class="col-7 col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="mt-2 text-green1 fw-bold text-uppercase text-start mt-lg-0">Terbaik</h4>
          <p class="text-white text-start">Kami merupakan jasa pencarian kos No.1 di Medan</p>
        </div>
        <div class="p-2 bg-black align-self-center col-5 col-lg-2 offset-lg-2 p-md-4 why-icon-contain">
          <div class="border-2 why-icon-contain border-green1 d-flex justify-content-center align-items-center">
            <i class="p-3 fas fa-thumbs-up why-icon text-green1"></i>
          </div>
        </div>
        <div class="col-7 col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="mt-2 text-green1 fw-bold text-uppercase text-start mt-lg-0">Terpercaya</h4>
          <p class="text-white text-start">Kami memberikan pelayanan terbaik untuk anda.</p>
        </div>
      </div>
      <div class="container mx-0 mt-0 row px-md-0 mt-lg-4">
        <div class="p-2 mt-3 bg-black align-self-center col-5 col-lg-2 offset-lg-0 p-md-4 why-icon-contain">
          <div class="border-2 why-icon-contain border-green1 d-flex justify-content-center align-items-center">
            <i class="p-3 fas fa-biking why-icon text-green1"></i>
          </div>
        </div>
        <div class="mt-3 col-7 col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="mt-2 text-green1 fw-bold text-uppercase text-start mt-lg-0">Ride Sharing</h4>
          <p class="text-white text-start">Kami bersedia menemani anda melihat kos pilihan anda.</p>
        </div>
        <div class="p-2 bg-black align-self-center col-5 col-lg-2 offset-lg-2 p-md-4 why-icon-contain">
          <div class="border-2 why-icon-contain border-green1 d-flex justify-content-center align-items-center">
            <i class="p-3 fas fa-mobile-alt why-icon text-green1"></i>
          </div>
        </div>
        <div class="col-7 col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="mt-2 text-green1 fw-bold text-uppercase text-start mt-lg-0">Integrasi Layanan</h4>
          <p class="text-white text-start">Kebutuhan mahasiswa dapat terpenuhi dengan berbagai fitur kami</p>
        </div>
      </div>
      <div class="container mx-0 row px-md-0 mt-lg-4">
        <div class="p-2 bg-black align-self-center col-5 col-lg-2 offset-lg-0 p-md-4 why-icon-contain">
          <div class="border-2 why-icon-contain border-green1 d-flex justify-content-center align-items-center">
            <i class="p-3 fas fa-money-bill-alt why-icon text-green1"></i>
          </div>
        </div>
        <div class="col-7 col-lg-3 justify-content-center d-flex flex-column pe-0">
          <h4 class="mt-2 text-green1 fw-bold text-uppercase text-start mt-lg-0">Ekonomis</h4>
          <p class="text-white text-start">Harga yang kami tawarkan terjangkau di kalangan mahasiswa.</p>
        </div>
        <div class="p-2 bg-black align-self-center col-5 col-lg-2 offset-lg-2 p-md-4 why-icon-contain">
          <div class="border-2 why-icon-contain border-green1 d-flex justify-content-center align-items-center">
            <i class="p-3 fas fa-user-tie why-icon text-green1"></i>
          </div>
        </div>
        <div class="col-7 col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="mt-2 text-green1 fw-bold text-uppercase text-start mt-lg-0">Profesional</h4>
          <p class="text-white text-start">Tim yang telah kami pilih sudah melalui uji kelayakan dari perusahaan kami.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-4 my-0 partner">
    <p class="mb-0 text-center text-dark1 fw-bolder title">Didukung Oleh</p>
    {{-- <p class="mb-5 text-center text-grey1 h4 fw-bolder subtitle">Big brands, small bussiness, new startup and inividuals</p> --}}
    <div id="carousel-partner" class="carousel slide" data-bs-slide="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active d-flex justify-content-center">
          <div class="mx-2 text-center col-3 col-md-2 partner-logo-wrapper">
            <a target="_blank" href="https://polmed.ac.id/ciptakan-inovasi-ditengah-covid19-mahasiswa-politeknik-negeri-medan-menciptakan-startup-azisten/">
              <img src="{{ asset("images/logo_polmed.png") }}" alt="Politeknik Negeri Medan" class="text-center partner-logo img-fluid mw-100">
            </a>
          </div>
          <div class="mx-2 text-center col-3 col-md-2 partner-logo-wrapper">
            <a target="_blank" href="https://1000startupdigital.id/startup/?s=&startup-city=medan&startup-sector=&startup-batch=#:~:text=E%2DBUSINESS-,Azisten,-adalah%20sebuah%20platform">
              <img src="{{ asset("images/logo_1000.png") }}" alt="Gerakan 1000 Startup Digital" class="text-center partner-logo img-fluid mw-100">
            </a>
          </div>
          <div class="mx-2 text-center col-3 col-md-2 partner-logo-wrapper">
            <a target="_blank" href="https://www.kominfo.go.id/content/detail/37174/siaran-pers-no-344hmkominfo092021-tentang-lewat-1000-startup-digital-kominfo-dorong-generasi-muda-buka-wawasan/0/siaran_pers">
              <img src="{{ asset("images/logo_kominfo.png") }}" alt="Kominfo" class="text-center partner-logo img-fluid mw-100">
            </a>
          </div>
        </div>
      </div>
      {{-- <div class="mt-3 row justify-content-center">
        <div class="col-4 partner-left d-flex justify-content-end">
          <button class="p-0 bg-transparent border-0 btn btn-green1" data-bs-target="#carousel-partner" data-bs-slide="prev">
            <i class="bi bi-arrow-left text-green1 h1"></i>
          </button>
        </div>
        <div class="col-4">
          <div class="mb-0 carousel-indicators">
            <button type="button" data-bs-target="#carousel-partner" data-bs-slide-to="0" class="mx-2 active bg-green1 rounded-circle" aria-current="true" aria-label="Slide 1"></button>
          </div>
        </div>
        <div class="col-4 partner-right d-flex justify-content-start">
          <button class="p-0 bg-transparent border-0 btn-green1" data-bs-target="#carousel-partner" data-bs-slide="next">
            <i class="bi bi-arrow-right text-green1 h1"></i>
          </button>
        </div>
      </div> --}}
    </div>
  </section>
  <x-footer></x-footer>
  @endsection