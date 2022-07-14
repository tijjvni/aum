<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Programme;
use App\Models\ProgrammeOpportunity;

class ProgrammeController extends Controller
{
   public function index(Course $course)
    {
    	$programme = Programme::whereCourseId($course->id)->first();
    	$opportunities = ProgrammeOpportunity::whereProgrammeId($programme->id)->get();
    	// return $opportunities;
        return view('programmes', compact('course','programme','opportunities'));
    }
}
