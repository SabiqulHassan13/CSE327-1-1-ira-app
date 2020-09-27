<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\User;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('teacher.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request->all();

        $this->validate($request, [
            'title'         => 'required',
            'user_id'       => 'required',
            'image'         => 'required|mimes:jpg,jpeg,png',
            'short_text'    => 'required',
            'long_text'     => 'required',
            'batch_no'      => 'required',
            'joining_code'  => 'required',
            'status'        => 'nullable',
            'started_at'    => 'required|date_format:Y-m-d',
        ]);

        $file = $request->file('image');
        if($file) {
            $fileName = time() . "." . $file->getClientOriginalExtension();
            $uploadPath = 'images/courses/';
            $file->move($uploadPath, $fileName);
        }
        else {
            $fileName = 'default-course.jpg';
        }
        
        Course::create([
            'title'         => $request->title,
            'slug'          => Str::slug($request->title),
            'user_id'       => $request->user_id,
            'image'         => $fileName,
            'short_text'    => $request->short_text,
            'long_text'     => $request->long_text,
            'batch_no'      => $request->batch_no,
            'joining_code'  => $request->joining_code,
            'status'        => $request->status,
            'started_at'    => $request->started_at,            
        ]);

        return redirect()->route('teacher.home')->with('success','Course created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $course = Course::where('id', $id)->first();

        return view('teacher.courses.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'title'         => 'required',
            'user_id'       => 'required',
            'image'         => 'nullable|mimes:jpg,jpeg,png',
            'short_text'    => 'required',
            'long_text'     => 'required',
            'batch_no'      => 'required',
            'joining_code'  => 'required',
            'status'        => 'nullable',
            'started_at'    => 'required|date_format:Y-m-d',
        ]);

        $course = Course::where('id', $id)->first();

        $file = $request->file('image');
        if($file) {
            unlink(public_path('images/courses/' . $course->image));

            $fileName = time() . "." . $file->getClientOriginalExtension();
            $uploadPath = 'images/courses/';
            $file->move($uploadPath, $fileName);
        }
        else {
            $fileName = $course->image;
        }
        
        $course->title         = $request->title;
        $course->slug          = Str::slug($request->title);
        $course->user_id       = $request->user_id;
        $course->image         = $fileName;
        $course->short_text    = $request->short_text;
        $course->long_text     = $request->long_text;
        $course->batch_no      = $request->batch_no;
        $course->joining_code  = $request->joining_code;
        $course->status        = $request->status;
        $course->started_at    = $request->started_at;  
        $course->save();     

        return redirect()->route('teacher.home')->with('success','Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
