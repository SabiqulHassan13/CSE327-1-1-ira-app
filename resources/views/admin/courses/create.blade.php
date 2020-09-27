@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-md-12">     
        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Create a Course</h3>
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
                <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        <div class="form-group">
                            <label for="title">Course Title</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                        
                        <div class="form-group">
                            <label for="role">Course Instructor</label>
                            <select class="custom-select" id="role" name="user_id">
                                <option selected>Choose an Instructor</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>                        
                                @endforeach                            
                            </select>
                        </div>
                                            
                        <div class="form-group">
                            <label for="imageFile">Course Cover Image</label>
                            <input type="file" id="imageFile" name="image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="short_text">Short Text</label>
                            <input type="text" name="short_text" class="form-control" id="short_text">
                        </div>

                        <div class="form-group">
                            <label for="short_text">Long Text</label>
                            <textarea class="form-control" name="long_text" id="long_text" cols="30" rows="7"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="batch_no">Batch No</label>
                            <input type="text" name="batch_no" class="form-control" id="batch_no">
                        </div>

                        <div class="form-group">
                            <label for="joining_code">Joining Code</label>
                            <input type="text" name="joining_code" class="form-control" id="joining_code">
                        </div>       
                        
                        <div class="form-group">
                            <label for="status">Publication Status</label>
                            <select class="form-control" name="status" id="status">
                                <option selected>Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="started_at">Starting Date</label>
                            <input type="date" name="started_at" id="started_at" class="form-control">
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
