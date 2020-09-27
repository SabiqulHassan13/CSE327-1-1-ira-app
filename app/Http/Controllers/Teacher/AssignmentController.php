<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
Use Illuminate\Support\Str;
Use App\Assignment;
Use App\Course;

class AssignmentController extends Controller
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
    public function create(Request $request)
    {
        //
        $course = Course::where('id', $request->course_id)->first();
        // return $course;

        return view('teacher.assignments.create', ['course' => $course]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        
        $this->validate($request, [
            'title'         => 'required',
            'description'   => 'required',
            'course_id'     => 'required',
            'file'          => 'nullable|mimes:jpg,jpeg,png,pdf,xlx,csv,docx,doc',            
            'due_at'        => 'nullable|date_format:Y-m-d',
        ]);


        $file = $request->file('file');
        if($file) {
            $fileName = time() . "." . $file->getClientOriginalExtension();
            $uploadPath = 'images/assignments/';
            $file->move($uploadPath, $fileName);
        }
        else {
            $fileName = '';
        }

        Assignment::create([
            'title'         => $request->title,
            'slug'          => Str::slug($request->title),
            'description'   => $request->description,
            'course_id'     => $request->course_id,
            'file'          => $fileName,
            'due_at'        => $request->due_at,            
        ]);

        return redirect()->route('teacher.home')->with('success','Assignment created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $assignment = Assignment::where('id', $id)->first();
        // $courses = Course::all();

        return view('teacher.assignments.edit', ['assignment' => $assignment]);
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
            'description'   => 'required',
            'course_id'     => 'required',
            'file'          => 'nullable|mimes:jpg,jpeg,png,pdf,xlx,csv,docx,doc',            
            'due_at'        => 'nullable|date_format:Y-m-d',
        ]);

        $assignment = Assignment::where('id', $id)->first();

        $file = $request->file('file');
        if($file) {
            // unlink('images/assignments/' . $assignment->file);
            unlink(public_path('images/assignments/' . $assignment->file));


            $fileName = time() . "." . $file->getClientOriginalExtension();
            $uploadPath = 'images/assignments/';
            $file->move($uploadPath, $fileName);
        }
        else {
            $fileName = $assignment->file;
        }

        $assignment->title         = $request->title;
        $assignment->slug          = Str::slug($request->title);
        $assignment->description   = $request->description;
        $assignment->course_id     = $request->course_id;
        $assignment->file          = $fileName;
        $assignment->due_at        = $request->due_at;           
        $assignment->save();           

        // return redirect()->route('teacher.home')->with('success','Assignment updated successfully');
        return redirect()->back()->with('success','Assignment updated successfully');
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
        $assignment = Assignment::where('id', $id)->first();

        if($assignment->file) {
            // unlink('images/assignment/' . $assignment->file);
            unlink(public_path('images/assignments/' . $assignment->file));
        }
        $assignment->delete();

        return redirect()->back()->with('success','Assignment deleted successfully');
    }
}
