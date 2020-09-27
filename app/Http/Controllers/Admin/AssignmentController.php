<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $assignments = Assignment::with(['course'])->paginate(5);

        return view('admin.assignments.index', ['assignments' => $assignments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $courses = Course::all();

        return view('admin.assignments.create', ['courses' => $courses]);
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
        // dd($request->all());

        Assignment::create([
            'title'         => $request->title,
            'slug'          => Str::slug($request->title),
            'description'   => $request->description,
            'course_id'     => $request->course_id,
            'file'          => $fileName,
            'due_at'        => $request->due_at,            
        ]);

        return redirect()->route('admin.assignments.index')->with('success','Assignment created successfully');
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
