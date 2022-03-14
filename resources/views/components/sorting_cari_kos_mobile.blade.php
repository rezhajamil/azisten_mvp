<div class="fixed inset-0 z-20 w-screen h-full sort bg-black/40" x-show="sort" x-transition>
    <div class="absolute bottom-0 top-auto w-full pt-3 -translate-x-1/2 left-1/2 bg-slate-50 rounded-t-3xl" x-on:click.away="sort=false,bsc=false" x-show="sort" x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-full" x-transition:enter-end="opacity-100 transform -translate-y-0" >
        <ul class="">
            <li class="px-3 py-2 list-none border-b-[1px] border-b-slate-600/20 border-x-0"><a href="#" class="font-semibold text-green-500 sort_name_asc" x-on:click="sort=false">Urutkan dari A-Z</a></li>
            <li class="px-3 py-2 list-none border-b-[1px] border-b-slate-600/20 border-x-0"><a href="#" class="font-semibold text-green-500 sort_name_dsc" x-on:click="sort=false">Urutkan dari Z-A</a></li>
            <li class="px-3 py-2 list-none border-b-[1px] border-b-slate-600/20 border-x-0"><a href="#" class="font-semibold text-green-500 sort_price_asc" x-on:click="sort=false">Urutkan dari Harga Terendah</a></li>
            <li class="px-3 py-2 list-none border-b-[1px] border-b-slate-600/20 border-x-0"><a href="#" class="font-semibold text-green-500 sort_price_dsc" x-on:click="sort=false">Urutkan dari Harga Tertinggi</a></li>
            <li class="px-3 py-2 list-none border-b-[1px] border-b-slate-600/20 border-x-0"><a href="#" class="font-semibold text-green-500 sort_distance_asc" x-on:click="sort=false">Urutkan dari Jarak Terdekat</a></li>
            <li class="px-3 py-2 list-none border-b-[1px] border-b-slate-600/20 border-x-0"><a href="#" class="font-semibold text-green-500 sort_distance_dsc" x-on:click="sort=false">Urutkan dari Jarak Terjauh</a></li>
        </ul>
    </div>
</div>