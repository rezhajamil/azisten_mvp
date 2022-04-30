@extends('layouts.app',['title'=>'Cari Kos|'])

@section('content')  


<section class="grid grid-cols-1 px-3 py-2 lg:py-3 lg:pl-8 lg:pr-3 md:grid-cols-3 lg:grid-cols-8 gap-x-2 gap-y-3">
    <div class="hidden my-2 lg:flex lg:col-span-full" x-data={sort:false,college:false}>
        <div class="px-3 py-2 transition-all border rounded-lg cursor-pointer border-slate-500 group hover:bg-green-600" x-on:click="college=!college" :class="college?'bg-green-600':''">
            <span class="text-xl font-semibold text-neutral-900 group-hover:text-white":class="college?'text-white':''">Kampus : </span>
            <span class="text-xl font-semibold text-neutral-900 group-hover:text-white college-name":class="college?'text-white':''">-</span>
        </div>
        <div class="flex ml-3 space-x-2">
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
                        <a href="#" class="block w-full h-full px-3 py-2 font-semibold text-green-600 hover:bg-green-600 hover:text-white sort_name_asc" x-on:click="sort=false">Urutkan dari A-Z</a>
                    </li>
                    <li class="border-b ">
                        <a href="#" class="block w-full h-full px-3 py-2 font-semibold text-green-600 hover:bg-green-600 hover:text-white sort_name_dsc" x-on:click="sort=false">Urutkan dari Z-A</a>
                    </li>
                    <li class="border-b ">
                        <a href="#" class="block w-full h-full px-3 py-2 font-semibold text-green-600 hover:bg-green-600 hover:text-white sort_price_asc" x-on:click="sort=false">Urutkan dari Harga Terendah</a>
                    </li>
                    <li class="border-b ">
                        <a href="#" class="block w-full h-full px-3 py-2 font-semibold text-green-600 hover:bg-green-600 hover:text-white sort_price_dsc" x-on:click="sort=false">Urutkan dari Harga Tertinggi</a>
                    </li>
                    <li class="border-b ">
                        <a href="#" class="block w-full h-full px-3 py-2 font-semibold text-green-600 hover:bg-green-600 hover:text-white sort_distance_asc" x-on:click="sort=false">Urutkan dari Jarak Terdekat</a>
                    </li>
                    <li class="">
                        <a href="#" class="block w-full h-full px-3 py-2 font-semibold text-green-600 hover:bg-green-600 hover:text-white sort_distance_dsc" x-on:click="sort=false">Urutkan dari Jarak Terjauh</a>
                    </li>
                </ul>
            </div>
        </div>
        <x-college_cari_kos :colleges="$colleges" :campuses="$campuses"></x-college_cari_kos>
        
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
            <button class="p-1 transition border-r-2 border-green-500 hover:rounded bg-slate-50/0 group hover:bg-green-600" x-on:click="sort=!sort,bsc=true">
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
        <x-college_cari_kos_mobile :colleges="$colleges" :campuses="$campuses"></x-college_cari_kos_mobile>
    </div>
    <div class="grid lg:grid-cols-3 lg:col-span-6 lg:gap-2 col-span-full kos-loading" style="display: none">
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
    <div class="grid lg:grid-cols-3 lg:col-span-6 lg:gap-2 col-span-full gap-y-2" id="kos-list">
        @foreach ($data as $data)
            @foreach ($images as $image)
                <div class="col-span-1 kos-item">
                    <a href="{{ route('user.cari_kos.show',$data->id) }}" target="_blank" rel="noopener noreferrer">
                        <div class="flex p-3 rounded-md shadow flex-column">
                            <div class="relative w-full mb-2">
                                <img src="@if($image->kos_id==$data->id) {{ Storage::disk('s3')->url($image->url) }} @endif" alt="Kos" class="object-cover object-center w-full max-h-40">
                                <span class="absolute inline-block px-3 py-1 font-bold text-green-600 transition bg-slate-50 text-uppercase hover:bg-green-500 hover:text-white kos-type bottom-3">{{$data->kosType->name}}</span>
                            </div>
                            <span class="mb-1 text-xl text-prussian text-capitalize fw-bold">{{$data->name}}</span>
                            <span class="hidden kos-college">Kampus USU</span>
                            <div class="flex p-0 mb-1 align-items-center">
                                <i class="text-sm text-gray-500 fa-solid fa-location-dot"></i>
                                <span class="ml-1 text-sm text-gray-500">@if($data->distance<1){{$data->distance*1000}} m @else {{$data->distance}} km @endif </span>
                            </div>
                            <span class="mb-2 text-sm text-gray-500 d-inline-block kos-facility">
                                @foreach (explode(",",$data->facility) as $data_facility)
                                    @foreach ($facilities as $facility)
                                        @if ($facility->id == $data_facility)
                                            {{$facility->name}},
                                        @endif
                                    @endforeach
                                @endforeach
                            </span>
                            <p class="text-xl font-semibold">Rp<span class="kos-price">{{number_format($data->kosYearlyRent->fee, 0, "", ".")}}</span><span class="text-gray-600">/tahun</span></p>
                        </div>
                    </a>
                </div>
            @endforeach
        @endforeach
    </div>
    <div class="flex justify-center my-3 col-span-full">
        <span class="text-sm font-bold text-green-600 sm:text-lg">Tidak menemukan kos yang sesuai? Request pencarian kos <a href="{{ route('user.cari_kos.create') }}" class="text-green-600 underline">disini</a></span>
    </div>
</section>

@endsection