@extends('layouts.app')
@section('title', 'news and events')
@section('contents')
  <div class="w-full p-4 mx-auto my-8 space-y-4 md:px-2 lg:px-0" x-data="{ form: false }">
    <div class="w-full py-4">
      <p class="px-6 py-2 text-base font-bold text-white rounded cursor-pointer max-w-max bg-primary" @click="form = !form"
        x-text="form == true ? 'Hide Form': 'Show form' "></p>
    </div>

    <form action="{{ route('news.store') }}" enctype="multipart/form-data"
      class="p-4 m-1 mx-auto space-y-4 bg-white rounded-md md:w-3/4 lg:w-full" method="POST" x-show="form">
      @csrf
      @method('POST')
      <div class="w-full">
        <label for="">Blog Title</label>
        <input type="text" value="{{ old('title') }}" name="title" class="w-full p-2 border border-black rounded">
        @error('title')
          <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <div class="w-full">
        <label for="">Category</label>
        <input type="text" value="{{ old('category') }}" name="category" class="w-full p-2 border border-black rounded">
        @error('category')
          <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <div class="w-full">
        <label for="">Date</label>
        <input type="date" value="{{ old('published_at') }}" name="published_at"
          class="w-full p-2 border border-black rounded">
        @error('published_at')
          <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <div class="w-full">
        <label for="">Add New Image</label>
        <input type="file" value="{{ old('image') }}" name="image" class="w-full p-2 border border-black rounded">
        @error('image')
          <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <div class="w-full">
        <label for="">Blog Content</label>
        <textarea value="{!! old('content') !!}" name="content" class="w-full p-2 border border-black rounded">
        {!! old('content', 'your content here') !!}</textarea>
        @error('content')
          <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <button type="submit" class="px-8 py-2 text-white rounded-lg bg-primary">Save</button>
    </form>

    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 md:grid-cols-2">
      @forelse ($news as $new)
        <div class="p-4 transition duration-500 transform bg-white rounded hover:-translate-y-4">
          <div class="relative w-full h-64 overflow-hidden rounded">
            <img src="{{ $new->getFirstMedia('news')->getUrl() ?? '' }}" alt="al-ansar images"
              class="object-cover w-full h-full transition duration-300 transform ">
            <p class="absolute top-0 right-0 flex flex-col p-2 m-2 space-y-3 text-sm font-medium text-white lg:m-4">
              <a href="{{ route('news.edit', [$new->slug]) }}"
                class="block px-2 py-2 text-center transition duration-300 transform bg-blue-500 rounded shadow-sm hover:bg-opacity-75">Edit</a>
            </p>
          </div>
          <div class="space-y-2">
            <p class="my-2 space-x-3 font-bold uppercase">
            <form action="{{ route('news.destroy', [$new->id]) }}" method="post" class="block text-white">
              @csrf
              @method('delete')
              <button type="submit"
                class="px-2 py-2 text-center transition duration-300 transform bg-red-600 rounded shadow-sm hover:bg-opacity-75">Delete</button>
            </form>
            </p>
            <a class="text-xl font-bold text-red-600 lg:text-2xl hover:text-black"
              href="{{ route('news.show', [$new->slug]) }}">{{ $new->title }}</a>
            {{-- <div class="">{!! Str::limit($new->content, 80, '...') !!}</div> --}}
          </div>
        </div>
      @empty
        <p class="p-4 text-2xl font-bold capitalize">No news yet</p>
      @endforelse
    </div>
    <div class="flex items-center justify-center">
      <p class="text-lg">{{ $news->links() }}</p>
    </div>
  </div>
@endsection
