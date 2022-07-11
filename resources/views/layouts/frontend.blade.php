<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <style>
    [x-cloak] {
      display: none !important;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    ol {
      list-style-type: decimal !important;
    }

  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <!-- Styles -->

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <title>@yield('title', 'Al-Ansar University')</title>


  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />


  @livewireStyles
  @stack('styles')
</head>

<body x-data="{ scrollFromTop: false }"
  @scroll.window="(window.pageYOffset  > 80 ? scrollFromTop = true : scrollFromTop = false)">
  <header class="relative p-0 m-0">
    <div class="w-full m-0 border-b-2">
      <div
        class="items-center justify-between hidden w-full mx-auto divide-x-4 divide-gray-400 max-w-7xl lg:flex divide-dashed">
        <a class="flex items-center space-x-2 text-2xl uppercase w-60 navbar-brand tourney-black" href="/">
          <img src="/img/favicon.png" alt="2cybersecurity" class="w-12 h-auto md:w-20 lg:w-24">
        </a>

        <div class="flex items-center pl-4 space-x-3 xl:space-x-4">
          <span class="text-red-600">
            <i class="text-3xl xl:text-4xl bi bi-envelope-plus"></i>
          </span>
          <a href="" class="flex flex-col">
            <span class="text-sm">info@aum.edu.ng</span>
            <span class="text-lg font-bold">Mail Us</span>
          </a>
        </div>
        <div class="flex items-center pl-4 space-x-3 xl:space-x-4">
          <span class="text-red-600">
            <i class="text-3xl xl:text-4xl bi bi-telephone-forward-fill"></i>
          </span>
          <a href="" class="flex flex-col">
            <span class="text-sm capitalize">Requesting a call</span>
            <span class="text-lg font-bold">(+234) 803 629 5382</span>
          </a>
        </div>
        <div class="flex items-center pl-4 space-x-3 xl:space-x-4">
          <span class="text-red-600">
            <i class="text-3xl xl:text-4xl bi bi-stopwatch"></i>
          </span>
          <p href="" class="flex flex-col">
            <span class="text-sm capitalize">Sunday - Friday</span>
            <span class="text-lg font-bold">9am - 8pm</span>
          </p>
        </div>
        <div class="flex items-center pl-4 space-x-3 xl:space-x-4">
          <span class="text-red-600">
            <i class="text-3xl xl:text-4xl bi bi-geo-alt"></i>
          </span>
          <p href="" class="flex flex-col">
            <span class="text-sm">Maiduguri, Borno State</span>
            <span class="text-lg font-bold">Nigeria</span>
          </p>
        </div>
      </div>

    </div>
    <div class="top-0 z-40 w-full bg-green-800" x-data="{ show: false }"
      :class="{ 'fixed bg-green-800': scrollFromTop, 'bg-green-800': !scrollFromTop }">
      <nav class="top-0 z-50 flex items-center justify-between w-full px-3 py-3 mx-auto font-medium text-black lg:px-0"
        :class="{ 'max-w-7xl': scrollFromTop, 'max-w-6xl': !scrollFromTop }">
        <a href="/" class="flex items-center">
          <img src="/img/favicon.png" alt="al-ansar university"
            :class="{ 'block': scrollFromTop, 'hidden': !scrollFromTop }" class="p-1 rounded-lg h-au to w-14 lg:w-18">
          <p class="flex flex-col text-white">
            <span class="pb-1 uppercase lg:text-lg">Al-Ansar
            </span>
            <span class="-mt-3 uppercase max-w-min lg:text-lg">
              University</span>
          </p>
        </a>
        <div class="hidden lg:block">
          <ul class="flex flex-col space-x-4 text-white lg:flex-row xl:space-x-6">
            <li class="p-0 m-0">
              <a class="uppercase transition duration-500 hover:text-red-600 hover:opacity-95" href="/">Home</a>
            </li>
            <li class="p-0 m-0">
              <a class="uppercase transition duration-500 hover:text-red-600 hover:opacity-95" href="/about">About</a>
            </li>
            </li>

            <li class="p-0 m-0">
              <a class="uppercase transition duration-500 hover:text-red-600 hover:opacity-95"
                href="/faculty">Faculties</a>
            </li>
            <li class="z-10 p-0 m-0" x-data="{ dropdown: false }" @mouseover="dropdown = true" @click="dropdown = true">
              <a href="/news" class="uppercase transition duration-500 hover:text-red-600 hover:opacity-95">News &
                Events</a>
            </li>
            <li class="p-0 m-0">
              <a class="uppercase transition duration-500 hover:text-red-600 hover:opacity-95" href="/events">Photo
                Gallery</a>
            </li>
            <li class="p-0 m-0">
              <a class="uppercase transition duration-500 hover:text-red-600 hover:opacity-95" href="/contact">Contact
                Us</a>
            </li>
          </ul>
        </div>

        {{-- mobile view --}}
        <div x-cloak class="fixed top-0 bottom-0 right-0 z-50 w-3/5 min-h-screen py-8 text-center bg-green-800"
          x-show="show" x-transition:enter="transition ease-out duration-1000"
          x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="transition ease-in duration-1000" x-transition:leave-start="opacity-100 scale-100"
          x-transition:leave-end="opacity-0 scale-50">
          <span class="absolute top-0 right-0 m-3 text-xl text-white cursor-pointer hover:text-black"
            @click="show = false">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </span>

          <ul class="flex flex-col pt-8 pl-8 space-y-8 font-semibold text-left text-white h-4/5">
            <li class="p-0 m-0">
              <a class="uppercase transition duration-500 hover:text-red-500 hover:opacity-95" href="/">
                Home
              </a>
            </li>
            <li class="p-0 m-0">
              <a class="uppercase transition duration-500 hover:text-red-600 hover:opacity-95" href="/about">About</a>
            </li>
            <li class="p-0 m-0">
              <a class="uppercase transition duration-500 hover:text-red-600 hover:opacity-95"
                href="/faculty">Faculties</a>
            </li>
            <li class="p-0 m-0">
              <a class="uppercase transition duration-500 hover:text-red-600 hover:opacity-95" href="/news">News Event
              </a>
            </li>
            </li>
            <li class="p-0 m-0">
              <a class="uppercase transition duration-500 hover:text-red-600 hover:opacity-95" href="/events">Photo
                Gallery</a>
            </li>
            </li>

            <li class="p-0 m-0">
              <a class="uppercase transition duration-500 hover:text-red-600 hover:opacity-95"
                href="/contact">Contact</a>
            </li>

            <li class="p-0 m-0">
              <a class="px-6 py-3 text-xs text-center text-white uppercase transition-all duration-300 ease-in-out transform bg-red-600 border-2 border-red-600 hover:opacity-95 hover:bg-red-500 hover:text-red-600 hover:border-red-600 rounded-3xl hover:scale-90"
                href="/apply">Apply Now</a>
            </li>
          </ul>
        </div>


        <button class="z-40 bg-white rounded lg:hidden" type="button" @click="show = !show">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 text-red-600" fill="currentColor" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>

        <ul class="hidden list-none lg:flex lg:flex-row">
          <li class="p-0 m-0">
            <a class="px-6 py-3 font-medium text-center text-white uppercase transition-all duration-300 ease-in-out transform bg-red-600 border-2 border-red-600 rounded-sm 2xl:py-4 py-3text-lg lg:px-8 2xl:px-12 hover:opacity-95 hover:bg-white hover:text-red-600 hover:border-red-600 hover:scale-90"
              href="/apply">Apply Now</a>
          </li>
        </ul>
      </nav>
    </div>

  </header>
  <main id="w-full relative">
    {{ $slot ?? '' }}
    @yield('contents')
  </main>
  @livewire('newsletter')
  <footer class="clear-both p-0 bg-slate-800">
    <div class="flex flex-wrap justify-between w-full px-4 pt-16 pb-12 mx-auto lg:px-0 max-w-7xl">
      <div class="max-w-xs space-y-3">
        <div class="flex space-x-4">
          <img src="/img/brand.png" alt="al-ansar university" class="object-cover object-center w-20 h-20 bg-white">
          <h3 class="mb-4 text-4xl font-bold text-white uppercase text-primary">Al-Ansar <br> <span
              class="text-3xl">
              University
            </span>
          </h3>
        </div>
        <p class="text-sm text-justify text-gray-400">The Vision of Al-Ansar University is to be a world-class academic
          institution where faith, innovation and service are nurtured for the advancement of human development. </p>
        <p class="flex items-center pt-3 space-x-4">
          <a href target="_blank" class="px-2 py-1 text-red-600 bg-white rounded-lg">
            <i class="text-3xl bi bi-twitter"></i>
          </a>
          <a href target="_blank" class="px-2 py-1 text-red-600 bg-white rounded-lg">
            <i class="text-3xl bi bi-instagram"></i>
          </a>
          <a href target="_blank" class="px-2 py-1 text-red-600 bg-white rounded-lg">
            <i class="text-3xl bi bi-facebook"></i>
          </a>
          <a href target="_blank" class="px-2 py-1 text-red-600 bg-white rounded-lg">
            <i class="text-3xl bi bi-linkedin"></i>
          </a>
        </p>

      </div>
      <div class="max-w-sm space-y-4 text-gray-400">
        <h3 class="mb-4 text-2xl font-bold text-white text-primary">Get In Touch</h3>
        <div class="d-flex">
          <h4 class="fa fa-map-marker-alt text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Address</h5>
            <p>km 5, Maiduguri-Gubio Road, Maiduguri, Borno State</p>
            <p><b>Take-off Site</b>Al-Ansar University Take-off Site, Baga Road, Maiduguri, Borno State.</p>
          </div>
        </div>
        <div class="d-flex">
          <h4 class="fa fa-envelope text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Email</h5>
            <p>
              <a href="mailto:info@aum.edu.ng" class="">info@aum.edu.ng</a>
            </p>
          </div>
        </div>
        <div class="d-flex">
          <h4 class="fa fa-phone-alt text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Phone</h5>
            <p>(+234) 803 - 629 - 5382</p>
          </div>
        </div>
      </div>
      <div class="text-gray-500 w-44">
        <h3 class="mb-4 text-2xl font-bold text-white text-primary">Quick Links</h3>
        <div class="flex flex-col justify-content-start">
          <a class="mb-2 text-white" href="/"><i class="mr-2 fa fa-angle-right"></i>Home</a>
          <a class="mb-2 text-white" href="/about"><i class="mr-2 fa fa-angle-right"></i>About Us</a>
          <a class="mb-2 text-white" href="/news"><i class="mr-2 fa fa-angle-right"></i>News</a>
          <a class="mb-2 text-white" href="/admission"><i class="mr-2 fa fa-angle-right"></i>Admission</a>
          <a class="mb-2 text-white" href="/login"><i class="mr-2 fa fa-angle-right"></i>Login</a>
          <a class="text-white" href="#"><i class="mr-2 fa fa-angle-right"></i>Contact Us</a>
        </div>
      </div>

      <div class="text-gray-400">
        <h1 class="mb-4 text-2xl font-bold text-white text-primary">Affiliate Links</h1>
        <ul class="text-sm list-unstyled fira-medium mt-n4">
          <li>
            <a href="https://www.mkdikwa.ng/" class="flex items-center link hover:text-secondary-light"
              target="_blank">
              <img src="/img/al-founder.jpg" alt="" class="rounded-full site" style="max-width: 30px; margin: 3px">
              <span>Founder's Book Store</span> </a>
          </li>

          <li>
            <a href="http://www.al-ansar-foundation.com" class="flex items-center link hover:text-secondary-light"
              target="_black"><img src="/img/al-foundation.jpg" alt="" class="rounded-full site"
                style="max-width: 30px; margin: 3px"> <span>Al-Ansar Foundation</span></a>
          </li>
          <li>
            <a href="" class="flex items-center link hover:text-secondary-light" target="_black"><img
                src="/img/aum.png" alt="" class="rounded-full site" style="max-width: 30px; margin: 3px">
              <span>Al-Ansar University</span></a>
          </li>
          <li>
            <a href="https://www.al-ansarmasjid.com/" class="flex items-center link hover:text-secondary-light"
              target="_black"><img src="/img/al-maiduguri.jpg" alt="" class="rounded-full site"
                style="max-width: 30px; margin: 3px"> <span>Al-Ansar Masjid</span> </a>
          </li>
          <li><a href="https://www.al-ansar-security.com.ng/" class="flex items-center link hover:text-secondary-light"
              target="_black"><img src="/img/al-security.jpg" alt="" class="rounded-full site"
                style="max-width: 30px; margin: 3px"> <span>Al-Ansar Security Services
                Ltd.</span></a>
          </li>
          <li>
            <a href="https://alaaka.ng" class="flex items-center link hover:text-secondary-light" target="_black"><img
                src="/img/alaasu.png" alt="" class="rounded-full site" style="max-width: 30px; margin: 3px"> <span>
                Al-Ansar Academy, Suleja</span></a>
          </li>
          <li>
            <a href="https://alaasu.ng" class="flex items-center link hover:text-secondary-light" target="_black"><img
                src="/img/alaaka.jpeg" alt="" class="rounded-full site" style="max-width: 30px; margin: 3px"> <span>
                Al-Ansar Academy, Kano</span></a>
          </li>
          <li>
            <a href="" class="flex items-center link hover:text-secondary-light" target="_black"><img
                src="/img/al-achs.jpg" alt="" class="rounded-full site" style="max-width: 30px; margin: 3px"> <span>
                Al-Ansar Cleaning & Hygiene Services
                Ltd</span></a>
          </li>
          <li>
          <li>
            <a href="https://al-ansarradioandtv.com.ng/" class="flex items-center link hover:text-secondary-light"
              target="_black"><img src="/img/al-fm.jpg" alt="" class="rounded-full site"
                style="max-width: 30px; margin: 3px"> <span> Al-Ansar Radio & TV</span></a>
          </li>
          <li>
            <a href="" class="flex items-center link hover:text-secondary-light" target="_black"><img
                src="/img/al-hospital.jpg" alt="" class="rounded-full site" style="max-width: 30px; margin: 3px">
              <span>
                Al-Ansar Women & Children's
                Hospital</span></a>
          </li>
        </ul>
        <div class="mt-4 d-flex justify-content-start">
          <a class="px-0 mr-2 text-center btn btn-outline-primary rounded-circle" style="width: 38px; height: 38px;"
            href="#"><i class="fab fa-twitter"></i></a>
          <a class="px-0 mr-2 text-center btn btn-outline-primary rounded-circle" style="width: 38px; height: 38px;"
            href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="px-0 mr-2 text-center btn btn-outline-primary rounded-circle" style="width: 38px; height: 38px;"
            href="#"><i class="fab fa-linkedin-in"></i></a>
          <a class="px-0 mr-2 text-center btn btn-outline-primary rounded-circle" style="width: 38px; height: 38px;"
            href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="bg-black">
      <div class="py-4 mx-auto text-sm max-w-7xl" style="border-top: 2px solid rgba(23, 162, 184, .2);;">
        <p class="m-0 text-center text-white">
          &copy; 2022 <a class="text-primary font-weight-bold" href="/">Al-Ansar University, Maiduguri</a>. All Rights
          Reserved.
        </p>
      </div>
    </div>
  </footer>

  @livewireScripts
  {{-- swiperjs --}}
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".paginate",
        clickable: true,
        renderBullet: function(index, className) {
          return '<span class="' + className + '">' +
            "</span>";
        },
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        effect: "flip",
        grabCursor: true,
      },
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: ".gallery-next",
        prevEl: ".gallery-prev",
      },
    });
  </script>
</body>

</html>
