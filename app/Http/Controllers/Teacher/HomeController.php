<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;

class HomeController extends Controller
{
    //
    public function dashboard() {
        return view('teacher.dashboard');
    }

    public function home() {
        $courses = Course::where('user_id', auth()->user()->id)->get();
        // return $courses;

        return view('teacher.home', ['courses' => $courses]);
    }
}
