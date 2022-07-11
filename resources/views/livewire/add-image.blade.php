<div class="w-full p-4 my-8 bg-white rounded-md lg:mb-16">

  @guest
    <h2 class="my-4 text-2xl font-bold">Browse Our Gallery</h2>
    <div class="grid grid-cols-1 gap-4 lg:gap-8 md:grid-cols-2 lg:grid-cols-3">
      @forelse ($gallery->getMedia('galleries') as $photo)
        <div class="relative overflow-hidden rounded-lg shadow cursor-pointer">
          <img src="{{ $photo->getUrl() }}" alt="{{ $photo->name }}" class="object-cover object-center w-full h-full">
        </div>
      @empty
        <p class="text-lg font-medium">No photo in the galleries</p>
      @endforelse
    </div>
  @endguest

  @auth()
    <div class="p-4 w-100">
      @if (session('success'))
        <div
          class="z-50 flex items-center justify-between p-3 my-4 space-x-8 text-green-600 bg-white bg-opacity-50 border rounded-lg max-w-max backdrop-blur-md"
          x-data="{ show: true }">
          <p class="">{{ session('success') }}</p>
          <p class="text-xl text-black cursor-pointer" @click="show = false"> &times; </p>
        </div>
      @endif
      <form wire:submit.prevent='addImage' class="w-full p-4 space-y-4 bg-white rounded-md md:w-3/4 lg:w-1/2">
        <div class="w-full">
          <label for="">Add More Image</label>
          <input type="file" wire:model="image" class="w-full p-2 border border-black rounded">
          @error('image')
            <span class="text-sm text-red-500">{{ $message }}</span>
          @enderror
        </div>
        <button type="submit" class="px-8 py-2 text-white rounded-lg bg-primary">Upload</button>
      </form>
      <form wire:submit.prevent='update({{ $gallery->id }})'
        class="w-full p-4 space-y-4 bg-white rounded-md md:w-3/4 lg:w-1/2">
        <div class="w-full">
          <label class="text-2xl font-bold capitalize ">{{ $gallery->name }}</label>
          <input type="text" wire:model="name" class="w-full p-2 border border-black rounded">
          @error('name')
            <span class="text-sm text-red-500">{{ $message }}</span>
          @enderror
        </div>
        <button type="submit" class="px-8 py-2 text-white rounded-lg bg-primary">Update Title</button>
      </form>
    </div>
    <div class="grid grid-cols-1 gap-4 lg:gap-8 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4">
      @forelse ($gallery->getMedia('galleries') as $index => $item)
        <div class="relative p-2 rounded-lg shadow-sm max-h-max bg-gray-50">
          <img class="object-cover object-center w-full h-full" src="{{ $item->getUrl() ?? '' }}"
            alt="{{ $item->name }}">
          <a wire:click='removeImage({{ $index }})'
            class="absolute top-0 right-0 z-20 px-2 py-1 m-2 text-lg text-center text-white bg-red-600 rounded shadow-sm cursor-pointer">
            &times;</a>
        </div>
      @empty
      @endforelse
    </div>
  @endauth
</div>
