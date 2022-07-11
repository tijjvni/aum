<div>

    <div class="w-full md:col-span-2">
        <div class="w-full">
            <label for="faculty" class="pb-2 font-medium">
            Faculty<span class="text-red-500">*</span>
            </label>
            <select type="text" wire:model="faculty" class="w-full p-2 capitalize rounded" id="faculty">
            <option value="select">Select Faculty</option>
            @foreach ($faculties as $faculty)
                <option value="{{ $faculty->id }}">College of {{ $faculty->college }}</option>
            @endforeach
            </select>
            @error('faculty')
            <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
    </div>
    
    @if (!is_null($faculty))
        <div class="w-full md:col-span-2">
            <label for="department" class="pb-2 font-medium">
                Departments<span class="text-red-500">*</span>
            </label>
            <select type="text" wire:model="department" class="w-full p-2 capitalize rounded" id="department">
                <option value="select">Select Department</option>
                @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
            @error('department')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

    @endif

    @if (!is_null($department))
        <div class="w-full md:col-span-2">
            <label for="course" class="pb-2 font-medium">
                Programme<span class="text-red-500">*</span>
            </label>
            <select type="text" wire:model="course" class="w-full p-2 capitalize rounded" id="course">
                <option value="select">Select Programmes</option>
                @foreach ($courses as $course)
                <option value="{{ $course->id }}">{{ $course->programmes }}</option>
                @endforeach
            </select>
            @error('course')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
    @endif

</div>
