@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-md-12">     
        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Edit a Course</h3>
                <a href="{{ route('admin.courses.index') }}" class="btn btn-success py-0">Course List</a>
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
                <form action="{{ route('admin.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="form-group">
                            <label for="title">Course Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ $course->title }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="user_id">Course Instructor</label>
                            <select class="custom-select" id="user_id" name="user_id">
                                <option selected>Choose an Instructor</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $course->user_id == $user->id ? 'selected' : ''}}>{{ $user->name }}</option>                        
                                @endforeach                            
                            </select>
                        </div>
                                            
                        <div class="form-group">
                            <label for="imageFile">Course Cover Image</label>
                            <input type="file" id="imageFile" name="image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="short_text">Short Text</label>
                            <input type="text" name="short_text" class="form-control" id="short_text" value="{{ $course->short_text }}">
                        </div>

                        <div class="form-group">
                            <label for="short_text">Long Text</label>
                            <textarea class="form-control" name="long_text" id="long_text" cols="30" rows="7">{{ $course->long_text }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="batch_no">Batch No</label>
                            <input type="text" name="batch_no" class="form-control" id="batch_no" value="{{ $course->batch_no }}">
                        </div>

                        <div class="form-group">
                            <label for="joining_code">Joining Code</label>
                            <input type="text" name="joining_code" class="form-control" id="joining_code" value="{{ $course->joining_code }}">
                        </div>       
                        
                        <div class="form-group">
                            <label for="status">Publication Status</label>
                            <select class="form-control" name="status" id="status">
                                <option selected>Select Publication Status</option>
                                <option value="1" {{ $course->status == 1 ? 'selected' : ''}}>Published</option>
                                <option value="0" {{ $course->status == 0 ? 'selected' : ''}}>Unpublished</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="started_at">Starting Date</label>
                            <input type="date" name="started_at" id="started_at" class="form-control" value="{{ $course->started_at }}">
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
