<?php

namespace App\Http\Controllers\Admin;

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
        $assignment = Assignment::where('id', $id)->first();
        $pathToFile = 'images/assignments/' . $assignment->file;

        // dd($pathToFile);
        // return response()->file($pathToFile);
        // return response()->file(storage_path($pathToFile));
        // return Response::make($pathToFile, 200, array('Content-Type' => 'application/pdf'));
        return view('admin.assignments.show', ['assignment' => $assignment]);

    }

    public function download($id)
    {
        //
        $assignment = Assignment::where('id', $id)->first();
        $pathToFile = 'images/assignments/' . $assignment->file;

        // dd($pathToFile);
        return response()->download($pathToFile);
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
        $courses = Course::all();

        return view('admin.assignments.edit', ['assignment' => $assignment, 'courses' => $courses]);
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
        // return $request->all();

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
            unlink('images/assignments/' . $assignment->file);

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

        return redirect()->route('admin.assignments.index')->with('success','Assignment updated successfully');
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
        // dd($assignment->file);

        if($assignment->file) {
            // unlink('images/assignment/' . $assignment->file);
        }
        $assignment->delete();

        return redirect()->route('admin.assignments.index')->with('success','Assignment deleted successfully');
    }
}
