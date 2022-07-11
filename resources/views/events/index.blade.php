@extends('layouts.frontend')

@section('title', 'Photo Gallery')
@section('contents')
  <div class="w-full">
    <div class="w-full mx-auto md:px-2 lg:px-0">
      <div class="w-full bg-cover bg-black  text-white bg-[url('/img/bg.jpeg')] ">
        <div class="w-full flex flex-row py-8 px-10 bg-black bg-opacity-75 md:py-12 lg:py-24">
        	<p class="flex-grow mx-auto text-2xl font-bold text-left max-w-7xl">Explore our Campus</p>
            <a class="flex px-6 py-3 font-medium text-center text-green-800 uppercase transition-all duration-300 ease-in-out transform bg-white border-2 border-green-600 rounded-sm 2xl:py-4 py-3text-lg lg:px-8 2xl:px-12 hover:opacity-95 hover:bg-white hover:text-green-600 hover:border-green-600 hover:scale-90"
              href="/apply">Take a virtual TOUR</a>
        </div>
      </div>
    </div>
    <div
      class="grid justify-center w-full  grid-cols-1 ">
      
		<div x-data="{ tab: 'photos' }" class=" w-full p-5">
			<nav class="tabs flex flex-row  w-full divide-x divide-gray-500 font-bold text-green-800">
			  <a class="flex-1 p-5 text-center" :class="{ 'active': tab === 'photos' }" x-on:click.prevent="tab = 'photos'" href="#">Photos</a>
			  <a class="flex-1  p-5 text-center" :class="{ 'active': tab === 'videos' }" x-on:click.prevent="tab = 'videos'" href="#">Videos</a>
			</nav>

			<div x-show="tab === 'photos'">
							  
				<section class="overflow-hidden text-gray-700 ">
				  <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
				    <div class="flex flex-wrap -m-1 md:-m-2">
				      <div class="flex flex-wrap w-1/3">
				        <div class="w-full p-1 md:p-2">
				          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
				            src="{{ asset('img/gallery/1.jpeg') }}">
				        </div>
				      </div>
				      <div class="flex flex-wrap w-1/3">
				        <div class="w-full p-1 md:p-2">
				          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
				            src="{{ asset('img/gallery/2.jpeg') }}">
				        </div>
				      </div>
				      <div class="flex flex-wrap w-1/3">
				        <div class="w-full p-1 md:p-2">
				          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
				            src="{{ asset('img/gallery/3.jpeg') }}">
				        </div>
				      </div>
				      <div class="flex flex-wrap w-1/3">
				        <div class="w-full p-1 md:p-2">
				          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
				            src="{{ asset('img/gallery/4.jpeg') }}">
				        </div>
				      </div>
				      <div class="flex flex-wrap w-1/3">
				        <div class="w-full p-1 md:p-2">
				          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
				            src="{{ asset('img/gallery/5.jpeg') }}">
				        </div>
				      </div>
				      <div class="flex flex-wrap w-1/3">
				        <div class="w-full p-1 md:p-2">
				          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
				            src="{{ asset('img/gallery/6.jpeg') }}">
				        </div>
				      </div>
				    </div>
				  </div>
				</section>



			</div>
			<div x-show="tab === 'videos'">
							  
				<section class="overflow-hidden text-gray-700 ">
				  <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
				    <div class="flex flex-wrap -m-1 md:-m-2">
				      <div class="flex flex-wrap w-1/3">
				        <div class="w-full p-1 md:p-2">
				          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
				            src="{{ asset('img/gallery/5.jpeg') }}">
				        </div>
				      </div>
				      <div class="flex flex-wrap w-1/3">
				        <div class="w-full p-1 md:p-2">
				          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
				            src="{{ asset('img/gallery/2.jpeg') }}">
				        </div>
				      </div>
				      <div class="flex flex-wrap w-1/3">
				        <div class="w-full p-1 md:p-2">
				          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
				            src="{{ asset('img/gallery/4.jpeg') }}">
				        </div>
				      </div>
				      <div class="flex flex-wrap w-1/3">
				        <div class="w-full p-1 md:p-2">
				          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
				            src="{{ asset('img/gallery/6.jpeg') }}">
				        </div>
				      </div>
				      <div class="flex flex-wrap w-1/3">
				        <div class="w-full p-1 md:p-2">
				          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
				            src="{{ asset('img/gallery/3.jpeg') }}">
				        </div>
				      </div>
				      <div class="flex flex-wrap w-1/3">
				        <div class="w-full p-1 md:p-2">
				          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
				            src="{{ asset('img/gallery/1.jpeg') }}">
				        </div>
				      </div>
				    </div>
				  </div>
				</section>


			  </p>
			</div>

		</div>      


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
@section('scripts')
	<script type="text/javascript">

	</script>

@endsection


