@extends('layouts.frontend')
@section('title', 'faculties, departments and courses')
@section('contents')
  <div class="w-full space-y-12">
    <div class="w-full px-4 mx-auto md:px-2 lg:px-0">
      <div class="w-full bg-cover bg-center bg-black  text-white bg-[url('/img/r1.jpeg')] ">
        <div class="w-full py-8 bg-black bg-opacity-75 md:py-12 lg:py-24">
          <p class="mx-auto text-2xl font-bold text-center md:text-left max-w-7xl">Faculties, Department and Courses</p>
        </div>
      </div>
    </div>
    <div class="w-full px-4 md:px-2 lg:px-0 max-w-7xl mx-auto">
      <h1 class="text-2xl font-bold my-6 lg:text-3xl 2xl:text-4xl lg:font-extrabold">Checkout Our Faculties</h1>
    </div>
    <div
      class="grid justify-center w-full grid-cols-1 gap-8 px-4 mx-auto my-4 lg:gap-12 max-w-7xl md:px-2 lg:px-0 md:grid-cols-2 lg:grid-cols-3">
      @forelse (\App\Models\Faculty::with('departments')->get() as $faculty)
        <div class="space-y-6">
          <h1 class="font-xl lg:text-2xl 2xl:text-3xl font-bold 2xl:font-extrabold"><span
              class="text-red-600">{{ $loop->iteration }}. </span> College of {{ $faculty->college }}
          </h1>
          @foreach ($faculty->departments as $index => $department)
            <details class="p-4 open:pb-8 open:text-red-600 rounded-lg bg-gray-100"
              {{ $index == 0 ? 'open' : 'close' }}>
              <summary class="font-semibold cursor-pointer lg:font-bold text-xl">{{ $department->name }}</summary>
              <div class="p-2">
                <ul class="text-green-600 font-medium text-lg pl-4 list-inside list-disc">
                  @foreach ($department->courses as $course)
                    <li><a href="/programmes#{{ $course->id }}" class="">{{ $course->programmes }}</a></li>
                  @endforeach
                </ul>
              </div>
            </details>
          @endforeach

        </div>
      @empty
        <h1 class="capitalize">No faculties yet</h1>
      @endforelse

    </div>
    <div class="py-8 px-4 md:px-2 lg:px-0">
      <a href="/apply" class="block mx-auto max-w-max px-8 py-3 text-white bg-red-600">Apply Now</a>
    </div>

  </div>
@endsection
