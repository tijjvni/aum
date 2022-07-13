@extends('layouts.frontend')
@section('title', $news->title)
@section('contents')
  <div class="w-full mx-auto bg-center bg-cover md:px-2 lg:px-0" style="background-image: url('/img/bg3.jpeg')">
    <div class="w-full px-4 py-16 text-red-500 bg-black bg-opacity-75 lg:px-0 md:py-24 lg:py-48">
      <p class="max-w-lg mx-auto text-3xl font-bold text-center text-white lg:max-w-5xl">{{ $news->title }}</p>
    </div>
  </div>
  <div class="w-full py-8 mx-auto space-y-4 rounded-lg shadow-sm max-w-7xl ">
    <div class="w-full max-w-5xl mx-auto space-y-4 overflow-hidden">
      <img src="{{ $news->image }}" alt="al-ansar images"
        class="object-cover w-full mx-auto" style="max-height: 720px">
      <div class="max-w-4xl px-4 space-y-4 lg:px-0">
        <h1 class="text-3xl font-extrabold text-center">{{ $news->title }}</h1>
        <div class="">{!! $news->content !!}</div>
      </div>
    </div>
  </div>
@endsection
