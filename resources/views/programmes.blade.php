@extends('layouts.frontend')
@section('title', 'programs overview, departments and courses')
@section('contents')
  <div class="w-full space-y-12">
    <div class="w-full px-4 mx-auto md:px-2 lg:px-0">
      <div class="w-full bg-cover bg-center bg-black  text-white bg-[url('/img/r2.jpeg')] ">
        <div class="w-full py-8 bg-black bg-opacity-75 md:py-12 lg:py-24">
          <p class="mx-auto text-2xl font-bold text-center md:text-left max-w-7xl">Programmes Overview</p>
        </div>
      </div>
    </div>
    <div class="w-full px-4 md:px-2 lg:px-0 max-w-7xl mx-auto">
      <h1 class="text-2xl font-bold my-6 lg:text-3xl 2xl:text-4xl lg:font-extrabold">Programme Overview</h1>
    </div>
    <div class="w-full grid-cols-1 gap-8 space-y-8 px-4 mx-auto my-4 lg:gap-12 max-w-7xl md:px-2">

      <div class="space-y-3" id="1">
        <h1 class="font-semibold text-2xl uppercase underline">{{ $course->programmes }}</h1>
        <h2 class="font-medium text-lg uppercase underline">Programme Overview</h2>
        <div class="space-y-2 text-justify">
          <p>{{ $programme->overview }}</p>

          <h1 class="font-medium text-lg uppercase underline">Career opportunities
          </h1>
          <p>{{ $programme->opportunity_text }}</p>
          <ul class="list-disc list-inside ml-4">
            @foreach ($opportunities as $opportunity)
              <li>{{ $opportunity->opportunity }}</li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="py-8 px-4 md:px-2 lg:px-0">
        <a href="/apply" class="block mx-auto max-w-max px-8 py-3 text-white bg-red-600">Apply Now</a>
      </div>

    </div>
  @endsection
