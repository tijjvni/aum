@extends('layouts.frontend')
@section('title', 'Photo Gallery')
@section('contents')
  <div class="w-full">
    <div class="w-full mx-auto md:px-2 lg:px-0">
      <div class="w-full bg-cover bg-black  text-white bg-[url('/img/bg.jpeg')] ">
        <div class="w-full py-8 bg-black bg-opacity-75 md:py-12 lg:py-24">
          <p class="mx-auto text-2xl font-bold text-center md:text-left max-w-7xl">Gallery</p>
        </div>
      </div>
    </div>
    <div
      class="grid justify-center w-full grid-cols-1 gap-8 px-4 mx-auto my-4 lg:gap-12 max-w-7xl md:px-2 lg:px-0 md:grid-cols-2 lg:grid-cols-3">


    </div>
    <div class="flex items-center justify-center">

    </div>
  </div>
@endsection
