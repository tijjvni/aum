@extends('layouts.frontend')
@section('title', 'contact us, Contact Al-Ansar Foundation')
@section('contents')
  <div class="w-full space-y-12">
    <div class="w-full px-4 mx-auto md:px-2 lg:px-0">
      <div class="w-full bg-cover  bg-black  text-white bg-[url('/img/bg3.jpeg')] ">
        <div class="w-full py-8 bg-black bg-opacity-75 md:py-12 lg:py-24">
          <p class="mx-auto text-2xl font-bold text-center md:text-left max-w-7xl">Contact Us</p>
        </div>
      </div>
    </div>
    <div class="object-cover object-center py-16 ">
      @livewire('message')
    </div>

    <div class="py-8 px-4 md:px-2 lg:px-0">
      <a href="/apply" class="block mx-auto max-w-max px-8 py-3 text-white bg-red-600">Apply Now</a>
    </div>

  </div>
@endsection
