@extends('layouts.app',['title'=>'Cari Kos|'])

@section('content')
<div class="cari-kos p-2">
    <div class="cari-kos-wrapper p-3 p-sm-5">
        <div class="cari-kos-title">
            Isi Formulir untuk Mulai Cari Kos Pilihanmu
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
                        location.href="/";
                    }
                })
            </script>
        @endif
        @if($errors->all())
            <div class="alert alert-danger">Kolom Wajib Diisi</div>
        @endif
        <form class="cari-kos-form " action="{{ route('user.cari_kos.store') }}" method="post">
            @csrf
            <div class="cari-kos-inputfield">
                <label>Nama</label>
                <input type="text" class="input form-control @error('name')is-invalid @enderror" name="name" placeholder="Nama Anda" value="{{ old('name') }}">
                <div class="invalid-feedback">
                    Masukkan Nama Anda
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <label>WA</label>
                <input type="text" class="input form-control @error('phone')is-invalid @enderror" name="phone" pattern="\d*" minlength="11" maxlength="13" placeholder="081234567890" value="{{ old('phone') }}">
                <div class="invalid-feedback">
                    Masukkan nomor WA (11 s/d 13 angka)
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <label>Kampus Anda</label>
                <div class="cari-kos-custom_select">
                    <select name="college" class="college-select form-select @error('college')is-invalid @enderror" onchange="toogleCollege()" value="{{ old('college') }}">
                        <option value="" selected disabled>Pilih Kampus</option>
                        <option value="Universitas Sumatra Utara">Universitas Sumatra Utara</option>
                        {{-- <option value="Universitas Negeri Medan">Universitas Negeri Medan</option> --}}
                        {{-- <option value="Universitas Islam Negeri Sumatra Utara">Universitas Islam Negeri Sumatra Utara</option> --}}
                        {{-- <option value="Politeknik Negeri Media Kreatif">Politeknik Negeri Media Kreatif</option> --}}
                        <option value="Politeknik Negeri Medan">Politeknik Negeri Medan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="other-college my-2 col-12">
                    <label>Nama Kampus</label>
                    <input type="text" name="other_college" class="input form-control" value="{{ old('other_college') }}">
                    <span><a href="#" class="text-danger fs-6 fw-light fst-italic text-decoration-underline" data-bs-toggle="modal" data-bs-target="#termModal">Syarat & Ketentuan Berlaku</a></span>
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <div class="col-12 col-sm-4">
                    <label>Kelompok Kos</label>
                </div>
                <div class="col-12 col-sm-8 d-flex flex-wrap justify-content-around">
                    <div class="col-6 p-1">
                        <input type="radio" class="btn-check" name="group" id="g-standard" value="Standard" autocomplete="off" onchange="toogleGroup()">
                        <label class="btn btn-outline-success" for="g-standard"><span class="fw-bold">Standard</span><br><small class="">100rb-800rb/bulan</small></label>
                    </div>
                    <div class="col-6 p-1">
                        <input type="radio" class="btn-check" name="group" id="g-elite" value="Elite" autocomplete="off" onchange="toogleGroup()" checked>
                        <label class="btn btn-outline-success" for="g-elite"><span class="fw-bold">Elite</span><br><small class="">900rb-2jt/bulan</small></label>
                    </div>
                    {{-- <div class="col-6 p-1">
                        <input type="radio" class="btn-check" name="group" id="g-other" value="Lainnya" autocomplete="off" onchange="toogleGroup()">
                        <label class="btn btn-outline-success" for="g-other"><span class="fw-bold">Lainnya</span><br></label>
                    </div> --}}
                </div>
            </div>
            <div class="cari-kos-inputfield facility ">
                <div class="col-12 col-sm-4">
                    <label>Fasilitas</label>
                </div>
                <div class="col-12 col-sm-8 d-flex flex-wrap justify-content-between">
                    <div class="col-6 d-flex flex-column justify-content-around">
                        <div class="form-check">
                            <input type="checkbox" name="facility[]" value="AC" class="form-check-input border-green1">
                            <label class="form-check-label">AC</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="facility[]" value="Kasur" class="form-check-input border-green1">
                            <label class="form-check-label">Kasur</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="facility[]" value="Meja" class="form-check-input border-green1">
                            <label class="form-check-label">Meja</label>
                        </div>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-around">
                        <div class="form-check">
                            <input type="checkbox" name="facility[]" value="Wifi" class="form-check-input border-green1">
                            <label class="form-check-label">Wifi</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="facility[]" value="Kamar Mandi Dalam" class="form-check-input border-green1">
                            <label class="form-check-label">Kamar Mandi Dalam</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="facility[]" value="Akses 24 Jam" class="form-check-input border-green1">
                            <label class="form-check-label">Akses 24 Jam</label>
                        </div>
                    </div>
                    <div class="col-12 my-1">
                        <a class="btn-add-facil bg-transparent border-0 btn-link" onclick="showAddFacil()">+ Fasilitas Lainnya</a>
                    </div>
                    <div class="col-12 other-facil-wrapper">
                        <textarea name="other_facil" id="other-facil" class="other-facil form-control" cols="30" rows="2"></textarea>
                    </div>
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <div class="col-sm-4 col-12">
                    <label>Range Harga</label>
                    <div class="form-check form-switch">
                        <label for="switch-interval" class="payment-interval-label">Tahunan</label>
                        <input class="form-check-input" name="payment_interval" type="checkbox" role="switch" id="switch-interval" value="Tahun" checked onclick="changeSwitchValue()">
                    </div>
                </div>
                <div class="cari-kos-price-range col-12 col-sm-8 my-3">
                    <div class="d-flex justify-content-around mb-3">
                        <div class="input-group">
                            <span class="input-group-text p-1">Rp.</span>
                            <input type="number" value="8000" name="price_min" class="form-control mw-75" id="price-min" onblur="priceOne()">
                            <span class="input-group-text px-2 bg-transparent me-1">k</span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text p-1">Rp.</span>
                            <input type="number" value="20000" name="price_max" class="form-control mw-75 ps-1" id="price-max" onblur="priceTwo()">
                            <span class="input-group-text px-2 bg-transparent">k</span>
                        </div>
                    </div>
                    <div class="slider-container">
                        <div class="slider-track bg-grey1 rounded-pill"></div>
                        <input type="range" min="8000" max="20000" value="8000" step="500" id="price-slider-min" class="price-slider" oninput="slideOne()">
                        <input type="range" min="8000" max="20000" value="20000" step="500" id="price-slider-max" class="price-slider" oninput="slideTwo()">
                    </div>
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <label>Tipe Kos</label>
                <div class="cari-kos-custom_select">
                    <select name="type" class="form-select @error('type')is-invalid @enderror">
                        <option value="" selected disabled>Pilih Tipe Kos</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                        <option value="Campuran">Campuran</option>
                    </select>
                </div>
            </div>
            <div class="cari-kos-inputfield terms mt-5 d-none">
                <div class="form-check">
                    <input type="checkbox" class="check-kebijakan form-check-input opacity-100" onclick="toogleSubmit()">
                    <label class="m-0 w-100">Menyetujui <a href="/kebijakan" target="_blank">Kebijakan Layanan AZISTEN</a></label>
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <input type="submit" value="Cari Kos" class="btn cari-kos-btn active">
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="termModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="termModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Syarat & Ketentuan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          Untuk pencarian di area kampus lainnya akan dikenakan biaya untuk layanan ride sharing
          <p class="mt-3 fst-italic"><small>Hubungi admin untuk info selengkapnya</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
