@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-md-12">     
        
        <div class="card ">
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
                <form action="{{ route('admin.courses.store') }}" method="POST">
                    @csrf

                    <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="short_text">Short Text</label>
                        <input type="text" name="short_text" class="form-control" id="short_text">
                    </div>
                    <div class="form-group">
                        <label for="short_text">Long Text</label>
                        <textarea class="form-control" name="long_text" id="long_text" cols="30" rows="10"></textarea>
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
                        <label for="role">Instructor</label>
                        <select class="custom-select" id="role" name="role_id">
                            <option selected>Choose an instructor </option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>                        
                            @endforeach
                            
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputFile">Course Cover Image</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        {{-- <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div> --}}
                        </div>
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
