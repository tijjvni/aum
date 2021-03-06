<div>
	<div x-data="{ tab: 'photos' }" class=" w-full p-5">
		<nav class="tabs flex flex-row  w-full divide-x divide-gray-500 font-bold text-green-800">
		  <a class="flex-1 p-5 text-center" :class="{ 'active': tab === 'photos' }" x-on:click.prevent="tab = 'photos'" href="#">Photos</a>
		  <a class="flex-1  p-5 text-center" :class="{ 'active': tab === 'videos' }" x-on:click.prevent="tab = 'videos'" href="#">Videos</a>
		</nav>

		<div x-show="tab === 'photos'">
			@livewire('image-gallery')
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
