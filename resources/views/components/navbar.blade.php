<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container">
    <a href="/" class="navbar-brand me-5">
      <img src="{{ asset("images/logo_azisten.png") }}" alt="Logo Azisten" width="200" height="40" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler btn btn-green1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse mt-lg-3" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 me-auto d-flex justify-content-between">
        {{-- @foreach ($nav as $name=>$url)
          @if ($name=="Tentang Kami")
            <li class="nav-item dropdown">
                <a class="nav-link active " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                <ul class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('user.cari_kos.index') }}">Cari Kos</a></li>
                  <li><a class="dropdown-item" href="{{ route('user.pesan_galon.index') }}">Air Galon</a></li>
                  <li><a class="dropdown-item" href="{{ route('user.pesan_catering.index') }}">Catering</a></li>
                  <li><a class="dropdown-item" href="{{ route('user.pesan_alat_kos.index') }}">Peralatan Kos</a></li>
                </ul>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ $url }}">{{ $name }}</a>
            </li>
            @endforeach --}}
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/afiliasi">Afiliasi</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                <ul class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('user.cari_kos.index') }}">Cari Kos</a></li>
                  <li><a class="dropdown-item" href="{{ route('user.pesan_galon.index') }}">Air Galon</a></li>
                  <li><a class="dropdown-item" href="{{ route('user.pesan_catering.index') }}">Catering</a></li>
                  <li><a class="dropdown-item" href="{{ route('user.pesan_alat_kos.index') }}">Peralatan Kos</a></li>
                </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/about">Tentang Kami</a>
          </li>
      </ul>
    </div>
  </div>
</nav>
