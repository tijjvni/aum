<div class="w-full p-4 my-8 bg-white rounded-md lg:mb-16">

  @guest
    <h2 class="my-4 text-2xl font-bold">Browse Our Gallery</h2>
    <div class="grid grid-cols-1 gap-4 lg:gap-8 md:grid-cols-2 lg:grid-cols-3">
      @forelse ($galleries as $photo)
        <div class="relative overflow-hidden rounded-lg shadow cursor-pointer h-72" x-data="{ show: true }"
          @mouseenter="show = true">
          <img src="{{ $photo->getFirstMedia('galleries')->getUrl() }}"
            alt="{{ $photo->getFirstMedia('galleries')->name }}" class="object-cover object-center w-full h-full">
          <a x-cloak x-show="show" href="{{ route('gallery.show', [$photo->name]) }}"
            class="absolute bottom-0 block w-full p-4 text-lg font-semibold text-black uppercase transition duration-500 transform bg-white bg-opacity-50 lg:text-xl">
            {{ Str::limit($photo->name, 40, '...') }}</a>
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
      <form wire:submit.prevent='save' class="w-full p-4 space-y-4 bg-white rounded-md md:w-3/4 lg:w-1/2">
        <div class="w-full">
          <label for="">Event Title/Name</label>
          <input type="text" wire:model="name" class="w-full p-2 rounded">
          @error('name')
            <span class="text-sm text-red-500">{{ $message }}</span>
          @enderror
        </div>
        <div class="w-full">
          <label for="">Event Cover Image</label>
          <input type="file" wire:model="image" class="w-full p-2 border border-black rounded">
          @error('image')
            <span class="text-sm text-red-500">{{ $message }}</span>
          @enderror
        </div>
        <button class="px-8 py-2 text-white rounded-lg bg-primary">Upload</button>
      </form>
    </div>
    <div class="grid w-full gap-4 lg:gap-8 col-12 row grid-col-1 md:grid-cols-3 lg:grid-cols-3">
      @forelse ($galleries as $item)
        <div class="relative w-full overflow-hidden rounded-lg shadow-sm bg-gray-50 " x-data="{ open: @entangle('showDropdown') }">
          <img src="{{ $item->getFirstMedia('galleries')->getUrl() ?? '' }}"
            class="object-cover object-center w-full h-full">

          <a href="{{ route('gallery.add', [$item->id]) }}"
            class="absolute top-0 right-0 z-20 px-2 py-1 m-2 text-lg text-center text-white bg-green-600 rounded shadow-sm cursor-pointer">
            &plus;</a>

          <button wire:click="delete({{ $item->id }})"
            class="absolute bottom-0 left-0 z-20 px-2 py-1 m-2 text-lg text-center text-white bg-red-600 rounded shadow-sm cursor-pointer">
            &times;</button>
        </div>
      @empty
      @endforelse
    </div>
  @endauth
</div>
