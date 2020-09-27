<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;

class EnrolmentController extends Controller
{
    //

    public function create(Course $course) {
        // $user_id = auth()->user()->id;

        return view('student.enrolments.create', ['course' => $course]);
    }

    public function store(Request $request, Course $course) {

        // $course->enrolments;
    }

}
