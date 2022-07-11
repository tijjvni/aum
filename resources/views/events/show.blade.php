@extends('layouts.frontend')
@section('title', $event->name)
@section('contents')
  <div class="w-full p-4 mx-auto max-w-7xl md:px-2 lg:px-0">
    <h2 class="my-4 text-2xl font-bold uppercase">{{ $event->name }}</h2>
    <div class="w-full gap-4 gap-y-4 lg:gap-y-8 lg:gap-8 columns-1 md:columns-2 lg:columns-3 2xl:col-span-4">
      @forelse ($event->getMedia('galleries') as $photo)
        <img src="{{ $photo->getUrl() }}" alt="{{ $photo->name }}" class="object-cover w-full">
      @empty
        <p class="text-lg font-medium">No photo in the galleries</p>
      @endforelse
    </div>
  </div>
@endsection
