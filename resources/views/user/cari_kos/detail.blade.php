@extends('layouts.app',['title'=>'Info Detail Kos|'])

@section('content')
  <div 
    class="relative w-full mx-auto lg:w-4/5"
    x-data="{ activeSlide: 1, slides: ['computer','laptop','ipad','book','tablet'] }"
   >
    <!-- Slides -->
    <template x-for="(slide,index) in slides" :key="slide">
      <div
         x-show="activeSlide === index + 1"
         class="flex items-center h-64"
         x-transition:enter="transition ease-in-out duration-700" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
         <img class="object-cover w-full h-full" x-bind:src="'https://source.unsplash.com/2000x1000?'+slide">
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
  <section class="px-3 mx-auto my-3 lg:w-4/5">
    <span class="inline-block w-full my-2 text-xl text-prussian text-capitalize fw-bold">Kos Mayadana Pembangunan 3</span>
    <div class="flex items-center justify-between mb-2">
      <div class="flex p-0 mb-1 align-items-center">
          <i class="text-lg text-gray-500 fa-solid fa-location-dot"></i>
          <span class="ml-1 text-lg font-bold text-gray-500">1 Km <span class="font-normal"> dari Kampus USU</span></span>
      </div>
      <div class="px-3 py-2 overflow-hidden bg-green-600 border border-gray-500 rounded-lg w-fit">
          <i class="mb-1 text-xl font-semibold text-white fa-solid fa-person w-fit"></i>
      </div>
    </div>
    <hr class="my-3">
    <div class="flex flex-col space-y-1">
      <span class="text-lg font-semibold text-decoration-underline col-span-full text-prussian">Fasilitas</span>
      <div class="grid grid-flow-col grid-rows-3 gap-2">
        <span class="text-lg font-bold text-green-600">Kamar Mandi Dalam</span>
        <span class="text-lg font-bold text-green-600">Kasur</span>
        <span class="text-lg font-bold text-green-600">AC</span>
        <span class="text-lg font-bold text-gray-500/50">Meja</span>
        <span class="text-lg font-bold text-gray-500/50">Wifi</span>
        <span class="text-lg font-bold text-gray-500/50">Akses 24 Jam</span>
      </div>
    </div>
    <hr class="my-3">
    <table class="w-full text-center border table-auto rounded-2xl">
      <thead class="bg-green-600">
        <tr>
          <th class="text-white">Harga</th>
          <th class="text-white">DP</th>
          <th class="text-white">Pembayaran</th>
          <th class="text-white">Penghuni</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-sm border">12.000.000</td>
          <td class="text-sm border">200.000</td>
          <td class="text-sm border">Tahunan</td>
          <td class="text-sm border">1</td>
        </tr>
        <tr>
          <td class="text-sm border">13.000.000</td>
          <td class="text-sm border">200.000</td>
          <td class="text-sm border">Tahunan</td>
          <td class="text-sm border">2</td>
        </tr>
        <tr>
          <td class="text-sm border">1.000.000</td>
          <td class="text-sm border">-</td>
          <td class="text-sm border">Bulanan</td>
          <td class="text-sm border">1</td>
        </tr>
        <tr>
          <td class="text-sm border">1.200.000</td>
          <td class="text-sm border">-</td>
          <td class="text-sm border">Bulanan</td>
          <td class="text-sm border">2</td>
        </tr>
      </tbody>
    </table>
    <hr class="my-3">
    <div class="flex flex-col space-y-1">
      <span class="text-lg font-semibold text-decoration-underline col-span-full text-prussian ">Fasilitas</span>
      <p class="text-base text-justify text-neutral-900">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore possimus, accusamus, neque obcaecati atque earum esse ex libero nihil velit numquam ipsum cumque impedit veritatis architecto quos veniam repudiandae ea aliquam. Quos possimus quas aliquam illo ipsam aspernatur aut est, illum eius voluptate tempore, sint cumque sunt unde aperiam consectetur?</p>
    </div>
  </section>
  <div class="fixed bottom-0 flex justify-evenly items-center w-full mt-3 space-x-2 px-3 py-2 bg-white drop-shadow-[22px_-22px_44px_#c7c7c7]">
    <button class="w-1/2 p-2 transition bg-green-600 rounded hover:bg-green-800">
      <i class="mr-2 text-white transition fa-solid fa-receipt"></i>
      <span class="text-lg font-semibold text-white transition">
        Booking Kos
      </span>
    </button>
    <button class="w-1/2 p-2 text-white transition border-2 border-green-600 rounded hover:bg-green-500 hover:border-green-500 group">
      <i class="mr-2 text-green-600 transition fa-solid fa-motorcycle group-hover:text-white"></i>
      <span class="text-lg font-semibold text-green-600 transition group-hover:text-white">
        Ride Sharing
      </span>
    </button>
  </div>
  
@endsection