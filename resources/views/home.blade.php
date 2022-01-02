
  @extends('layouts.app',['footer'=>true])
  @section('content')
      
  <div class="container-lg px-0 my-3">
    <div class="jumbotron d-flex" style="background-image: url({{ asset("images/jumbotron.jpg") }});">
      <div class="container text-white j-capt mt-auto justify-content-end flex-column">
        <div class="col-lg-5 offset-lg-1">
          <p class="display-3 fw-bold mb-2">Mau Cari Kosan ?</p>
          <p class="h6 fw-normal mb-3 text-justify">Cari kos kini bisa lebih hemat waktu,uang,<br class="d-sm-none"> dan tenaga dengan layanan kami.</p>
          <div class="col-12">
            <div class="search bg-white rounded-pill p-2 pe-3 mb-4 w-100 d-flex align-items-center pointer-event" onclick="location.href='/cari_kos'">
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
              <form action="" method="post" class="form-control p-0 border-0 flex-grow-1" onclick="location.href='/cari_kos'">
                <input type="text" class="input-search w-100 border-0 bg-white" placeholder="Pilih Kosanmu" disabled>
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

  <section class="kos-list mt-3 mt-md-5 py-3">
    <div class="kos-carousel owl-carousel">
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/1/kos_1_1.jpeg") }}" alt="kos_1" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/2/kos_2_1.jpeg") }}" alt="kos_2" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/3/kos_3_1.jpeg") }}" alt="kos_3" class="img-fluid rounded-3"></a></div>
      {{-- <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/4/kos_4_1.jpeg") }}" alt="kos_4" class="img-fluid rounded-3"></a></div> --}}
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/5/kos_5_1.jpeg") }}" alt="kos_5" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/6/kos_6_1.jpeg") }}" alt="kos_6" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/7/kos_7_1.jpeg") }}" alt="kos_7" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/8/kos_8_1.jpeg") }}" alt="kos_8" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/9/kos_9_1.jpeg") }}" alt="kos_9" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/10/kos_10_1.jpeg")}}" alt="kos_10" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/12/kos_12_1.jpeg")}}" alt="kos_12" class="img-fluid rounded-3"></a></div>
      <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/13/kos_13_1.jpeg")}}" alt="kos_13" class="img-fluid rounded-3"></a></div>
      {{-- <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/14/kos_14_1.jpeg")}}" alt="kos_14" class="img-fluid rounded-3"></a></div> --}}
      {{-- <div class="kos-image rounded-3"><a href="/cari_kos" target="_blank"><img src="{{ asset("images/kos/1/15/kos_15_1.jpeg")}}" alt="kos_15" class="img-fluid rounded-3"></a></div> --}}
    </div>
  </section>

  <section class="layanan my-md-4 my-2">
    <div class="container">
      <div class="row layanan-head mb-2">
        <div class="col-lg-9">
          <p class="title h2 text-dark1 fw-bold">Layanan Azisten Lainnya</p>
        </div>
      </div>
      <div class="row layanan-row">
        <div class="col-4">
          <a href="/pesan_galon">
            <div class="layanan-card d-flex align-items-center bg-green1 p-lg-4 p-2">
              <div class="col-4 layanan-icon pe-2">
                <img src="{{ asset("images/icons/gallon.png") }}" alt="air galon" class="img-fluid">
              </div>
              <div class="col-8 layanan-name px-2 px-md-3">
                <span class="fw-bold text-white text-nowrap">Air Galon</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-4">
          <a href="/pesan_catering">
            <div class="layanan-card d-flex align-items-center bg-green1 p-lg-4 p-2">
              <div class="col-4 layanan-icon pe-2">
                <img src="{{ asset("images/icons/food-tray.png") }}" alt="catering makanan" class="img-fluid">
              </div>
              <div class="col-8 layanan-name px-2 px-md-3">
                <span class="fw-bold text-white text-nowrap">Catering</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-4">
          <a href="/pesan_alat_kos">
            <div class="layanan-card d-flex align-items-center bg-green1 p-lg-4 p-2">
              <div class="col-4 layanan-icon pe-2">
                <img src="{{ asset("images/icons/shopping-cart.png") }}" alt="belanja peralatan kos" class="img-fluid">
              </div>
              <div class="col-8 layanan-name px-2 px-md-3">
                <span class="fw-bold text-white text-nowrap ">Alat Kos</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="cara-pesan py-3 mt-5">
    <div class="container-lg">
      <div class="row align-items-lg-center">
        <div class="col-lg-5 col-md-12 col-sm-12 py-lg-5">
          <span class="title text-dark1 fw-bold h2 d-inline-block mb-3">Cara Memesan Layanan</span>
          <div class="cara-pesan-step rounded-3 p-2 w-100 mb-3">
            <span class="cara-pesan-num d-inline-flex rounded-circle fw-bold justify-content-center align-items-center">1</span>
            <span class="cara-pesan-text ms-3 fw-bold">Cari dan Pilih Layanan</span>
          </div>
          <div class="cara-pesan-step rounded-3 p-2 w-100 mb-3">
            <span class="cara-pesan-num d-inline-flex rounded-circle fw-bold justify-content-center align-items-center">2</span>
            <span class="cara-pesan-text ms-3 fw-bold">Isi Formulir</span>
          </div>
          <div class="cara-pesan-step rounded-3 p-2 w-100 mb-3">
            <span class="cara-pesan-num d-inline-flex rounded-circle fw-bold justify-content-center align-items-center">3</span>
            <span class="cara-pesan-text ms-3 fw-bold">Lakukan Pembayaran</span>
          </div>
          <div class="cara-pesan-step rounded-3 p-2 w-100 mb-3">
            <span class="cara-pesan-num d-inline-flex rounded-circle fw-bold justify-content-center align-items-center">4</span>
            <span class="cara-pesan-text ms-3 fw-bold">Tim Lakukan Pelayanan</span>
          </div>
        </div>
        <div class="col-lg col-lg-6 col-md-12 col-sm-12 py-lg-5 offset-lg-1 d-none d-sm-block d-md-block d-lg-block text-center">
          <img src="{{ asset("images/about-image-3.jpg") }}" alt="Logo Azisten" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section class="why my-0 py-4" style="background-image: url({{ asset("images/why-bg.png") }});">
    <div class="row justify-content-center mx-1">
      <span class="h1 text-white fw-bold d-inline-block w-auto px-0">Kenapa harus</span>
      <span class="h1 text-white fw-bold d-inline-block w-auto px-0 ps-2">memilih Azisten?</span>
    </div>
    <div class="container-md p-0">
      <div class="container row mt-3 mx-0 px-md-0">
        <div class="align-self-center bg-black col-5 col-lg-2 offset-lg-0 p-2 p-md-4 why-icon-contain">
          <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center">
            <i class="fas fa-medal why-icon text-green1 p-3"></i>
          </div>
        </div>
        <div class="col-7 col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="text-green1 fw-bold text-uppercase text-start mt-2 mt-lg-0">Terbaik</h4>
          <p class="text-white text-start">Kami merupakan jasa pencarian kos No.1 di Medan</p>
        </div>
        <div class="align-self-center bg-black col-5 col-lg-2 offset-lg-2  p-2 p-md-4 why-icon-contain">
          <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center">
            <i class="fas fa-thumbs-up why-icon text-green1 p-3"></i>
          </div>
        </div>
        <div class="col-7 col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="text-green1 fw-bold text-uppercase text-start mt-2 mt-lg-0">Terpercaya</h4>
          <p class="text-white text-start">Kami memberikan pelayanan terbaik untuk anda.</p>
        </div>
      </div>
      <div class="container row mt-0 mx-0 px-md-0 mt-lg-4">
        <div class="align-self-center bg-black col-5 col-lg-2 offset-lg-0 p-2 p-md-4 mt-3 why-icon-contain">
          <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center">
            <i class="fas fa-biking why-icon text-green1 p-3"></i>
          </div>
        </div>
        <div class="col-7 col-lg-3 mt-3 justify-content-center d-flex flex-column">
          <h4 class="text-green1 fw-bold text-uppercase text-start mt-2 mt-lg-0">Ride Sharing</h4>
          <p class="text-white text-start">Kami bersedia menemani anda melihat kos pilihan anda.</p>
        </div>
        <div class="align-self-center bg-black col-5 col-lg-2 offset-lg-2 p-2 p-md-4 why-icon-contain">
          <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center">
            <i class="fas fa-mobile-alt why-icon text-green1 p-3"></i>
          </div>
        </div>
        <div class="col-7 col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="text-green1 fw-bold text-uppercase text-start mt-2 mt-lg-0">Integrasi Layanan</h4>
          <p class="text-white text-start">Kebutuhan mahasiswa dapat terpenuhi dengan berbagai fitur kami</p>
        </div>
      </div>
      <div class="container row mx-0 px-md-0 mt-lg-4">
        <div class="align-self-center bg-black col-5 col-lg-2 offset-lg-0 p-2 p-md-4 why-icon-contain">
          <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center">
            <i class="fas fa-money-bill-alt why-icon text-green1 p-3"></i>
          </div>
        </div>
        <div class="col-7 col-lg-3 justify-content-center d-flex flex-column pe-0">
          <h4 class="text-green1 fw-bold text-uppercase text-start mt-2 mt-lg-0">Ekonomis</h4>
          <p class="text-white text-start">Harga yang kami tawarkan terjangkau di kalangan mahasiswa.</p>
        </div>
        <div class="align-self-center bg-black col-5 col-lg-2 offset-lg-2 p-2 p-md-4 why-icon-contain">
          <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center">
            <i class="fas fa-user-tie why-icon text-green1 p-3"></i>
          </div>
        </div>
        <div class="col-7 col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="text-green1 fw-bold text-uppercase text-start mt-2 mt-lg-0">Profesional</h4>
          <p class="text-white text-start">Tim yang telah kami pilih sudah melalui uji kelayakan dari perusahaan kami.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="partner my-0 py-4">
    <p class="text-dark1 text-center fw-bolder title mb-0">Didukung Oleh</p>
    {{-- <p class="text-grey1 h4 text-center fw-bolder subtitle mb-5">Big brands, small bussiness, new startup and inividuals</p> --}}
    <div id="carousel-partner" class="carousel slide" data-bs-slide="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active d-flex justify-content-center">
          <div class="col-3 col-md-2 text-center partner-logo-wrapper mx-2">
            <a target="_blank" href="https://polmed.ac.id/ciptakan-inovasi-ditengah-covid19-mahasiswa-politeknik-negeri-medan-menciptakan-startup-azisten/">
              <img src="{{ asset("images/logo_polmed.png") }}" alt="Politeknik Negeri Medan" class="partner-logo img-fluid text-center mw-100">
            </a>
          </div>
          <div class="col-3 col-md-2 text-center partner-logo-wrapper mx-2">
            <a target="_blank" href="https://1000startupdigital.id/startup/?s=&startup-city=medan&startup-sector=&startup-batch=#:~:text=E%2DBUSINESS-,Azisten,-adalah%20sebuah%20platform">
              <img src="{{ asset("images/logo_1000.png") }}" alt="Gerakan 1000 Startup Digital" class="partner-logo img-fluid text-center mw-100">
            </a>
          </div>
          <div class="col-3 col-md-2 text-center partner-logo-wrapper mx-2">
            <a target="_blank" href="https://www.kominfo.go.id/content/detail/37174/siaran-pers-no-344hmkominfo092021-tentang-lewat-1000-startup-digital-kominfo-dorong-generasi-muda-buka-wawasan/0/siaran_pers">
              <img src="{{ asset("images/logo_kominfo.png") }}" alt="Kominfo" class="partner-logo img-fluid text-center mw-100">
            </a>
          </div>
        </div>
      </div>
      {{-- <div class="row justify-content-center mt-3">
        <div class="col-4 partner-left d-flex justify-content-end">
          <button class="btn btn-green1 bg-transparent border-0 p-0" data-bs-target="#carousel-partner" data-bs-slide="prev">
            <i class="bi bi-arrow-left text-green1 h1"></i>
          </button>
        </div>
        <div class="col-4">
          <div class="carousel-indicators mb-0">
            <button type="button" data-bs-target="#carousel-partner" data-bs-slide-to="0" class="active bg-green1 rounded-circle mx-2" aria-current="true" aria-label="Slide 1"></button>
          </div>
        </div>
        <div class="col-4 partner-right d-flex justify-content-start">
          <button class="btn-green1 bg-transparent border-0 p-0" data-bs-target="#carousel-partner" data-bs-slide="next">
            <i class="bi bi-arrow-right text-green1 h1"></i>
          </button>
        </div>
      </div> --}}
    </div>
  </section>
  <x-footer></x-footer>
  @endsection