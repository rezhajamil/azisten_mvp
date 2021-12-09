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
                <form class="cari-kos-form" action="/afiliasi" method="post">
                    <div class="cari-kos-inputfield">
                        <label>Nama</label>
                        <input type="text" class="input" name="name">
                    </div>
                    <div class="cari-kos-inputfield">
                        <label>Email</label>
                        <input type="email" class="input" name="email">
                    </div>
                    <div class="cari-kos-inputfield">
                        <label>WA</label>
                        <input type="number" class="input" name="whatsapp">
                    </div>
                    <div class="cari-kos-inputfield">
                        <label>Jenis Kelamin</label>
                        <div class="cari-kos-custom_select">
                            <select name="college">
                                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="cari-kos-inputfield">
                        <label>Alamat</label>
                        <input type="text" class="input" name="address">
                    </div>
                    <div class="cari-kos-inputfield mt-3">
                        <input type="submit" value="Daftar" class="btn cari-kos-btn active">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>