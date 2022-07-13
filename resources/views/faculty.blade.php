<div class="w-full py-8 space-y-8 bg-gray-200 lg:py-12">
  <div class="w-full px-4 mx-auto space-y-6 md:px-2 lg:px-0 max-w-7xl">
    <h1 class="text-lg font-bold text-center text-red-600 md:text-xl">_Our Faculties_</h1>
    <div class="flex justify-center">
      <p class="text-4xl font-bold text-center lg:text-5xl leading-18">A look at some of our faculties.</p>
    </div>
  </div>
  <div
    class="grid justify-center w-full grid-cols-1 gap-8 px-4 mx-auto lg:gap-12 max-w-7xl md:px-2 lg:px-0 md:grid-cols-2 lg:grid-cols-3">
    <div x-data="{ hover: false, bimage: 'bg-1' }" @mouseenter="hover = true" :class="hover ? 'bg-black shadow-xl text-white ' : 'bg-white'"
      @mouseleave="hover = false" class="p-4 transition duration-500 transform shadow-lg hover:-translate-y-4 translate">
      <div :class="hover ? 'backdrop-brightness-5' : ''"
        class="flex items-center justify-center bg-black bg-opacity-50 w-full h-full gap-4 p-4 px-6 py-8 transition duration-500 bg-blend-hue hover:bg-opacity-100 ease-in-out bg-center bg-cover bg-[url('/img/s2.jpeg')] aspect-video translate">
        <span :class="hover ? 'text-white' : 'text-red-600'" class="block ">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-heart-pulse h-16 w-16"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01L8 2.748ZM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5Zm8.252-6.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162l-1.874-4.686Z" />
          </svg>
        </span>

        <a href="/faculty" class="space-y-2 text-white">
          <h1 class="text-2xl font-bold capitalize">College of medicine and health Science</h1>
          <p class="font-bold text-gray-100">5 Departments & 5 courses</p>
        </a>
      </div>
    </div>

    <div x-data="{ hover: false, bimage: 'bg-1' }" @mouseenter="hover = true"
      :class="hover ? 'bg-black shadow-xl text-white ' : 'bg-white'" @mouseleave="hover = false"
      class="p-4 transition duration-500 transform shadow-lg hover:-translate-y-4 translate">
      <div :class="hover ? 'backdrop-brightness-5' : ''"
        class="flex items-center justify-center bg-black bg-opacity-50 w-full h-full gap-4 p-4 px-6 py-8 transition duration-500 bg-blend-hue hover:bg-opacity-100 ease-in-out bg-center bg-cover bg-[url('/img/s4.jpeg')] aspect-video translate">
        <span :class="hover ? 'text-white' : 'text-red-600'" class="block ">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-16 h-16 bi bi-graph-up-arrow"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z" />
          </svg>
        </span>
        <a href="/faculty" class="space-y-2 text-white">
          <h1 class="text-2xl font-bold capitalize">College of Arts, Management and social sciences</h1>
          <p class="font-bold text-gray-100">7 Departments & 10 courses</p>
        </a>
      </div>
    </div>
    <div x-data="{ hover: false, bimage: 'bg-1' }" @mouseenter="hover = true"
      :class="hover ? 'bg-black shadow-xl text-white ' : 'bg-white'" @mouseleave="hover = false"
      class="p-4 transition duration-500 transform shadow-lg hover:-translate-y-4 translate">
      <div :class="hover ? 'backdrop-brightness-5' : ''"
        class="flex items-center justify-center bg-black bg-opacity-50 w-full h-full gap-4 p-4 px-6 py-8 transition duration-500 bg-blend-hue hover:bg-opacity-100 ease-in-out bg-center bg-cover bg-[url('/img/s3.jpeg')] aspect-video translate">
        <span :class="hover ? 'text-white' : 'text-red-600'" class="block ">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-globe w-16 h-16" viewBox="0 0 16 16">
            <path
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
          </svg>
        </span>
        <a href="/faculty" class="block space-y-2 text-white cursor-pointer">
          <h1 class="text-2xl font-bold capitalize">College of Science, information and Communication Technology</h1>
          <p class="font-bold text-gray-100">5 Departments & 8 courses</p>
        </a>
      </div>
    </div>
  </div>
  <a href="/faculty" class="block px-8 py-3 mx-auto font-medium text-white bg-red-600 border-red-600 max-w-max"> More on faculties</a>
</div>
