<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Department;
use App\Models\Faculty;
use Livewire\Component;

class FacultiesDepartmentsCourses extends Component
{

    public $faculties;
    public $departments;
    public $courses;

    public $faculty = null;
    public $department = null;
    public $course = null;

    public function mount($course = null)
    {
        $this->faculties = Faculty::all();
        $this->departments = collect();
        $this->courses = collect();
        $this->course = $course;

        if (!is_null($course)) {
            $course = Course::with('department.faculty')->find($course);
            if ($course) {
                $this->courses = Course::where('department_id', $course->department_id)->get();
                $this->departments = Department::where('faculty_id', $course->department->faculty_id)->get();
                $this->selectedFaculty = $course->department->faculty_id;
                $this->selectedDepartment = $course->department_id;
            }
        }
    }

    public function render()
    {
        return view('livewire.faculties-departments-courses');
    }


    public function updatedFaculty($faculty)
    {
        $this->departments = Department::where('faculty_id', $faculty)->get();
        $this->department = NULL;
    }

    public function updatedDepartment($department)
    {
        if (!is_null($department)) {
            $this->courses = Course::where('department_id', $department)->get();
        }
    }

}
