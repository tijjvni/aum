@extends('layouts.frontend')

@section('contents')
  {{-- <div class="w-full max-w-full p-0 mx-auto md:px-2 lg:px-0" x-data="{ slide: 1 }">
    <div class="relative bg">
      <div x-show="slide === 1" class="flex flex-col justify-around bg-center bg-cover "
        style="background-image: url('/img/slide1.jpeg'); min-height: 650px; max-height: 720px"
        x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
        <div class="relative w-full pl-16 mx-auto my-auto max-w-7xl">
          <div class="p-4 space-y-4 text-lg text-white max-w-max">
            <p class="font-bold">Our Vision</p>
            <h1 class="text-3xl font-bold text-white md:text-4xl lg:text-6xl">A world class <br> academic institution</h1>
            <p class="max-w-xs md:max-w-md">To be a world classinstitution where faith, innovation and service are nurtured
              for
              the advancement of humandevelopment</p>
          </div>
          <div class="absolute top-0 space-y-4 left-4">
            <span :class="slide === 1 ? 'bg-red-600 border-white' : 'bg-transparent'" @click="slide = 1"
              class="block w-6 h-6 border-2 rounded-full outline-red-500 outline-2 "></span>
            <span :class="slide === 2 ? 'bg-red-600 border-white' : 'bg-transparent'" @click="slide = 2"
              class="block w-6 h-6 border-2 border-red-600 rounded-full "></span>
            <span :class="slide === 3 ? 'bg-red-600 border-white' : 'bg-transparent'" @click="slide = 3"
              class="block w-6 h-6 border-2 border-red-600 rounded-full "></span>
          </div>
        </div>
      </div>
      <div x-show="slide === 2" class="flex flex-col justify-around bg-center bg-cover "
        style="background-image: url('/img/slide2.jpeg'); min-height: 650px; max-height: 720px"
        x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
        <div class="relative w-full pl-16 mx-auto my-auto max-w-7xl">
          <div class="p-4 space-y-4 text-lg text-white max-w-max">
            <p class="font-bold">Our Mission</p>
            <h1 class="text-3xl font-bold text-white md:text-4xl lg:text-6xl">A Beacon <br> of knowledge</h1>
            <p class="max-w-xs md:max-w-md">To be a beacon of knowledge and transformativelearning seeking to advance
              professionanlism, build a diverse and socially inclusive society and be a power house for human capital</p>
          </div>
          <div class="absolute my-auto space-y-4 left-4">
            <span :class="slide === 1 ? 'bg-red-600 border-white' : 'bg-transparent'" @click="slide = 1"
              class="block w-6 h-6 border-2 rounded-full outline-red-500 outline-2 "></span>
            <span :class="slide === 2 ? 'bg-red-600 border-white' : 'bg-transparent'" @click="slide = 2"
              class="block w-6 h-6 border-2 border-red-600 rounded-full "></span>
            <span :class="slide === 3 ? 'bg-red-600 border-white' : 'bg-transparent'" @click="slide = 3"
              class="block w-6 h-6 border-2 border-red-600 rounded-full "></span>
          </div>
        </div>
      </div>
      <div x-show="slide === 3" class="flex flex-col justify-around bg-center bg-cover "
        style="background-image: url('/img/slide3.jpeg'); min-height: 650px; max-height: 720px"
        x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
        <div class="relative w-full pl-16 mx-auto my-auto max-w-7xl">
          <div class="p-4 space-y-4 text-lg text-white max-w-max">
            <p class="font-bold">Our Objective</p>
            <h1 class="text-3xl font-bold text-white md:text-4xl lg:text-6xl">Internationally <br> acceptable graduate
            </h1>
            <p class="max-w-xs md:max-w-md">To be produce internationally acceptable graduates that could ompete
              favourably with their peers anywhere in the world</p>
          </div>
          <div class="absolute my-auto space-y-4 left-4">
            <span :class="slide === 1 ? 'bg-red-600 border-white' : 'bg-transparent'" @click="slide = 1"
              class="block w-6 h-6 border-2 rounded-full outline-red-500 outline-2 "></span>
            <span :class="slide === 2 ? 'bg-red-600 border-white' : 'bg-transparent'" @click="slide = 2"
              class="block w-6 h-6 border-2 border-red-600 rounded-full "></span>
            <span :class="slide === 3 ? 'bg-red-600 border-white' : 'bg-transparent'" @click="slide = 3"
              class="block w-6 h-6 border-2 border-red-600 rounded-full "></span>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  {{-- slides --}}
  {{-- <div class="w-full h-full mySwiper" style="max-height: 720px">
    <div class="swiper-wrapper">
      <div class="flex flex-col justify-around bg-center bg-cover "
        style="background-image: url('/img/slide1.jpeg'); min-height: 650px; max-height: 720px">
        <div class="relative w-full pl-16 mx-auto my-auto max-w-7xl">
          <div class="p-4 space-y-4 text-lg text-white max-w-max">
            <p class="font-bold">Our Vision</p>
            <h1 class="text-3xl font-bold text-white md:text-4xl lg:text-6xl">A world class <br> academic institution</h1>
            <p class="max-w-xs md:max-w-md">To be a world classinstitution where faith, innovation and service are nurtured
              for
              the advancement of humandevelopment</p>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="relative w-full h-full swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="flex flex-col justify-around object-cover bg-center bg-cover swiper-slide"
        style="background-image: url('/img/bg.jpeg'); height: 720px">
        <div class="w-full p-4 px-4 mx-auto space-y-4 text-white rounded-lg max-w-7xl ">
          <div class="h-full max-w-lg p-4 lg:max-w-5xl lg:p-8 rounded-xl bg-opacity-40 lg:space-y-8 2xl:space-y-12">
            <h1 class="text-3xl font-bold lg:font-black lg:text-5xl 2xl:text-7xl ">Al-Ansar University
            </h1>
            <p class="text-xl font-bold uppercase lg:text-2xl 2xl:text-3xl">Lets Teach You Skills and Give You the Right
              Opportunities...</p>
            <a href="/apply"
              class="block px-12 py-3 text-lg font-bold text-white uppercase bg-red-600 border-2 lg:py-4 max-w-max lg:text-xl">Apply
              Now</a>
          </div>
        </div>
      </div>
      <div class="flex flex-col justify-around object-cover bg-center bg-cover swiper-slide"
        style="background-image: url('/img/r1.jpeg'); height: 720px">
        <div class="w-full p-4 px-4 mx-auto space-y-4 text-white rounded-lg max-w-7xl ">
          <div class="h-full max-w-lg p-4 lg:max-w-5xl lg:p-8 rounded-xl bg-opacity-40 lg:space-y-8 2xl:space-y-12">
            <h1 class="text-3xl font-bold lg:font-black lg:text-5xl 2xl:text-7xl ">Al-Ansar University
            </h1>
            <p class="text-xl font-bold uppercase lg:text-2xl 2xl:text-3xl">The Difference Begins Here...</p>
            <a href="/apply"
              class="block px-12 py-3 text-lg font-bold text-white uppercase bg-red-600 border-2 lg:py-4 max-w-max lg:text-xl">Apply
              Now</a>
          </div>
        </div>
      </div>
      <div class="flex flex-col justify-around object-cover bg-center bg-cover swiper-slide"
        style="background-image: url('/img/r2.jpeg'); height: 720px">
        <div class="w-full p-4 px-4 mx-auto space-y-4 text-white rounded-lg max-w-7xl ">
          <div class="h-full max-w-lg p-4 lg:max-w-5xl lg:p-8 rounded-xl bg-opacity-40 lg:space-y-8 2xl:space-y-12">
            <h1 class="text-3xl font-bold lg:font-black lg:text-5xl 2xl:text-7xl ">Al-Ansar University
            </h1>
            <p class="text-xl font-bold uppercase lg:text-2xl 2xl:text-3xl">We Make You Outstanding In Your Chosen Field
              of Studies</p>
            <a href="/apply"
              class="block px-12 py-3 text-lg font-bold text-white uppercase bg-red-600 border-2 lg:py-4 max-w-max lg:text-xl">Apply
              Now</a>
          </div>
        </div>
      </div>
      <div class="flex flex-col justify-around object-cover bg-center bg-cover swiper-slide"
        style="background-image: url('/img/r3.jpeg'); height: 720px">
        <div class="w-full p-4 px-4 mx-auto space-y-4 text-white rounded-lg max-w-7xl ">
          <div class="h-full max-w-lg p-4 lg:max-w-5xl lg:p-8 rounded-xl bg-opacity-40 lg:space-y-8 2xl:space-y-12">
            <h1 class="text-3xl font-bold lg:font-black lg:text-5xl 2xl:text-7xl ">Al-Ansar University
            </h1>
            <p class="text-xl font-bold uppercase lg:text-2xl 2xl:text-3xl">A world class academic institution</p>
            <a href="/apply"
              class="block px-12 py-3 text-lg font-bold text-white uppercase bg-red-600 border-2 lg:py-4 max-w-max lg:text-xl">Apply
              Now</a>
          </div>
        </div>
      </div>
    </div>
    {{-- We Make You Outstanding In Your Chosen Field of Studies --}}
  </div>

  {{-- featureds --}}
  <x-feature />

  {{-- another section --}}
  @include('about1')
  @include('faculty')
  @include('apply')
  @include('news')
@endsection
