<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Department;

class FetchFacultyDepartments extends Controller
{
    public function index()
    {
        $departments = Department::whereHas('faculty', function ($query) {
            $query->whereId(request()->input('faculty_id', 0));
        })->pluck('name', 'id');

        return response()->json($departments);
    }
}
