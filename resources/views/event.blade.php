@extends('layouts.frontend')

@section('contents')
  <div class="w-full p-4 mx-auto max-w-7xl md:px-2 lg:px-0" x-data="{ slide: 1 }">
    @livewire('galleries')
  </div>
@endsection
