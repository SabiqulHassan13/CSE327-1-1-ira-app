@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-md-12">     
        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Create an Assignment</h3>
                <a href="{{ route('admin.assignments.index') }}" class="btn btn-success py-0">Assignment List</a>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- form start -->
                <form action="{{ route('admin.assignments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        <div class="form-group">
                            <label for="title">Assignment Title</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>

                        <div class="form-group">
                            <label for="description">Assignment Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="course_id">Course</label>
                            <select class="custom-select" id="course_id" name="course_id">
                                <option selected>Choose a course</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->title }}</option>                        
                                @endforeach                            
                            </select>
                        </div>
                                            
                        <div class="form-group">
                            <label for="file">Assignment File</label>
                            <input type="file" id="file" name="file" class="form-control">
                        </div>                    

                        <div class="form-group">
                            <label for="due_at">Due Date</label>
                            <input type="date" name="due_at" id="due_at" class="form-control">
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>        
        </div>
    </div>
</div>

@endsection
