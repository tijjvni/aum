@extends('layouts.app')
@section('title', $news->title)
@section('contents')
  <div class="w-full p-4 my-8 space-y -4mx-auto md:px-2 lg:px-0" x-data="{ form: true }">
    <div class="w-full py-4">
      <p class="px-6 py-2 text-base font-bold text-white rounded cursor-pointer max-w-max bg-primary" @click="form = !form"
        x-text="form == true ? 'Hide Form': 'Show form' "></p>
    </div>
    <form action="{{ route('news.update', [$news->slug]) }}" enctype="multipart/form-data"
      class="p-4 m-1 mx-auto space-y-4 bg-white rounded-md md:w-3/4 lg:w-full" method="POST" x-show="form">
      @csrf
      @method('PUT')
      <div class="w-full">
        <label for="">Blog Title</label>
        <input type="text" value="{{ $news->title ?? old('title') }}" name="title"
          class="w-full p-2 border border-black rounded">
        @error('title')
          <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <div class="w-full">
        <label for="">Category</label>
        <input type="text" value="{{ $news->category ?? old('category') }}" name="category"
          class="w-full p-2 border border-black rounded">
        @error('category')
          <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <div class="w-full">
        <label for="">Date</label>
        <input type="date" value="{{ $news->published_at ?? old('published_at') }}" name="published_at"
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
        <textarea value="{{ $news->content ?? old('content') }}" name="content"
          class="w-full py-2 border border-black rounded">
        {!! $news->content !!}</textarea>
        @error('content')
          <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <button type="submit" class="px-8 py-2 text-white rounded-lg bg-primary">Update News</button>
    </form>
  </div>
@endsection
