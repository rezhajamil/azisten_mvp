<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container">
    <a href="/" class="navbar-brand me-5">
      <img src="{{ asset("images/logo_azisten.png") }}" width="200" height="40" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler btn btn-green1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse mt-lg-3" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 me-auto d-flex justify-content-between">
          @foreach ($nav as $name=>$url)
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ $url }}">{{ $name }}</a>
            </li>
          @endforeach
      </ul>
    </div>
  </div>
</nav>
