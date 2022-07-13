<div class="w-full bg-cover">
  <div class="w-full py-4 space-y-8 bg-white lg:py-8">
    <div class="w-full px-4 mx-auto space-y-8 md:px-2 lg:px-0 max-w-7xl">
      <h1 class="text-lg font-bold text-center text-red-600 2xl:text-3xl lg:text-2xl md:text-xl">_News and Events_</h1>
    </div>
    <div
      class="grid justify-center w-full grid-cols-1 gap-8 px-4 mx-auto lg:gap-12 max-w-7xl md:px-2 lg:px-0 md:grid-cols-2 lg:grid-cols-3">
      @forelse (\App\Models\News::orderBy('published_at', 'desc')->take(3)->get() as $news)
        <div class="transition duration-500 transform rounded shadow-sm hover:-translate-y-4" style="max-height: 620px">
          <div class="relative w-full h-64 overflow-hidden">
            <img src="{{ $news->image }}" alt="al-ansar images"
              class="object-cover object-center w-full h-full transition duration-300 transform ">
          </div>
          <div class="space-y-2">
            <a class="block px-3 py-4 text-lg font-semibold lg:text-xl hover:text-black"
              href="{{ route('news.show', [$news->slug]) }}">{{ Str::limit($news->title, 70, '...') }}</a>
          </div>
        </div>
      @empty
        <p class="mx-auto my-8 text-xl font-bold text-center text-yellow-500 lg:text-3xl">No news update!!!</p>
      @endforelse
    </div>

    <a href="/news"
      class="block px-8 py-4 mx-auto my-8 text-xl font-medium text-center text-red-600 uppercase transition duration-300 border-2 border-red-500 rounded shadow-sm hover:text-white hover:bg-red-500 max-w-max">See
      all
      News</a>
  </div>
</div>
