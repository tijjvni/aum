<div class="w-full p-4 my-8 bg-white rounded-md lg:mb-16" x-data="{ form: @entangle('form') }">
  <div class="flex">
    <button class="button px-6 py-2 rounded bg-primary text-white" @click="form = true">Add Receipt</button>
  </div>
  <div class="flex justify-between my-4 items-center mb-3 px-2">
    <input type="text"
      class="px-3 py-1 border-2 transition duration-500 border-green-600 rounded-md placeholder-gray-400 text-sm"
      wire:model="search">
    <form action="">
      <select wire:model="perPage" id=""
        class="px-3 py-1 border-2 transition duration-500 border-green-600 rounded-md placeholder-gray-400 text-sm">
        <option>5</option>
        <option>10</option>
        <option>20</option>
        <option>50</option>
        <option>100</option>
      </select>
    </form>
  </div>
  <!-- The Modal -->
  <div x-cloak class="fixed inset-0 z-50 w-screen h-100 justify-around items-center bg-black bg-opacity-60"
    wire:ignore.self x-show="form">
    <div class="w-full md:max-w-md p-4 lg:max-w-lg mx-auto my-12 lg:mt-24 rounded-lg shadow bg-white"
      @click.away="form = false">
      <div class="">
        <!-- Modal Header -->
        <div class="flex justify-between items-center ">
          <h4 class="modal-title text-lg font-medium">
            @if ($update)
              Edit Payment details
            @else
              Add new Payment
            @endif
          </h4>
          <button type="button" class="close" data-dismiss="modal" @click="form = false">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="">
          <form wire:submit.prevent=@if ($update) 'update' @else 'save' @endif
            class="w-ful row overflow-y-auto h-96 " enctype="multipart/form-data">
            <div class="p-3 w-full text-gray-500  font-bold items-center align-middle">
              <div class="mb-3">
                <label for="" class="mb-1 font-normal text-gray-600 text-sm">Amount Paid</label>
                <input type="text" wire:model.defer="amount"
                  class="px-2 py-1 rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-medium "
                  placeholder="amount">
                @error('amount')
                  <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="" class="capitalize mb-1 font-normal text-gray-600 text-sm">Payment Method</label>
                <select wire:model.defer="payment_method"
                  class="px-2 py-2 text-sm rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-semibold">
                  @foreach (['Online', 'Transfer', 'Bank Deposit', 'Cash'] as $method)
                    <option value="{{ $method }}" class="capitalize">{{ $method }}
                    </option>
                  @endforeach
                </select>
                @error('payment_method')
                  <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="" class="mb-1 font-normal text-gray-600 text-sm">Name</label>
                <input type="text" wire:model.defer="name"
                  class="p-2 rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-medium "
                  placeholder="name...">
                @error('name')
                  <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
                @enderror
              </div>

              <div class="mb-3">
                <label for="" class="mb-1 font-normal text-gray-600 text-sm">Telephone</label>
                <input type="text" wire:model.defer="phone"
                  class="p-2 rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-medium ">
                @error('phone')
                  <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="" class="mb-1 font-normal text-gray-600 text-sm">Email Address</label>
                <input type="text" wire:model.defer="email"
                  class="p-2 rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-medium ">
                @error('email')
                  <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="" class="capitalize mb-1 font-normal text-gray-600 text-sm">Faculty</label>
                <select wire:model.defer="faculty"
                  class="px-2 py-2 text-sm rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-semibold">
                  @foreach ($faculties as $faculty)
                    <option wire:click="setFaculty({{ $faculty->id }})" value="{{ $faculty->college }}"
                      class="capitalize">{{ $faculty->college }}
                    </option>
                  @endforeach
                </select>
                @error('faculty')
                  <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="" class="capitalize mb-1 font-normal text-gray-600 text-sm">Courses</label>
                <select wire:model.defer="course"
                  class="px-2 py-2 text-sm rounded focus-within: focus:outline-none focus:border-green-600 w-full border-2 placeholder-gray-400 font-semibold">
                  <option value="select" class="capitalize">Select course</option>
                  @foreach ($courses as $course)
                    <option value="{{ $course->name }}" class="capitalize">{{ $course->name }}
                    </option>
                  @endforeach
                </select>
                @error('course')
                  <span class="text-xs text-red-600 font-normal">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-3 my-auto align-middle text-right lg:col-span-2">
                @if ($update)
                  <button type="submit"
                    class="rounded align-middle border-2 border-green-500 bg-green-600 hover:opacity-80 text-white py-2 text-center px-3 text-sm  font-medium">Update</button>
                @else
                  <button type="submit"
                    class="rounded align-middle border-2 border-green-500 bg-green-600 hover:opacity-80 text-white py-2 text-center px-3 text-sm  font-medium">Save</button>
                @endif
              </div>
            </div>
          </form>
        </div>

        {{-- <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
          </div> --}}

      </div>
    </div>
  </div>
  <table class="w-full my-8">
    <thead>
      <tr class="p-2 bg-gray-100 text-left text-gray-500">
        <th></th>
        <th class="p-2">Name</th>
        <th class="p-2">Academics</th>
        <th class="p-2">Reference</th>
        <th class="p-2">Email</th>
        <th class="p-2">Phone</th>
        <th class="p-2">Amount</th>
        <th class="p-2"></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($payments as $receipt)
        <tr class="font-medium w-full even:bg-gray-50">
          <td>{{ $loop->iteration }}</td>
          <td class="p-2 capitalize">{{ $receipt->name }}</td>
          <td class="p-2 capitalize">
            <p class=""><span class="font-semibold">Faculty: </span>Faculty of {{ $receipt->faculty }}
            </p>
            <p class=""><span class="font-semibold">Course: </span>{{ $receipt->course }}</p>
          </td>
          <td>{{ $receipt->receipt_id }}</td>
          <td>{{ $receipt->email }}</td>
          <td>{{ $receipt->phone }}</td>
          <td> <span
              class="py-1 px-2 bg-green-600 text-white rounded">&#8358;{{ moneyFormat($receipt->amount) }}</span>
          </td>
          <td>
            <p class="flex items-center space-x-2 cursor-pointer">
              <span class="py-1 px-2 bg-blue-600 text-white rounded">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                  class="bi bi-eye" viewBox="0 0 16 16">
                  <path
                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg>
              </span>
              <span class="py-1 px-2 bg-green-600 text-white rounded">
                Edit
              </span>
            </p>
          </td>
        </tr>
      @empty
        <p class="font-medium">No payments yet</p>
      @endforelse
    </tbody>
  </table>
</div>
