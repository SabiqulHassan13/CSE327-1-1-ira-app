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
                    <h3 class="card-title">Edit a Course</h3>
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
                    <form action="{{ route('teacher.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
    
                        <div class="card-body">
    
                            <div class="form-group">
                                <label for="title">Course Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{  $course->title }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="role">Course Instructor</label>
                                <select class="custom-select" id="role" name="user_id">
                                    <option value="{{ auth()->user()->id }}" selected>{{ auth()->user()->name }}</option>                                                               
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
                                <textarea class="form-control" name="long_text" id="long_text" cols="30" rows="7">{{ $course->long_text }}"</textarea>
                            </div>
    
                            <div class="form-group">
                                <label for="batch_no">Batch No</label>
                                <input type="text" name="batch_no" class="form-control" id="batch_no" value="{{  $course->batch_no }}">
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

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
    
                        </div>
                        <!-- /.card-body -->

                    </form>
                </div>        
            </div>
        </div>
        
      </div>
    </div>
  </div>

@endsection

