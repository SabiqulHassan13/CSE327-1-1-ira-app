<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class FrontendController extends Controller
{
    //
    public function home() {
        return view('frontend.home.home');
    }

    public function about() {
        return view('frontend.about.about');
    }

    public function team() {
        return view('frontend.team.team');
    }

    public function contact() {
        return view('frontend.contact.contact');
    }

    public function singleCourse(Course $course) {
        return view('frontend.course.course', ['course' => $course]);
    }


}

