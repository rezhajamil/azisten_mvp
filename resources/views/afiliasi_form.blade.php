<div class="modal fade afiliasi-form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="cari-kos-title mt-4">
                    Isi Formulir untuk Menjadi Afiliator AZISTEN
                </div>
                <button type="button" class="btn-close align-self-baseline" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if($errors->all())
                    <div class="alert alert-danger">Kolom Wajib Diisi</div>
                @endif
                <form class="cari-kos-form" action="{{ route('afiliasi.store') }}" method="post">
                    @csrf
                    <div class="cari-kos-inputfield">
                        <label>Nama</label>
                        <input type="text" class="input form-control @error('name')is-invalid @enderror" name="name" placeholder="Nama Anda">
                        <div class="invalid-feedback">
                            Masukkan Nama Anda
                        </div>
                    </div>
                    <div class="cari-kos-inputfield">
                        <label>Email</label>
                        <input type="email" class="input form-control @error('email')is-invalid @enderror" name="email" placeholder="Email Anda">
                        <div class="invalid-feedback">
                            Masukkan Email Anda
                        </div>
                    </div>
                    <div class="cari-kos-inputfield">
                        <label>WA</label>
                        <input type="text" class="input form-control @error('phone')is-invalid @enderror" name="phone" pattern="\d*" minlength="11" maxlength="12" placeholder="081234567890">
                        <div class="invalid-feedback">
                            Masukkan nomor WA (11 s/d 12 angka)
                        </div>
                    </div>
                    <div class="cari-kos-inputfield">
                        <label>Jenis Kelamin</label>
                        <div class="cari-kos-custom_select">
                            <select name="gender" class="form-select @error('gender')is-invalid @enderror">
                                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="cari-kos-inputfield">
                        <label>Alamat</label>
                        <input type="text" class="input form-control @error('address')is-invalid @enderror" name="address" placeholder="Alamat Anda">
                        <div class="invalid-feedback">
                            Masukkan Alamat Anda
                        </div>
                    </div>
                    <div class="cari-kos-inputfield mt-3">
                        <input type="submit" value="Daftar" class="btn cari-kos-btn active">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>