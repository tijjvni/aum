<div x-data="{ 'showImage': false, 'url': @entangle('imageUrl') }">
	<section class="container mx-auto">
	    <div class="grid-cols-3 p-5 space-y-2 bg-yellow-50 lg:space-y-0 lg:grid lg:gap-3 lg:grid-rows-3">
	        <div class="w-full rounded cursor-pointer relative"  @click="showImage = true; url = 'img/gallery/6.jpeg' ">
	            <img  src="{{ asset('img/gallery/6.jpeg') }}"
	                alt="image">
	            <div class="absolute bottom-0 left-0 right-0 px-4 py-2 bg-gray-800 opacity-70">
		            <h3 class="text-xl text-white font-bold">Al-Ansar University</h3>
		        </div>
	        </div>


	        <div class="w-full col-span-2 row-span-2 rounded cursor-pointer relative" @click="showImage = true; url = 'img/gallery/4.jpeg' ">
	            <img  src="{{ asset('img/gallery/4.jpeg') }}"
	                alt="image">
	            <div class="absolute bottom-0 left-0 right-0 px-4 py-2 bg-gray-800 opacity-70">
		            <h3 class="text-xl text-white font-bold">Science Lab</h3>
		        </div>
	        </div>
	        <div class="w-full rounded cursor-pointer relative"  @click="showImage = true; url = 'img/gallery/3.jpeg' "">
	            <img  src="{{ asset('img/gallery/3.jpeg') }}"
	                alt="image">
	            <div class="absolute bottom-0 left-0 right-0 px-4 py-2 bg-gray-800 opacity-70">
		            <h3 class="text-xl text-white font-bold">Computer Lab</h3>
		        </div>
	        </div>
	        <div class="w-full rounded cursor-pointer relative"   @click="showImage = true; url = 'img/gallery/2.jpeg' ">
	            <img  src="{{ asset('img/gallery/2.jpeg') }}"
	                alt="image">
	            <div class="absolute bottom-0 left-0 right-0 px-4 py-2 bg-gray-800 opacity-70">
		            <h3 class="text-xl text-white font-bold">Staff Conference Room</h3>
		        </div>
	        </div>
	        <div class="w-full rounded cursor-pointer relative" @click="showImage = true; url = 'img/gallery/5.jpeg' ">
	            <img  src="{{ asset('img/gallery/5.jpeg') }}"
	                alt="image">
	            <div class="absolute bottom-0 left-0 right-0 px-4 py-2 bg-gray-800 opacity-70">
		            <h3 class="text-xl text-white font-bold">Senate Building</h3>
		        </div>
	        </div>
	        <div class="w-full rounded cursor-pointer relative" @click="showImage = true; url = 'img/gallery/1.jpeg' ">
	            <img src="{{ asset('img/gallery/1.jpeg') }}"
	                alt="image">
	            <div class="absolute bottom-0 left-0 right-0 px-4 py-2 bg-gray-800 opacity-70">
		            <h3 class="text-xl text-white font-bold">Campus Premises</h3>
		        </div>
	        </div>
	    </div>
	</section>


    <div x-show="showImage" >

		<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
		
			<div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

			<div class="fixed z-10 inset-0 overflow-y-auto">
		    	<div class="flex items-center sm:items-center justify-center min-h-full p-4 text-center sm:p-0" >
		      		<div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 max-w-3xl sm:w-full" @click.away="showImage = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
    					<livewire:image-viewer key="{{ now() }}" :url="$imageUrl" />
		      		</div>
		    	</div>
			</div>
		</div>

    </div>

	@section('scripts')

		<script >
			function viewImage(element){
				var url = element.attributes['url'].value;
				// alert(url);
				@this.url = url;
				@this.showImage = true;
			}
		</script>

	@endsection
</div>
