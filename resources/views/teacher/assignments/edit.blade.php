@extends('frontend.master')

@section('content')
  <div class="site-section-cover overlay" style="background-image: url('{{ asset('frontend') }}/images/hero_bg.jpg');">
        
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
          <h1>Techer Course Dashboard</h1>
        </div>
      </div>
    </div>
  </div>


<div class="site-section bg-light">
<div class="container">
    <div class="row mb-5">
    <div class="col-md-12">     
    
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Edit an Assignment</h3>
                <a href="{{ route('teacher.home') }}" class="btn btn-success">Course Dashboard</a>
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
                <form action="{{ route('teacher.assignments.update', $assignment->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="form-group">
                            <label for="title">Assignment Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ $assignment->title }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Assignment Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{ $assignment->description }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="course_id">Course</label>
                            <select class="custom-select" id="course_id" name="course_id">
                                <option value="{{ $assignment->course->id }}" selected>{{ $assignment->course->title }}</option>                        
                            </select>
                        </div>
                                            
                        <div class="form-group">
                            <label for="file">Assignment File</label>
                            <input type="file" id="file" name="file" class="form-control">
                        </div>                    

                        <div class="form-group">
                            <label for="due_at">Due Date</label>
                            <input type="date" name="due_at" id="due_at" class="form-control" value="{{ $assignment->due_at }}">
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
</div>
</div>

@endsection

