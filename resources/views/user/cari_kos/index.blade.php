@extends('layouts.app',['title'=>'Cari Kos|'])

@section('content')  

<section class="grid grid-cols-1 px-3 py-2 lg:py-3 lg:pl-8 lg:pr-3 md:grid-cols-3 lg:grid-cols-8 gap-x-2 gap-y-3">
    <div class="hidden my-2 lg:flex lg:col-span-full" x-data={sort:false,college:false}>
        <div class="px-3 py-2 transition-all border rounded-lg cursor-pointer border-slate-500 group hover:bg-green-600" x-on:click="college=!college" :class="college?'bg-green-600':''">
            <span class="text-xl font-semibold text-neutral-900 group-hover:text-white":class="college?'text-white':''">Kampus : </span>
            <span class="text-xl font-semibold text-neutral-900 group-hover:text-white":class="college?'text-white':''">-</span>
        </div>
        <div class="flex ml-auto space-x-2">
            <div class="px-3 py-2 transition-all border rounded-lg cursor-pointer border-slate-500 group hover:bg-green-600">
                <i class="mx-1 text-lg transition select-none text-neutral-900 fa-solid fa-star group-hover:text-white"></i>
                <span class="text-lg font-semibold transition select-none text-neutral-900 group-hover:text-white">Rekomendasi</span>
            </div>
            <div class="relative">
                <div class="px-3 py-2 transition-all border rounded-lg cursor-pointer border-slate-500 group hover:bg-green-600" x-on:click="sort=!sort" :class="sort?'bg-green-600':''">
                    <i class="mx-1 text-lg transition select-none text-neutral-900 fa-solid fa-sort group-hover:text-white":class="sort?'text-white':''"></i>
                    <span class="text-lg font-semibold transition select-none text-neutral-900 group-hover:text-white ":class="sort?'text-white':''">Urutkan</span>
                </div>
                <ul class="absolute right-0 z-30 w-64 mt-1 list-none bg-white border border-gray-500 rounded shadow-lg top-full" x-show="sort" x-on:click.away="sort=false" x-transition>
                    <li class="border-b ">
                        <a href="" class="block w-full h-full px-3 py-2 font-semibold text-green-600 hover:bg-green-600 hover:text-white">Urutkan dari A-Z</a>
                    </li>
                    <li class="border-b ">
                        <a href="" class="block w-full h-full px-3 py-2 font-semibold text-green-600 hover:bg-green-600 hover:text-white">Urutkan dari Z-A</a>
                    </li>
                    <li class="border-b ">
                        <a href="" class="block w-full h-full px-3 py-2 font-semibold text-green-600 hover:bg-green-600 hover:text-white">Urutkan dari Harga Terendah</a>
                    </li>
                    <li class="border-b ">
                        <a href="" class="block w-full h-full px-3 py-2 font-semibold text-green-600 hover:bg-green-600 hover:text-white">Urutkan dari Harga Tertinggi</a>
                    </li>
                    <li class="border-b ">
                        <a href="" class="block w-full h-full px-3 py-2 font-semibold text-green-600 hover:bg-green-600 hover:text-white">Urutkan dari Jarak Terdekat</a>
                    </li>
                    <li class="">
                        <a href="" class="block w-full h-full px-3 py-2 font-semibold text-green-600 hover:bg-green-600 hover:text-white">Urutkan dari Jarak Terjauh</a>
                    </li>
                </ul>
            </div>
        </div>
        <x-college_cari_kos></x-college_cari_kos>
        
    </div>
    <div class="hidden lg:block lg:col-span-2">
        <x-filter_cari_kos></x-filter_cari_kos>
    </div>
    <div class="col-span-full lg:hidden" x-data={sort:false,filter:false,college:false}>
        <div class="flex justify-start mt-4 mb-2 sm:justify-end">
            <button class="p-1 transition border-r-2 border-green-500 hover:rounded bg-slate-50/0 group hover:bg-green-600">
                <i class="mx-1 text-lg text-green-600 transition fa-solid fa-star group-hover:text-white"></i>
                <span class="inline-block font-semibold text-slate-800 group-hover:text-white">Rekomendasi</span>
            </button>
            <button class="p-1 transition border-r-2 border-green-500 hover:rounded bg-slate-50/0 group hover:bg-green-600" x-on:click="college=!college">
                <i class="mx-1 text-lg text-green-600 transition fa-solid fa-building-columns group-hover:text-white"></i>
                <span class="inline-block font-semibold text-slate-800 group-hover:text-white">Kampus</span>
            </button>
            <button class="p-1 transition border-r-2 border-green-500 hover:rounded bg-slate-50/0 group hover:bg-green-600" x-on:click="sort=!sort">
                <i class="mx-1 text-lg text-green-600 transition fa-solid fa-sort group-hover:text-white"></i>
                <span class="inline-block font-semibold text-slate-800 group-hover:text-white">Urutkan</span>
            </button>
            <button class="p-1 transition border-green-500 hover:rounded bg-slate-50/0 group hover:bg-green-600" x-on:click="filter=!filter">
                <i class="mx-1 text-lg text-green-600 transition fa-solid fa-filter group-hover:text-white"></i>
                <span class="inline-block font-semibold text-slate-800 group-hover:text-white">Filter</span>
            </button>
        </div>
        <x-filter_cari_kos_mobile></x-filter_cari_kos_mobile>
        <x-sorting_cari_kos_mobile></x-sorting_cari_kos_mobile>
        <x-college_cari_kos_mobile></x-college_cari_kos_mobile>
    </div>
    <div class="grid lg:grid-cols-3 lg:col-span-6 lg:gap-2 col-span-full" style="display: none">
        <div class="col-span-1">
            <div class="flex p-3 rounded-md shadow flex-column">
                <a href="" target="_blank" class="relative w-full h-40 mb-2 bg-gray-300 animate-pulse">
                    <span class="absolute inline-block w-6 h-4 px-3 py-1 font-bold text-green-600 transition bg-gray-400 text-uppercase hover:bg-green-500 hover:text-white bottom-3 animate-pulse"></span>
                </a>
                <span class="inline-block w-3/4 h-8 mb-1 text-xl bg-gray-300 text-prussian text-capitalize fw-bold animate-pulse "></span>
                <div class="flex w-full h-6 p-0 mb-1 bg-gray-300 align-items-center animate-pulse"></div>
                <div class="flex w-1/2 h-4 p-0 mb-2 bg-gray-300 align-items-center animate-pulse"></div>
                <div class="flex w-1/2 h-4 p-0 mb-2 bg-gray-300 align-items-center animate-pulse"></div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="flex p-3 rounded-md shadow flex-column">
                <a href="" target="_blank" class="relative w-full h-40 mb-2 bg-gray-300 animate-pulse">
                    <span class="absolute inline-block w-6 h-4 px-3 py-1 font-bold text-green-600 transition bg-gray-400 text-uppercase hover:bg-green-500 hover:text-white bottom-3 animate-pulse"></span>
                </a>
                <span class="inline-block w-3/4 h-8 mb-1 text-xl bg-gray-300 text-prussian text-capitalize fw-bold animate-pulse "></span>
                <div class="flex w-full h-6 p-0 mb-1 bg-gray-300 align-items-center animate-pulse"></div>
                <div class="flex w-1/2 h-4 p-0 mb-2 bg-gray-300 align-items-center animate-pulse"></div>
                <div class="flex w-1/2 h-4 p-0 mb-2 bg-gray-300 align-items-center animate-pulse"></div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="flex p-3 rounded-md shadow flex-column">
                <a href="" target="_blank" class="relative w-full h-40 mb-2 bg-gray-300 animate-pulse">
                    <span class="absolute inline-block w-6 h-4 px-3 py-1 font-bold text-green-600 transition bg-gray-400 text-uppercase hover:bg-green-500 hover:text-white bottom-3 animate-pulse"></span>
                </a>
                <span class="inline-block w-3/4 h-8 mb-1 text-xl bg-gray-300 text-prussian text-capitalize fw-bold animate-pulse "></span>
                <div class="flex w-full h-6 p-0 mb-1 bg-gray-300 align-items-center animate-pulse"></div>
                <div class="flex w-1/2 h-4 p-0 mb-2 bg-gray-300 align-items-center animate-pulse"></div>
                <div class="flex w-1/2 h-4 p-0 mb-2 bg-gray-300 align-items-center animate-pulse"></div>
            </div>
        </div>
    </div>
    <div class="grid lg:grid-cols-3 lg:col-span-6 lg:gap-2 col-span-full">
        <div class="col-span-1">
            <div class="flex p-3 rounded-md shadow flex-column">
                <a href="{{ route('user.cari_kos.show',1) }}" target="_blank" class="relative w-full mb-2">
                    <img src="{{ asset("images/kos/1/1/kos_1_1.jpeg") }}" alt="Kos" class="object-cover object-center w-full max-h-40">
                    <span class="absolute inline-block px-3 py-1 font-bold text-green-600 transition bg-slate-50 text-uppercase hover:bg-green-500 hover:text-white bottom-3">Pria</span>
                </a>
                <span class="mb-1 text-xl text-prussian text-capitalize fw-bold">Kos Mayadana</span>
                <div class="flex p-0 mb-1 align-items-center">
                    <i class="text-sm text-gray-500 fa-solid fa-location-dot"></i>
                    <span class="ml-1 text-sm text-gray-500">1 Km</span>
                </div>
                <span class="mb-2 text-sm text-gray-500 d-inline-block">AC, Wifi, Kamar Mandi Dalam</span>
                <p class="text-xl font-semibold">Rp6.000.000<span class="text-gray-600">/tahun</span></p>
            </div>
        </div>
        <div class="col-span-1">
            <div class="flex p-3 rounded-md shadow flex-column">
                <a href="{{ route('user.cari_kos.show',1) }}" target="_blank" class="relative w-full mb-2">
                    <img src="{{ asset("images/kos/1/3/kos_3_1.jpeg") }}" alt="Kos" class="object-cover object-center w-full max-h-40">
                    <span class="absolute inline-block px-3 py-1 font-bold text-green-600 transition bg-slate-50 text-uppercase hover:bg-green-500 hover:text-white bottom-3">Pria</span>
                </a>
                <span class="mb-1 text-xl text-prussian text-capitalize fw-bold">Kos Mayadana</span>
                <div class="flex p-0 mb-1 align-items-center">
                    <i class="text-sm text-gray-500 fa-solid fa-location-dot"></i>
                    <span class="ml-1 text-sm text-gray-500">1 Km</span>
                </div>
                <span class="mb-2 text-sm text-gray-500 d-inline-block">AC, Wifi, Kamar Mandi Dalam</span>
                <p class="text-xl font-semibold">Rp6.000.000<span class="text-gray-600">/tahun</span></p>
            </div>
        </div>
        <div class="col-span-1">
            <div class="flex p-3 rounded-md shadow flex-column">
                <a href="{{ route('user.cari_kos.show',1) }}" target="_blank" class="relative w-full mb-2">
                    <img src="{{ asset("images/kos/1/1/kos_1_1.jpeg") }}" alt="Kos" class="object-cover object-center w-full max-h-40">
                    <span class="absolute inline-block px-3 py-1 font-bold text-green-600 transition bg-slate-50 text-uppercase hover:bg-green-500 hover:text-white bottom-3">Pria</span>
                </a>
                <span class="mb-1 text-xl text-prussian text-capitalize fw-bold">Kos Mayadana</span>
                <div class="flex p-0 mb-1 align-items-center">
                    <i class="text-sm text-gray-500 fa-solid fa-location-dot"></i>
                    <span class="ml-1 text-sm text-gray-500">1 Km</span>
                </div>
                <span class="mb-2 text-sm text-gray-500 d-inline-block">AC, Wifi, Kamar Mandi Dalam</span>
                <p class="text-xl font-semibold">Rp6.000.000<span class="text-gray-600">/tahun</span></p>
            </div>
        </div>
        <div class="col-span-1">
            <div class="flex p-3 rounded-md shadow flex-column">
                <a href="{{ route('user.cari_kos.show',1) }}" target="_blank" class="relative w-full mb-2">
                    <img src="{{ asset("images/kos/1/1/kos_1_1.jpeg") }}" alt="Kos" class="object-cover object-center w-full max-h-40">
                    <span class="absolute inline-block px-3 py-1 font-bold text-green-600 transition bg-slate-50 text-uppercase hover:bg-green-500 hover:text-white bottom-3">Pria</span>
                </a>
                <span class="mb-1 text-xl text-prussian text-capitalize fw-bold">Kos Mayadana</span>
                <div class="flex p-0 mb-1 align-items-center">
                    <i class="text-sm text-gray-500 fa-solid fa-location-dot"></i>
                    <span class="ml-1 text-sm text-gray-500">1 Km</span>
                </div>
                <span class="mb-2 text-sm text-gray-500 d-inline-block">AC, Wifi, Kamar Mandi Dalam</span>
                <p class="text-xl font-semibold">Rp6.000.000<span class="text-gray-600">/tahun</span></p>
            </div>
        </div>
    </div>
</section>

@endsection