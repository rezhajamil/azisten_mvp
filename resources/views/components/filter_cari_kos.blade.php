<div class="flex flex-col w-full h-full pb-3 overflow-y-auto shadow-xl bg-white0">
    <div class="flex items-center justify-center px-3 py-2 mb-2 bg-slate-200">
        <span class="inline-block w-full text-2xl font-bold text-center">Filter</span>
    </div>
    <div class="flex flex-col px-3">
        <span class="mb-2 text-lg font-bold">Tipe Kos</span>
        <div class="grid grid-cols-3 gap-x-2" x-data="{pria:false,wanita:false,campuran:false}">
            <div class="box-border overflow-hidden border border-gray-500 rounded-xl" :class="{'bg-green-600':pria}">
                <input type="checkbox" class="hidden peer" name="type" id="g_pria" value="pria" x-model="pria">
                <label class="flex flex-col items-center justify-center p-2 font-semibold text-gray-600 peer-checked:text-white " for="g_pria">
                    <i class="mb-1 text-xl fa-solid fa-person w-fit"></i>
                    Pria
                </label>
            </div>
            <div class="box-border overflow-hidden border border-gray-500 rounded-xl" :class="{'bg-green-600':wanita}">
                <input type="checkbox" class="hidden peer" name="type" id="g_wanita" value="wanita" x-model="wanita">
                <label class="flex flex-col items-center justify-center p-2 font-semibold text-gray-600 peer-checked:text-white " for="g_wanita">
                    <i class="mb-1 text-xl fa-solid fa-person-dress w-fit"></i>
                    Wanita
                </label>
            </div>
            <div class="box-border overflow-hidden border border-gray-500 rounded-xl" :class="{'bg-green-600':campuran}">
                <input type="checkbox" class="hidden peer" name="type" id="g_campuran" value="campuran" x-model="campuran">
                <label class="flex flex-col items-center justify-center p-2 font-semibold text-gray-600 peer-checked:text-white " for="g_campuran">
                    <i class="mb-1 text-xl fa-solid fa-restroom w-fit"></i>
                    Campuran
                </label>
            </div>
        </div>
    </div>
    <hr class="m-3 opacity-30">
    <div class="flex flex-col px-3">
        <span class="mb-2 text-lg font-bold">Fasilitas Kos</span>
        <div class="grid grid-cols-3 gap-2">
            <label for="f_ac" class="flex items-center font-semibold">
                <input type="checkbox" name="facility" id="f_ac" class="mr-2 text-green-600 focus:ring-0 accent-green-600" value="AC">
                AC
            </label>
            <label for="f_wifi" class="flex items-center col-span-2 font-semibold">
                <input type="checkbox" name="facility" id="f_wifi" class="mr-2 text-green-600 focus:ring-0 accent-green-600" value="Wifi">
                Wifi
            </label>
            <label for="f_kasur" class="flex items-center font-semibold">
                <input type="checkbox" name="facility" id="f_kasur" class="mr-2 text-green-600 focus:ring-0 accent-green-600" value="Kasur">
                Kasur
            </label>
            <label for="f_kamar_mandi" class="flex items-center col-span-2 font-semibold">
                <input type="checkbox" name="facility" id="f_kamar_mandi" class="mr-2 text-green-600 focus:ring-0 accent-green-600" value="Kamar Mandi Dalam">
                Kamar Mandi Dalam
            </label>
            <label for="f_meja" class="flex items-center font-semibold">
                <input type="checkbox" name="facility" id="f_meja" class="mr-2 text-green-600 focus:ring-0 accent-green-600" value="Meja">
                Meja
            </label>
            <label for="f_akses" class="flex items-center col-span-2 font-semibold">
                <input type="checkbox" name="facility" id="f_akses" class="mr-2 text-green-600 focus:ring-0 accent-green-600" value="Akses 24 Jam">
                Akses 24 Jam
            </label>
        </div>
    </div>
    <hr class="m-3 opacity-30">
    <div class="flex flex-col px-3">
        <span class="mb-2 text-lg font-bold">Harga Kos</span>
        <div class="mb-3 d-flex justify-content-around">
            <div class="input-group">
                <span class="p-1 input-group-text">Rp.</span>
                <input type="number" value="0" name="price_min" class="form-control mw-75" id="price-min" onblur="priceOne('price-min','price-slider-min','price-slider-max')">
                <span class="px-2 bg-transparent input-group-text me-1">k</span>
            </div>
            <div class="input-group">
                <span class="p-1 input-group-text">Rp.</span>
                <input type="number" value="20000" name="price_max" class="form-control mw-75 ps-1" id="price-max" onblur="priceTwo('price-max','price-slider-min','price-slider-max')">
                <span class="px-2 bg-transparent input-group-text">k</span>
            </div>
        </div>
        <div class="slider-container">
            <div class="slider-track bg-grey1 rounded-pill"></div>
            <input type="range" min="0" max="20000" value="0" step="500" id="price-slider-min" class="price-slider" oninput="slideOne('price-min','price-slider-min','price-slider-max')">
            <input type="range" min="0" max="20000" value="20000" step="500" id="price-slider-max" class="price-slider" oninput="slideTwo('price-max','price-slider-min','price-slider-max')">
        </div>
    </div>
    {{-- <hr class="mx-3 my-4 opacity-30">
    <div class="flex flex-col px-3">
        <span class="mb-2 text-lg font-bold">Waktu Pembayaran</span>
        <div class="grid grid-cols-2 gap-x-2">
            <div class="overflow-hidden border border-gray-500 rounded-lg">
                <input type="radio" class="hidden peer" name="payment" id="p_bulanan" value="bulanan">
                <label class="flex flex-col items-center justify-center p-2 font-semibold text-gray-600 peer-checked:bg-green-600 peer-checked:text-white " for="p_bulanan" >
                    Bulanan
                </label>
            </div>
            <div class="overflow-hidden border border-gray-500 rounded-lg">
                <input type="radio" class="hidden peer" name="payment" id="p_tahunan" value="tahunan" checked>
                <label class="flex flex-col items-center justify-center p-2 font-semibold text-gray-600 peer-checked:bg-green-600 peer-checked:text-white "  for="p_tahunan">
                    Tahunan
                </label>
            </div>
        </div>
    </div> --}}
</div>


