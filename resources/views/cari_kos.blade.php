@extends('layouts.app',['title'=>'Cari Kos'])

@section('content')
<div class="cari-kos p-2">
    <div class="cari-kos-wrapper">
        <div class="cari-kos-title">
            Isi Formulir untuk Mulai Cari Kos Pilihanmu
        </div>
        @if($errors->all())
            <div class="alert alert-danger">Kolom Wajib Diisi</div>
        @endif
        <form class="cari-kos-form " action="{{ route('transaction.store') }}" method="post">
            @csrf
            <div class="cari-kos-inputfield">
                <label>Nama</label>
                <input type="text" class="input form-control @error('name')is-invalid @enderror" name="name">
            </div>
            <div class="cari-kos-inputfield">
                <label>WA</label>
                <input type="number" class="input form-control @error('whatsapp')is-invalid @enderror" name="whatsapp">
            </div>
            <div class="cari-kos-inputfield">
                <label>Perguruan Tinggi</label>
                <div class="cari-kos-custom_select">
                    <select name="college" class="@error('college')is-invalid @enderror">
                        <option value="" selected disabled>Pilih Perguruan Tinggi</option>
                        <option value="Universitas Sumatra Utara">Universitas Sumatra Utara</option>
                        <option value="Politeknik Negeri Medan">Politeknik Negeri Medan</option>
                    </select>
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <div class="col-12 col-sm-4">
                    <label>Fasilitas</label>
                </div>
                <div class="col-12 col-sm-8 d-flex flex-wrap justify-content-between">
                    <div class="col-6 flex-column">
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="facility[]" value="AC" class="form-check-input border-green1">
                            <label class="form-check-label">AC</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="facility[]" value="Kasur" class="form-check-input border-green1">
                            <label class="form-check-label">Kasur</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="facility[]" value="Meja" class="form-check-input border-green1">
                            <label class="form-check-label">Meja</label>
                        </div>
                    </div>
                    <div class="col-6 flex-column">
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="facility[]" value="Wifi" class="form-check-input border-green1">
                            <label class="form-check-label">Wifi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="facility[]" value="Kamar Mandi Dalam" class="form-check-input border-green1">
                            <label class="form-check-label">Kamar Mandi Dalam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="facility[]" value="Akses 24 Jam" class="form-check-input border-green1">
                            <label class="form-check-label">Akses 24 Jam</label>
                        </div>
                    </div>
                    <div class="col-12 my-1">
                        <a class="btn-add-facil bg-transparent border-0 btn-link" onclick="showAddFacil()">+ Fasilitas Lainnya</a>
                    </div>
                    <div class="col-12 other-facil-wrapper">
                        <textarea name="other-facil" id="other-facil" class="other-facil form-control" cols="30" rows="2"></textarea>
                    </div>
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <div class="col-4">
                    <label>Range Harga</label>
                    <div class="form-check form-switch">
                        <label for="switch-interval" class="payment-interval-label">Tahunan</label>
                        <input class="form-check-input" name="payment_interval" type="checkbox" role="switch" id="switch-interval" value="Tahun" checked onclick="changeSwitchValue()">
                    </div>
                </div>
                <div class="cari-kos-price-range col-8 my-3">
                    <div class="d-flex justify-content-around mb-3">
                        <div class="input-group">
                            <span class="input-group-text p-1">Rp.</span>
                            <input type="number" value="100" name="price_min" class="form-control mw-75" id="price-min" onblur="priceOne()">
                            <span class="input-group-text px-2 bg-transparent me-1">k</span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text p-1">Rp.</span>
                            <input type="number" value="5000" name="price_max" class="form-control mw-75 ps-1" id="price-max" onblur="priceTwo()">
                            <span class="input-group-text px-2 bg-transparent">k</span>
                        </div>
                    </div>
                    <div class="slider-container">
                        <div class="slider-track bg-green2 rounded-pill"></div>
                        <input type="range" min="100" max="5000" value="100" step="10" id="price-slider-min" class="price-slider" oninput="slideOne()">
                        <input type="range" min="100" max="5000" value="5000" step="10" id="price-slider-max" class="price-slider" oninput="slideTwo()">
                    </div>
                </div>
            </div>
            <div class="cari-kos-inputfield">
                <label>Tipe Kos</label>
                <div class="cari-kos-custom_select">
                    <select name="type" class="@error('type')is-invalid @enderror">
                        <option value="" selected disabled>Select</option>
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
@endsection
