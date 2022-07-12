@extends('layouts.frontend')

@section('title', 'Photo Gallery')
@section('contents')
  <div class="w-full">
    <div class="w-full mx-auto md:px-2 lg:px-0">
      <div class="w-full bg-cover bg-black  text-white bg-[url('/img/bg.jpeg')] ">
        <div class="w-full flex flex-col md:flex-row py-8 px-10 bg-black bg-opacity-75 md:py-12 lg:py-24">
        	<p class="flex-grow mx-auto text-lg md/;text-2xl font-bold text-left max-w-7xl">Explore our Campus</p>
            <a class="flex-initial px-3 w-full md:max-w-md px-6 py-2 md:py-3 font-medium text-center text-green-800 uppercase transition-all duration-300 ease-in-out transform bg-white border-2 border-green-600 rounded-sm hover:opacity-95 hover:bg-white hover:text-green-600 hover:border-green-600 hover:scale-90"
              href="/tour">Take a virtual TOUR</a>
        </div>
      </div>
    </div>
    <div
      class="grid justify-center w-full  grid-cols-1 ">
		@livewire('gallery')    		
    </div>

  </div>
@endsection

@push('styles')
	<style type="text/css">
		.tabs a.active{
			background: #166534;
			color: white;
		}
	</style>
@endpush

