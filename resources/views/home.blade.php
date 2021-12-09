
  @extends('layouts.app',['footer'=>true])
  @section('content')
      
  <div class="container-lg my-3">
    <div class="jumbotron d-flex" style="background-image: url({{ asset("images/jumbotron.jpg") }});">
      <div class="container text-white j-capt mt-auto justify-content-end flex-column">
        <div class="col-lg-8 offset-lg-1">
          <p class="h1 mb-0">Mau Cari Kosan ?</p>
          <div class="col-8">
            <div class="search bg-white rounded-pill p-2 pe-3 mb-4 w-100 d-flex align-items-center pointer-event" onclick="location.href='/transaction'">
              <div class="dropdown me-3">
                <button class="btn btn-green1 btn-filter dropdown-toggle rounded-pill" type="button" id="btnSearch">
                  <span class="me-5">Cari Kos</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnSearch">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
              <form action="" method="post" class="form-control p-0 border-0 flex-grow-1" onclick="location.href='/transaction'">
                <input type="text" class="input-search w-100 border-0" placeholder="Tentukan Kosan Pilihanmu">
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

  <section class="intro my-4 mt-5" style="background-image: url({{ asset("images/intro.jpg") }});">
    <div class="container-lg d-flex">
      <div class="row my-5">
        <div class="col-lg-5 col-md-12 col-sm-12 py-lg-5">
          <p class="intro-title text-green2 h1 fw-bolder mb-3 text-center text-lg-start">APA ITU AZISTEN?</p>
          <p class="intro-desc text-light h5 d-none d-md-block d-lg-block">Azisten adalah perusahaan yang memberikan solusi dalam menangani masalah kebersihan dan keamanan barang barang pribadi anda, dan juga menyediakan fasilitas untuk anda yang kesulitan mencari kos sesuai kebutuhan.</p>
          <button class="btn btn-outline-green2 bg-white btn-intro rounded-pill px-5 border-green2 border-2 my-4 d-none d-md-block d-lg-block">
            <a href="#" class="text-green2 fw-bold">View All</a>
          </button>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 offset-0 offset-md-1 offset-lg-1 py-lg-3 rounded-3 overflow-hidden">
          <iframe src="https://www.youtube.com/embed/prlboWEZfzU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

  <section class="cara-pesan my-4 mt-4">
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

  <section class="why my-4 mb-0 py-4" style="background-image: url({{ asset("images/why-bg.png") }});">
    <div class="row justify-content-center">
      <span class="h1 text-green1 fw-bold d-inline-block w-auto px-0">Kenapa harus</span>
      <span class="h1 text-white fw-bold d-inline-block w-auto px-0 ps-2">memilih AZISTEN?</span>
    </div>
    <div class="container">
      <div class="row mt-3">
        <div class="why-icon-contain col-6 col-lg-2 bg-black p-4 offset-3 offset-lg-0">
          <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center">
            <i class="fas fa-lock why-icon text-green1 p-3"></i>
          </div>
        </div>
        <div class="col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="text-green1 fw-bold text-uppercase text-center text-lg-start mt-2 mt-lg-0">Keamanan</h4>
          <p class="text-white text-center text-lg-start">Kami memiliki CCTV dan juga penghuni rumah yang menjaga barang barang anda 24 jam.</p>
        </div>
        <div class="why-icon-contain col-6 col-lg-2 bg-black p-4 offset-3 offset-lg-2">
          <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center">
            <i class="fas fa-user-secret why-icon text-green1 p-3"></i>
          </div>
        </div>
        <div class="col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="text-green1 fw-bold text-uppercase text-center text-lg-start mt-2 mt-lg-0">Privasi</h4>
          <p class="text-white text-center text-lg-start">Privasi barang-barang anda kami jaga.</p>
        </div>
      </div>
      <div class="row mt-3 mt-lg-4">
        <div class="why-icon-contain col-6 col-lg-2 bg-black p-4 offset-3 offset-lg-0">
          <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center">
            <i class="fas fa-thumbs-up why-icon text-green1 p-3"></i>
          </div>
        </div>
        <div class="col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="text-green1 fw-bold text-uppercase text-center text-lg-start mt-2 mt-lg-0">Terbaik</h4>
          <p class="text-white text-center text-lg-start">Kami memberikan pelayanan terbaik untuk anda.</p>
        </div>
        <div class="why-icon-contain col-6 col-lg-2 bg-black p-4 offset-3 offset-lg-2">
          <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center">
            <i class="fas fa-money-bill-alt why-icon text-green1 p-3"></i>
          </div>
        </div>
        <div class="col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="text-green1 fw-bold text-uppercase text-center text-lg-start mt-2 mt-lg-0">Ekonomis</h4>
          <p class="text-white text-center text-lg-start">Harga yang kami tawarkan masih terjangkau untuk kalangan mahasiswa.</p>
        </div>
      </div>
      <div class="row mt-3 mt-lg-4">
        <div class="why-icon-contain col-6 col-lg-2 bg-black p-4 offset-3 offset-lg-0">
          <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center">
            <i class="fas fa-clock why-icon text-green1 p-3"></i>
          </div>
        </div>
        <div class="col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="text-green1 fw-bold text-uppercase text-center text-lg-start mt-2 mt-lg-0">Fleksibel</h4>
          <p class="text-white text-center text-lg-start">Waktu pengerjaan dapat ditentukan oleh anda.</p>
        </div>
        <div class="why-icon-contain col-6 col-lg-2 bg-black p-4 offset-3 offset-lg-2">
          <div class="why-icon-contain border border-2 border-green1 d-flex justify-content-center align-items-center">
            <i class="fas fa-user-tie why-icon text-green1 p-3"></i>
          </div>
        </div>
        <div class="col-lg-3 justify-content-center d-flex flex-column">
          <h4 class="text-green1 fw-bold text-uppercase text-center text-lg-start mt-2 mt-lg-0">Profesional</h4>
          <p class="text-white text-center text-lg-start">Tim yang telah kami pilih sudah melalui uji kelayakan dari perusahaan kami.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="partner my-0 py-4 pb-5">
    <p class="text-dark1 text-center fw-bolder title mb-0">Didukung Oleh</p>
    {{-- <p class="text-grey1 h4 text-center fw-bolder subtitle mb-5">Big brands, small bussiness, new startup and inividuals</p> --}}
    <div id="carousel-partner" class="carousel slide" data-bs-slide="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="col-12 text-center">
            <img src="{{ asset("images/logo_polmed.png") }}" alt="Politeknik Negeri Medan" class="partner-logo img-fluid text-center">
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