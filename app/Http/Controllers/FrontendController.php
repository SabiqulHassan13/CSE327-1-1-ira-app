<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Assignment;

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
        // $assignments = Assignment::with(['course'])->latest();
        // $assignments = Assignment::where('course_id', $course->id)->latest();

        // return view('frontend.course.course', ['course' => $course, 'assignments' => $assignments]);
        return view('frontend.course.course', ['course' => $course]);
    }



}

