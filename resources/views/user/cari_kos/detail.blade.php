@extends('layouts.app',['title'=>'Info Detail Kos|'])

@section('content')
  <div 
    class="relative w-full mx-auto lg:w-4/5"
    id="kos-carousel"
    x-data="{ activeSlide: 1, slides: detail_kos.images }"
   >
    <!-- Slides -->
    <template x-for="(slide,index) in slides" :key="slide">
      <div
         x-show="activeSlide === index + 1"
         class="flex items-center h-64"
         x-transition:enter="transition ease-in-out duration-700" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
         <img class="object-cover w-full h-full" x-bind:src="'{{ asset('images/kos_new/')}}/'+detail_kos.id+'/'+slide">
      </div>
    </template>
    
    <!-- Prev/Next Arrows -->
    <div class="absolute inset-0 flex">
      <div class="flex items-center justify-start w-1/2 px-2 lg:px-5">
        <button 
          class="w-12 h-12 text-lg font-bold text-white rounded-full bg-black/30 hover:shadow-lg hover:bg-black/70"
          x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
          <i class="fa-solid fa-chevron-left"></i>
         </button>
      </div>
      <div class="flex items-center justify-end w-1/2">
        <button 
          class="w-12 h-12 text-lg font-bold text-white rounded-full bg-black/30 hover:shadow-lg hover:bg-black/70"
          x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
          <i class="fa-solid fa-chevron-right"></i>
        </button>
      </div>        
    </div>

    <!-- Buttons -->
    <div class="absolute bottom-0 flex items-center justify-center w-full px-10 mx-auto mb-3 lg:px-64">
      <template x-for="(slide,index) in slides" :key="slide">
        <button
          class="flex-1 w-2 h-2 mx-2 mt-4 mb-0 overflow-hidden transition-colors duration-200 ease-out rounded-full hover:bg-green-600 hover:shadow-lg"
          :class="{ 
              'bg-green-600': activeSlide === index+1,
              'bg-slate-400': activeSlide !== index+1 
          }" 
          x-on:click="activeSlide = index+1"
        ></button>
      </template>
    </div>
  </div>
  <section class="px-[16px] mx-auto my-3 lg:px-0 lg:w-4/5">
    <div class="flex justify-around gap-x-5">
      <div class="w-full lg:w-3/4">
        <span class="inline-block w-full my-2 text-xl text-prussian text-capitalize fw-bold" x-text="detail_kos.name">Kos Mayadana Pembangunan 3</span>
            <div class="flex items-center justify-between mb-2 gap-x-2">
              <div class="flex p-0 mb-1 align-items-center">
                  <i class="mr-2 text-lg text-gray-500 fa-solid fa-location-dot"></i>
                  <div class="inline-block">
                    <span class="inline-block text-lg font-bold text-gray-500" x-text="(detail_kos.distance.toString().replace(/\./g,','))+' Km dari '"></span>
                    <span class="inline-block font-normal" x-text="detail_kos.college.join(' & ')">Kampus USU</span>
                  </div>
              </div>
              <div class="px-3 py-2 overflow-hidden bg-green-600 border border-gray-500 rounded-lg w-fit">
                  <i class="mb-1 text-xl font-semibold text-white fa-solid fa-person w-fit"></i>
              </div>
            </div>
            <hr class="my-3">
            <div class="flex flex-col space-y-1">
              <span class="text-lg font-semibold text-decoration-underline col-span-full text-prussian">Fasilitas</span>
              <div class="grid grid-flow-col grid-rows-3 gap-2 lg:grid-rows-2 lg:w-4/5">
                <span class="text-lg font-bold" :class="detail_kos.facility.includes('Kamar Mandi Dalam')?'text-green-600':'text-gray-500/50'">Kamar Mandi Dalam</span>
                <span class="text-lg font-bold" :class="detail_kos.facility.includes('Kasur')?'text-green-600':'text-gray-500/50'">Kasur</span>
                <span class="text-lg font-bold" :class="detail_kos.facility.includes('AC')?'text-green-600':'text-gray-500/50'">AC</span>
                <span class="text-lg font-bold" :class="detail_kos.facility.includes('Meja')?'text-green-600':'text-gray-500/50'">Meja</span>
                <span class="text-lg font-bold" :class="detail_kos.facility.includes('Wifi')?'text-green-600':'text-gray-500/50'">Wifi</span>
                <span class="text-lg font-bold" :class="detail_kos.facility.includes('Akses 24 Jam')?'text-green-600':'text-gray-500/50'">Akses 24 Jam</span>
              </div>
            </div>
            <hr class="my-3">
            <table class="w-full text-center border table-auto rounded-2xl">
              <thead class="bg-green-600">
                <tr>
                  <th class="text-white border-[1px] border-green-500">Pembayaran</th>
                  <th class="text-white border-[1px] border-green-500">Harga</th>
                  <th class="text-white border-[1px] border-green-500">DP</th>
                  <th class="text-white border-[1px] border-green-500">>1 orang</th>
                </tr>
              </thead>
              <tbody>
                <tr x-show="detail_kos.hasOwnProperty('yearly_fee')">
                  <td class="text-sm font-semibold border-[1px] border-green-500">Tahunan</td>
                  <td class="text-sm font-semibold border-[1px] border-green-500" x-text="detail_kos.yearly_fee.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')"></td>
                  <td class="text-sm font-semibold border-[1px] border-green-500" x-text="detail_kos.down_payment?detail_kos.down_payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'):'-'"></td>
                  <td class="text-sm font-semibold border-[1px] border-green-500" x-text="detail_kos.yearly_two_person_charge?`+ ${detail_kos.yearly_two_person_charge.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')}`:'-'"></td>
                </tr>
                <tr x-show="detail_kos.hasOwnProperty('monthly_fee')">
                  <td class="text-sm font-semibold border-[1px] border-green-500">Bulanan</td>
                  <td class="text-sm font-semibold border-[1px] border-green-500" x-text="detail_kos.monthly_fee.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')"></td>
                  <td class="text-sm font-semibold border-[1px] border-green-500" x-text="detail_kos.down_payment?detail_kos.down_payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.'):'-'">-</td>
                  <td class="text-sm font-semibold border-[1px] border-green-500" x-text="detail_kos.monthly_two_person_charge?`+ ${detail_kos.monthly_two_person_charge.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')}`:'-'"></td>
                </tr>
              </tbody>
            </table>
            <hr class="my-3">
            <div class="flex flex-col mb-16 space-y-1 lg:mb-6 h-fit">
              <span class="text-lg font-semibold text-decoration-underline col-span-full text-prussian ">Deskripsi</span>
              <pre class="inline-block mb-10 text-base text-justify text-neutral-900 font-['Nunito_Sans']" x-text="detail_kos.desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</pre>
            </div>
      </div>
      <div class="flex-col items-center justify-center hidden w-1/4 px-3 py-2 rounded-lg shadow gap-y-2 h-fit lg:flex ">
          <button class="w-full p-2 transition bg-green-600 rounded hover:bg-green-800 btn-booking">
            <i class="mr-2 text-white transition fa-solid fa-receipt"></i>
            <span class="text-lg font-semibold text-white transition">
              Booking Kos
            </span>
          </button>
          <span class="text-base font-bold text-gray-400">OR</span>
          <button class="w-full p-2 text-white transition border-2 border-green-600 rounded hover:bg-green-500 hover:border-green-500 group btn-ride-sharing">
            <i class="mr-2 text-green-600 transition fa-solid fa-motorcycle group-hover:text-white"></i>
            <span class="text-lg font-semibold text-green-600 transition group-hover:text-white">
              Ride Sharing
            </span>
          </button>
        </div>
    </div>
    
  </section>
  <div class="fixed bottom-0 lg:hidden flex justify-evenly items-center w-full space-x-2 px-3 py-2 bg-white drop-shadow-[18px_-18px_28px_#d5d5d5]">
    <button class="w-1/2 p-2 transition bg-green-600 rounded hover:bg-green-800 btn-booking">
      <i class="mr-2 text-white transition fa-solid fa-receipt"></i>
      <span class="text-lg font-semibold text-white transition">
        Booking Kos
      </span>
    </button>
    <button class="w-1/2 p-2 text-white transition border-2 border-green-600 rounded hover:bg-green-500 hover:border-green-500 group btn-ride-sharing">
      <i class="mr-2 text-green-600 transition fa-solid fa-motorcycle group-hover:text-white"></i>
      <span class="text-lg font-semibold text-green-600 transition group-hover:text-white">
        Ride Sharing
      </span>
    </button>
  </div>
  
@endsection

@section('scripts')
  <script>
    // Detail Kos
    var url=window.location.href;
    var id=url.split("/").pop();
    var detail_kos={};
    
    data_kos.forEach((data,index) => {
      if (data.id==id) {
        detail_kos=data_kos[index];
      }
    });

    var booking_msg='Halo AZISTEN\nSaya ingin booking '+detail_kos.name+'\n\n';
    var ride_sharing_msg='Halo AZISTEN\nSaya ingin menggunakan layanan ride sharing untuk '+detail_kos.name+'\n\n';

    $(document).ready(function(){
      $('.btn-booking').click(function(){
        window.location.href=`https://wa.me/6285869205026?text=${encodeURI(booking_msg)}`;
      });
      $('.btn-ride-sharing').click(function(){
        window.location.href=`https://wa.me/6285869205026?text=${encodeURI(ride_sharing_msg)}`;
      });
    });
    
  </script>
@endsection