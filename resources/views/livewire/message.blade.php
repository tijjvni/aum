<div>
  @guest
    <div
      class="z-20 grid w-full grid-cols-1 p-3 mx-auto bg-white bg-opacity-75 border lg:grid-flow-col max-w-7xl lg:grid-cols-2 rounded-xl">
      <div class="">
        @if (session('success'))
          <div x-show="open" x-init="setTimeout(() => { open = false }, 5000)"
            class="fixed inset-0 flex items-center justify-center w-full h-screen bg-black bg-opacity-50 Z-50"
            x-data="{ open: true }">
            <div
              class="relative flex flex-col items-center justify-center max-w-3xl py-8 space-x-4 space-y-8 border rounded-lg shadow max-min-sm bg-green-50">
              <p class="absolute top-0 right-0 px-2 py-1 m-2 text-4xl transition-all duration-300 bg-gray-100 rounded-full cursor-pointer hover:text-red-600"
                @click="open = false">&times;</p>
              <p class="mx-auto text-center text-green-600">
                <span class="mx-auto text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-14 w-14 bi bi-check2-circle"
                    viewBox="0 0 16 16">
                    <path
                      d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                    <path
                      d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                  </svg>
                </span>

              </p>
              <p class="px-4 ">{{ session('success') }}</p>

            </div>
          </div>
        @endif
        <h2 class="text-center yanone md:text-2xl lg:text-3xl xl:text-4xl text-primary">Contact Us</h2>
        <form wire:submit.prevent="save" class="py-3 m-0" method="POST">
          @csrf
          <div class="grid my-2 lg:grid-cols-2 lg:gap-2">
            <div class="form-group col-md-6">
              <input type="text" wire:model="name" id=""
                class="w-full p-3 my-1 font-medium text-gray-900 border border-green-600 rounded-lg shadow-sm focus:bg-gray-200 focus:ring-0 focus:border-0 focus:border-secondary-light placeholder-orange focus:outline-red-600 focus:bg-opacity-50 "
                placeholder="Name" value="{{ old('name') }}">
              @error('name')
                <span class="text-sm text-red-500"> {{ $message }} </span>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <input type="email" wire:model="email" id="email"
                class="w-full p-3 my-1 font-medium text-gray-900 border border-green-600 rounded-lg shadow-sm focus:bg-gray-200 focus:ring-0 focus:border-0 focus:border-secondary-light placeholder-orange focus:outline-red-600 focus:bg-opacity-50 "
                placeholder="Email">
              @error('email')
                <span class="text-sm text-red-500"> {{ $message }} </span>
              @enderror
            </div>

          </div>
          <div class="grid my-2 lg:grid-cols-2 lg:gap-2">
            <div class="form-group col-md-6">
              {{-- <input type="number" wire:model="phone" id=""
                class="w-full p-3 my-1 font-medium text-gray-900 border border-green-600 rounded-lg shadow-sm focus:bg-gray-200 focus:ring-0 focus:border-0 focus:border-secondary-light placeholder-orange focus:outline-red-600 focus:bg-opacity-50 "
                placeholder="Phone" value="{{ old('phone') }}"> --}}
              <div class="relative w-full p-0 my-1 overflow-hidden rounded">
                <input type="text" wire:model="phone"
                  class="w-full p-3 pl-16 font-medium text-gray-900 border border-green-600 rounded-lg shadow-sm focus:bg-gray-200 focus:ring-0 focus:border-0 focus:border-secondary-light placeholder-orange focus:outline-red-600 focus:bg-opacity-50 ">
                <span
                  class="absolute top-0 left-0 h-full px-2 py-3 mr-4 text-white bg-green-800 rounded-tl-md">+234</span>
              </div>
              @error('phone')
                <span class="text-sm text-red-500"> {{ $message }} </span>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <input type="text" wire:model="subject" id=""
                class="w-full p-3 my-1 font-medium text-gray-900 border border-green-600 rounded-lg shadow-sm focus:bg-gray-200 focus:ring-0 focus:border-0 focus:border-secondary-light placeholder-orange focus:outline-red-600 focus:bg-opacity-50 "
                placeholder="Subject" value="{{ old('subject') }}">
              @error('subject')
                <span class="text-sm text-red-500"> {{ $message }} </span>
              @enderror
            </div>

          </div>
          <div class="form-group">

            <textarea wire:model="message" id="message" cols="30" rows="10"
              class="w-full p-3 my-1 font-medium text-gray-900 border border-green-600 rounded-lg shadow-sm focus:bg-gray-200 focus:ring-0 focus:border-0 focus:border-secondary-light placeholder-orange focus:outline-red-600 focus:bg-opacity-50 "
              placeholder="Your Message here" value="{{ old('message') }}">{{ old('message') }}</textarea>
            @error('message')
              <span class="text-sm text-red-500"> {{ $message }} </span>
            @enderror

          </div>

          <button type="submit"
            class="float-right px-4 py-2 m-2 text-white duration-500 ease-in transform bg-red-600 border-red-600 rounded ">Send
            Message</button>
        </form>
      </div>
      <div class="p-4 col-lg-10 col-xl-6">
        <h2 class="text-center yanone md:text-2xl lg:text-3xl xl:text-4xl text-primary">Get in Touch</h2>
        <div class="grid h-full gap-1 pt-3 grid-row lg:h-1/2">
          <div class="transition duration-500 transform rounded hover:scale-100" data-aos="slide-left">
            <div class="flex items-center justify-start p-8 transition transform rounded h-3/4 max-150 hover:scale-100">
              <span class="flex items-center justify-start space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-12 h-12 text-green-600 bi bi-geo-alt"
                  viewBox="0 0 16 16">
                  <path
                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <p class="px-2 mt-2">No 24 Ahmadu Gonimi Road, Off Gombole, Old GRA Maiduguri, Borno State.</p>
              </span>
            </div>
          </div>
          <div class="transition duration-500 transform rounded hover:scale-100" data-aos="slide-up">
            <div class="flex items-center justify-start p-8 transition transform rounded h-3/4 max-150 hover:scale-100 ">
              <span class="flex items-center justify-start space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                  class="w-12 h-12 text-green-600 bi bi-telephone-inbound" viewBox="0 0 16 16">
                  <path
                    d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0zm-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg> <br>
                <a href="mailto:info@info@aum.edu.ng" class="text-dark">info@aum.edu.ng</a>
              </span>
            </div>

          </div>
          <div class="transition duration-500 transform rounded hover:scale-100" data-aos="slide-right">
            <div class="flex items-center justify-start p-8 transition transform rounded h-3/4 max-150 hover:scale-100">
              <span class="flex items-center justify-start space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                  class="w-12 h-12 text-green-600 bi bi-envelope-paper" viewBox="0 0 16 16">
                  <path
                    d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2H4Zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6v-2.55Zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v5.417Zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267v2.55Zm13 .566v5.734l-4.778-2.867L15 7.383Zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083l6.965 4.18ZM1 13.116V7.383l4.778 2.867L1 13.117Z" />
                </svg><br>
                <a href="tel:+234836295382" class="text-dark"> (+234) 803 629 5382</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endguest
  @auth()
  @endauth
</div>
