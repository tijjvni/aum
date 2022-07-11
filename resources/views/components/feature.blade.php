<div class="w-full pt-8">
  <div
    class="grid justify-center w-full grid-cols-1 gap-8 px-4 mx-auto lg:gap-12 max-w-7xl md:px-2 lg:px-0 md:grid-cols-2 lg:grid-cols-3">
    <div x-data="{ hover: false }" @mouseenter="hover = true" :class="hover ? 'bg-black shadow-xl text-white' : ''"
      @mouseleave="hover = false"
      class="flex items-center justify-center gap-4 px-6 py-8 transition duration-500 ease-in-out shadow-lg translate">
      <span :class="hover ? 'text-white' : 'text-red-600'" class="block ">
        <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
          <path
            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
          </path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
          </path>
        </svg>
      </span>
      <div class="">
        <h1 class="text-2xl font-bold capitalize">Affordable Tuition</h1>
        <p class="text-gray-500">Highly competitive rates yet, premium academic delivery</p>
      </div>
    </div>
    <div x-data="{ hover: false }" @mouseenter="hover = true" :class="hover ? 'bg-black shadow-xl text-white' : ''"
      @mouseleave="hover = false"
      class="flex items-center justify-center gap-4 px-6 py-8 transition duration-500 ease-in-out shadow-lg translate">
      <span :class="hover ? 'text-white' : 'text-red-600'" class="block ">
        <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
      </span>
      <div class="">
        <h1 class="text-2xl font-bold capitalize">Best Among Equals</h1>
        <p class="text-gray-500">Best learning Environment with Globally acclaimed professional tutors</p>
      </div>
    </div>
    <div x-data="{ hover: false }" @mouseenter="hover = true" :class="hover ? 'bg-black shadow-xl text-white' : ''"
      @mouseleave="hover = false"
      class="flex items-center justify-center gap-4 px-6 py-8 transition duration-500 ease-in-out shadow-lg translate">
      <span :class="hover ? 'text-white' : 'text-red-600'" class="block ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-16 h-16 bi bi-graph-up-arrow"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z" />
        </svg>
      </span>
      <div class="">
        <h1 class="text-2xl font-bold capitalize">Success Driven</h1>
        <p class="text-gray-500">The experiential learning ensures professional student success.</p>
      </div>
    </div>
  </div>
</div>
