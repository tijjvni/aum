<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function index()
    {
        return view('events.index');
    }

    public function show(Gallery $event)
    {
        return view('events.show', compact(['event']));
    }
}