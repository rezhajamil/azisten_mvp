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
        {{-- <div class="col-span-1 kos-item">
            <a href="{{ route('user.cari_kos.show',1) }}" target="_blank" rel="noopener noreferrer">
                <div class="flex p-3 rounded-md shadow flex-column">
                    <div class="relative w-full mb-2">
                        <img src="{{ asset("images/kos/1/1/kos_1_1.jpeg") }}" alt="Kos" class="object-cover object-center w-full max-h-40">
                        <span class="absolute inline-block px-3 py-1 font-bold text-green-600 transition bg-slate-50 text-uppercase hover:bg-green-500 hover:text-white kos-type bottom-3">Pria</span>
                    </div>
                    <span class="mb-1 text-xl text-prussian text-capitalize fw-bold">Kos Mayadana</span>
                    <span class="hidden kos-college">Kampus USU</span>
                    <div class="flex p-0 mb-1 align-items-center">
                        <i class="text-sm text-gray-500 fa-solid fa-location-dot"></i>
                        <span class="ml-1 text-sm text-gray-500">1 Km</span>
                    </div>
                    <span class="mb-2 text-sm text-gray-500 d-inline-block kos-facility">AC, Wifi, Kamar Mandi Dalam</span>
                    <p class="text-xl font-semibold">Rp<span class="kos-price">6.000.000</span><span class="text-gray-600">/tahun</span></p>
                </div>
            </a>
        </div>
        <div class="col-span-1 kos-item">
            <a href="{{ route('user.cari_kos.show',1) }}" target="_blank" rel="noopener noreferrer">
                <div class="flex p-3 rounded-md shadow flex-column">
                    <div class="relative w-full mb-2">
                        <img src="{{ asset("images/kos/1/2/kos_2_1.jpeg") }}" alt="Kos" class="object-cover object-center w-full max-h-40">
                        <span class="absolute inline-block px-3 py-1 font-bold text-green-600 transition bg-slate-50 text-uppercase hover:bg-green-500 hover:text-white kos-type bottom-3">Wanita</span>
                    </div>
                    <span class="mb-1 text-xl text-prussian text-capitalize fw-bold">Kos Tentrem</span>
                    <span class="hidden kos-college" id="acs">Kampus POLMED</span>
                    <div class="flex p-0 mb-1 align-items-center">
                        <i class="text-sm text-gray-500 fa-solid fa-location-dot"></i>
                        <span class="ml-1 text-sm text-gray-500">2 Km</span>
                    </div>
                    <span class="mb-2 text-sm text-gray-500 d-inline-block kos-facility">Kamar Mandi Dalam</span>
                    <p class="text-xl font-semibold">Rp<span class="kos-price">12.000.000</span><span class="text-gray-600">/tahun</span></p>
                </div>
            </a>
        </div>
        <div class="col-span-1 kos-item">
            <a href="{{ route('user.cari_kos.show',1) }}" target="_blank" rel="noopener noreferrer">
                <div class="flex p-3 rounded-md shadow flex-column">
                    <div class="relative w-full mb-2">
                        <img src="{{ asset("images/kos/1/3/kos_3_1.jpeg") }}" alt="Kos" class="object-cover object-center w-full max-h-40">
                        <span class="absolute inline-block px-3 py-1 font-bold text-green-600 transition bg-slate-50 text-uppercase hover:bg-green-500 hover:text-white kos-type bottom-3">Campuran</span>
                    </div>
                    <span class="mb-1 text-xl text-prussian text-capitalize fw-bold">Kos Hijau</span>
                    <span class="hidden kos-college">Kampus UINSU 1</span>
                    <div class="flex p-0 mb-1 align-items-center">
                        <i class="text-sm text-gray-500 fa-solid fa-location-dot"></i>
                        <span class="ml-1 text-sm text-gray-500">0.5 Km</span>
                    </div>
                    <span class="mb-2 text-sm text-gray-500 d-inline-block kos-facility">AC, Kamar Mandi Dalam</span>
                    <p class="text-xl font-semibold">Rp<span class="kos-price">5.000.000</span><span class="text-gray-600">/tahun</span></p>
                </div>
            </a>
        </div> --}}
    </div>
    <div class="flex justify-center my-3 col-span-full">
        <span class="text-sm font-bold text-green-600 sm:text-lg">Tidak menemukan kos yang sesuai? Request pencarian kos <a href="{{ route('user.cari_kos.create') }}" class="text-green-600 underline">disini</a></span>
    </div>
</section>

@endsection

@section('scripts')
    
<script>
    var data_kos=[
      {
        "id":1,
        "name" : "Kos Pembangunan 1 A",
        "type" : "Wanita",
        "facility" : "AC,Kasur, Wifi, Lemari,Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg"],
        "distance" : 1.6,
        "yearly_fee" : 16500000,
        "desc":"Air PDAM\nListrik Token tiap kamar",
      }
      ,
      {
        "id":2,
        "name" : "Kos Pembangunan 2",
        "type" : "Wanita",
        "facility" : "Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg","4.jpeg"],
        "distance" : 2.4,
        "yearly_fee" : 16500000,
        "desc":"Air PDAM\nListrik Token tiap kamar",
      }
      ,
      {
        "id":3,
        "name" : "Kos Pembangunan 3 A",
        "type" : "Wanita",
        "facility" : "Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg","4.jpeg"],
        "distance" : 2.6,
        "yearly_fee" : 7800000,
        "monthly_fee" : 650000,
        "desc":"Air PDAM\nListrik Token tiap kamar",
      },
      {
        "id":4,
        "name" : "Kos Pembangunan 3 B",
        "type" : "Wanita",
        "facility" : "AC,Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg","4.jpeg"],
        "distance" : 2.6,
        "yearly_fee" : 8800000,
        "monthly_fee" : 750000,
        "desc":"Air PDAM\nListrik Token tiap kamar",
      },
      {
        "id":5,
        "name" : "Kos Pembangunan 1 B",
        "type" : "Wanita",
        "facility" : "Kasur, Wifi, Lemari,Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg","4.jpeg"],
        "distance" : 1.6,
        "yearly_fee" : 9600000,
        "desc":"Listrik & Air per Bulan +- Rp.200.000",
      },
      {
        "id":6,
        "name" : "Kos Sipirok 1 A",
        "type" : "Pria",
        "facility" : "Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg"],
        "distance" : 1,
        "yearly_fee" : 6500000,
        "monthly_fee" : 700000,
        "monthly_two_person_charge" : 100000,
        "desc":"Khusus Muslim\nPembayaran listrik dibagi dengan kamar yang sebaris\nPembayaran Air berbagi dengan seluruh kamar.\nUntuk sewa bulanan sudah termasuk air",
      },
      {
        "id":7,
        "name" : "Kos Sipirok 1 B",
        "type" : "Wanita",
        "facility" : "AC,Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg","4.jpeg"],
        "distance" : 1,
        "yearly_fee" : 8000000,
        "desc":"Khusus Muslim\nListrik token setiap kamar \nPembayaran Air berbagi dengan seluruh kamar.",
      },
    ];

    $(document).ready(function(){
      var type=[];
      var facility=[];
      var price_min=0;
      var price_max=20000000;
      var college='';

      show_kos(data_kos);

      function sort_kos(label,sort="asc",type='num') {
        if (type=='num') {
          data_kos=data_kos.sort(function(a,b){
            if (sort=="asc") {
              return a[label]-b[label];
            }
            else if(sort=="dsc"){
              return b[label]-a[label];
            }
          });
        }else if (type=='string') {
          data_kos=data_kos.sort(function(a,b){
            if (sort=='asc') {
              return a[label] == b[label] ? 0 : (a[label] < b[label] ? -1 : 1);
            }
            else if(sort=="dsc"){
              return a[label] == b[label] ? 0 : (a[label] < b[label] ? 1 : -1);
            }
        });
        }
        show_kos(data_kos);
      }

      function show_kos(data_kos) {
        $("#kos-list").empty();
        $(".kos-loading").show();
        setTimeout(() => {
          data_kos.forEach(data => {
            kos_list=`<div class="col-span-1 kos-item">
                <a href="/cari_kos/${data.id}" target="_blank" rel="noopener noreferrer">
                    <div class="flex p-3 rounded-md shadow flex-column">
                        <div class="relative w-full mb-2">
                            <img src="images/kos_new/${data.id}/1.jpeg" alt="Kos" class="object-cover object-center w-full max-h-40">
                            <span class="absolute inline-block px-3 py-1 font-bold text-green-600 transition bg-slate-50 text-uppercase hover:bg-green-500 hover:text-white kos-type bottom-3">${data.type}</span>
                        </div>
                        <span class="mb-1 text-xl text-prussian text-capitalize fw-bold">${data.name}</span>
                        <span class="hidden kos-college">${data.college.join(" & ")}</span>
                        <div class="flex items-baseline p-0 mb-1">
                            <i class="text-sm text-gray-500 fa-solid fa-location-dot"></i>
                            <span class="ml-1 text-sm text-gray-500">${data.distance.toString().replace(/\./g,',')} Km dari ${data.college.join(" & ")}</span>
                        </div>
                        <span class="mb-2 text-sm text-gray-500 d-inline-block kos-facility">${data.facility?data.facility:"-"}</span>
                        <p class="text-xl font-semibold">Rp<span class="kos-price">${data.yearly_fee.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")}</span><span class="text-gray-600">/tahun</span></p>
                    </div>
                </a>
            </div>`
    
            $("#kos-list").append(kos_list);
          });
          $(".kos-loading").hide();
        }, 500);
      }

      function filter_kos(type,facility,price_min,price_max,college) {
        let pattern_type = new RegExp(type, "i");
        let pattern_facility = new RegExp(facility, "gi");
        let pattern_college = new RegExp(college, "i");

        $(".kos-item").each(function () {
            let kos_type = $(this).find(".kos-type").text();
            let kos_facility = $(this).find(".kos-facility").text();
            let kos_price = $(this).find(".kos-price").text().replace(/\./g,'');
            let kos_college = $(this).find(".kos-college").text();
            
            let kos_price_condition=parseInt(kos_price)>=price_min && parseInt(kos_price)<=price_max;

            if (pattern_type.test(kos_type) && pattern_facility.test(kos_facility) && kos_price_condition && pattern_college.test(kos_college)) {
                $(this).show();
              $('.kos-loading').show();
              setTimeout(() => { 
                $('.kos-loading').hide();
                $(this).show();
             }, 400)
              
            } else {
              $('.kos-loading').show();
              setTimeout(() => { 
                $('.kos-loading').hide();
                $(this).hide();
             }, 400)
            }
        });
      }

      // Filter Listener
      
      $("input[name='type']").change(function(){
        type=[];
          $("input[name='type']:checked").each(function () {
            type.push($(this).val());
          })
          type=type.join("|");
          filter_kos(type,facility,price_min,price_max,college);
      });

      $("input[name='facility']").change(function(){
          facility=[];
          $("input[name='facility']:checked").each(function () {
            facility.push($(this).val());
          })
          facility=facility.join("|");
          filter_kos(type,facility,price_min,price_max,college);
      });

      $("input[type='number']").change(function(){
        price_min=$("#price-min").val()*1000;
        price_max=$("#price-max").val()*1000;
        filter_kos(type,facility,price_min,price_max,college);
      });

      $("input[type='range']").change(function(){
        price_min=$("#price-min").val()*1000;
        price_max=$("#price-max").val()*1000;
        filter_kos(type,facility,price_min,price_max,college);
      });

      $(".college-filter a[type='button'] span").click(function(){
        $(".college-name").text($(this).text());
        college=$(this).text();
        filter_kos(type,facility,price_min,price_max,college);
      });

      // Sort Listener
      $(".sort_name_asc").click(function(){
        sort_kos("name","asc","string");
      });

      $(".sort_name_dsc").click(function(){
        sort_kos("name","dsc","string");
      });
      
      $(".sort_price_asc").click(function(){
        sort_kos("yearly_fee","asc","num");
      });

      $(".sort_price_dsc").click(function(){
        sort_kos("yearly_fee","dsc","num");
      });

      $(".sort_distance_asc").click(function(){
        sort_kos("distance","asc","num");
      });

      $(".sort_distance_dsc").click(function(){
        sort_kos("distance","dsc","num");
      });
    });


</script>
@endsection