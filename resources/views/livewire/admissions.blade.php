<div>
  @guest
    <div class="relative w-full py-12 mx-auto my-8 bg-whit max-w-7xl">
      @if (session('success'))
        <div x-show="open" x-init="setTimeout(() => { open = false }, 5000)"
          class="fixed inset-0 z-50 flex items-center justify-center w-full h-screen bg-black bg-opacity-50"
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
      @else
        <div class="flex justify-center w-full gap-4 mx-auto align-middle ">
          <div class="p-4 bg-gray-100 rounded-md cursor-pointer">
            <h1 class="my-4 text-2xl font-bold">Application Form</h1>
            <form wire:submit.prevent='save' class="grid w-full grid-cols-1 gap-4 mx-auto space-y-4 lg:grid-cols-2">
              <div class="w-full md:col-span-2">
                <label for="" class="pb-2 font-medium">
                  <pre>First Name  <span class="text-red-500">*</span></pre>
                </label>
                <input type="text" wire:model="name" class="w-full p-2 rounded">
                @error('name')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full ">
                <label for="" class="pb-2 font-medium">
                  <pre>Last Name <span class="text-red-500">*</span></pre>
                </label>
                <input type="text" wire:model="last_name" class="w-full p-2 rounded">
                @error('last_name')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full ">
                <label for="" class="pb-2 font-medium">
                  Middle Name
                </label>
                <input type="text" wire:model="middle_name" class="w-full p-2 rounded">
                @error('middle_name')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full">
                <label for="" class="pb-2 font-medium">
                  Gender<span class="text-red-500">*</span>
                </label>
                <select type="text" wire:model="gender" class="w-full p-2 capitalize rounded">
                  <option value="select">Select Gender</option>
                  @foreach (['male', 'female'] as $gender)
                    <option value="{{ $gender }}">{{ $gender }}</option>
                  @endforeach
                </select>
                @error('gender')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full">
                <label for="" class="pb-2 font-medium">Email

                  <span class="text-red-500">*</span>
                </label>
                <input type="text" wire:model="email" class="w-full p-2 rounded">
                @error('email')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full">
                <label for="" class="pb-2 font-medium capitalize">phone

                  <span class="text-red-500">*</span>
                </label>
                <div class="relative w-full p-0 overflow-hidden rounded">
                  <input type="text" wire:model="phone" class="w-full py-[11px] pl-16 h-full rounded">
                  <span
                    class="py-[11px] top-0 left-0 bg-green-800 px-2 text-white rounded-tl-md mr-4 absolute">+234</span>
                </div>
                @error('phone')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full">
                <label for="" class="pb-2 font-medium capitalize">Date of Birth
                  <span class="text-red-500">*</span>
                </label>
                <input type="date" wire:model="dob" class="w-full p-2 rounded">
                @error('dob')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full">
                <label for="" class="pb-2 font-medium capitalize">Address
                  <span class="text-red-500">*</span>
                </label>
                <input type="text" wire:model="address" class="w-full p-2 rounded">
                @error('address')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full">
                <label for="" class="pb-2 font-medium">
                  Nationality<span class="text-red-500">*</span>
                </label>
                <select type="text" wire:model="nationality" class="w-full p-2 capitalize rounded">
                  <option value="select">Select Country</option>
                  @foreach ($countries as $country)
                    <option value="{{ $country }}">{{ $country }}</option>
                  @endforeach
                </select>
                @error('nationality')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>

              <div class="w-full">
                <label for="" class="pb-2 font-medium capitalize">Parent/Guardian name
                  <span class="text-red-500">*</span>
                </label>
                <input type="text" wire:model="guardian_name" class="w-full p-2 rounded">
                @error('guardian_name')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full">
                <label for="" class="pb-2 font-medium capitalize">Parent/Guardian email
                  <span class="text-red-500">*</span>
                </label>
                <input type="text" wire:model="guardian_email" class="w-full p-2 rounded">
                @error('guardian_email')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full">
                <label for="" class="pb-2 font-medium capitalize">Parent/Guardian phone
                  <span class="text-red-500">*</span>
                </label>
                <div class="relative w-full p-0 overflow-hidden rounded">
                  <input type="text" wire:model="guardian_phone" class="w-full py-[11px] pl-16 h-full rounded">
                  <span
                    class="py-[11px] top-0 left-0 bg-green-800 px-2 text-white rounded-tl-md mr-4 absolute">+234</span>
                </div>
                @error('guardian_phone')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full">
                <label for="" class="pb-2 font-medium">
                  State of Origin<span class="text-red-500">*</span>
                </label>
                <select type="text" wire:model="state" class="w-full p-2 capitalize rounded">
                  <option value="select">Select State</option>
                  @foreach ($states as $state)
                    <option value="{{ $state }}">{{ $state }}</option>
                  @endforeach
                </select>
                @error('state')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>


              @livewire('faculties-departments-courses', [])





              <div class="w-full">
                <label for="" class="pb-2 font-medium">
                  Application Type<span class="text-red-500">*</span>
                </label>
                <select type="text" wire:model="type" class="w-full p-2 capitalize rounded">
                  <option value="select">Select Application Type</option>
                  @foreach (['UTME', 'Transfer Student'] as $type)
                    <option value="{{ $type }}">{{ $type }}</option>
                  @endforeach
                </select>
                @error('type')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full">
                <label for="" class="pb-2 font-medium capitalize">Jamb RegNo<span class="text-red-500">*</span>
                </label>
                <input type="text" wire:model="jamb_regno" class="w-full p-2 rounded">
                @error('jamb_regno')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
              <div class="w-full">
                <label for="" class="pb-2 font-medium capitalize">Jamb Score<span class="text-red-500">*</span>
                </label>
                <input type="number" max="400" min="80" wire:model="jamb_score" class="w-full p-2 rounded">
                @error('jamb_score')
                  <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>

              <button type="submit"
                class="px-8 py-2 text-white bg-red-600 rounded-lg lg:col-span-2 bg-primary">Submit</button>

            </form>
          </div>
      @endif
    @endguest
    @auth()
    @endauth

    @section('scripts')
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
          $(document).ready(function () {
              $('#faculty').change(function () {
                  var $department = $('#department');
                  $.ajax({
                      url: "{{ route('admission.fetch.departments') }}",
                      data: {
                          faculty_id: $(this).val()
                      },
                      success: function (data) {
                          $department.html('<option value="" selected>Choose Department</option>');
                          $.each(data, function (id, name) {
                              $department.append('<option value="' + id + '">' + name + '</option>');
                          });
                      }
                  });
                  $('#department, #course').val("");
                  $('#department').removeClass('hidden');
              });
              $('#department').change(function () {
                  var $course = $('#course');
                  $.ajax({
                      url: "{{ route('admission.fetch.courses') }}",
                      data: {
                          department_id: $(this).val()
                      },
                      success: function (data) {
                          $city.html('<option value="" selected>Choose course</option>');
                          $.each(data, function (id, programmes) {
                              $city.append('<option value="' + id + '">' + programmes + '</option>');
                          });
                      }
                  });
                  $('#course').removeClass('hidden');
              });
          });
      </script>
  @endsection


  </div>
