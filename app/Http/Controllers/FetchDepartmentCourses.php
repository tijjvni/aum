<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class FetchDepartmentCourses extends Controller
{
    public function index()
    {
        $courses = Course::whereHas('department', function ($query) {
            $query->whereId(request()->input('department_id', 0));
        })->pluck('programmes', 'id');

        return response()->json($courses);
    }
}
