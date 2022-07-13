@extends('layouts.frontend')
@section('title', 'news and events')
@section('contents')
  <div class="w-full">
    <div class="w-full mx-auto md:px-2 lg:px-0">
      <div class="w-full bg-cover bg-black  text-white bg-[url('/img/bg.jpeg')] ">
        <div class="w-full py-8 bg-black bg-opacity-75 md:py-12 lg:py-24">
          <p class="mx-auto text-2xl font-bold text-center md:text-left max-w-7xl">News and Event</p>
        </div>
      </div>
    </div>
    <div
      class="grid justify-center w-full grid-cols-1 gap-8 px-4 mx-auto my-4 lg:gap-12 max-w-7xl md:px-2 lg:px-0 md:grid-cols-2 lg:grid-cols-3">
      @forelse ($news as $new)
        <div class="overflow-hidden transition duration-500 transform bg-white rounded-lg shadow hover:-translate-y-4"
          style="max-height: 500px">
          <div class="relative w-full h-64 overflow-hidden">
            <img src="{{ $new->image }}" alt="al-ansar images"
              class="object-cover w-full h-full transition duration-300 transform ">
            <p class="absolute bottom-0 right-0 p-2 m-2 text-sm text-white bg-red-500 lg:m-4">
              <span class="mr-2"><i class="bi bi-calendar-check-fill"></i></span><span
                class="">{{ $new->published_at }}</span>
            </p>
          </div>
          <div class="p-4 space-y-2">
            {{-- <p class="my-2 space-x-3 font-bold uppercase">
              <span class=""><i class="mr-2 text-red-600 bi bi-person-square"></i>Admin</span>
              <span class=""><i class="mr-2 text-red-600 bi bi-tags"></i></i>{{ $new->category }}</span>
            </p> --}}
            <a class="text-lg font-bold text-red-600 lg:text-xl 2xl:text-2xl hover:text-black"
              href="{{ route('news.show', [$new->slug]) }}">{{ Str::limit($new->title, 100, '...') }}</a>
            {{-- <div class="">
              <div>{!! Str::limit($new->content, 65, '...') !!}</div>
            </div> --}}
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
