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
                    <h3 class="card-title">Create a Course</h3>
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
                    <form action="{{ route('student.enrolment.store') }}" method="POST">
                        @csrf
    
                        <div class="card-body">
    
                            <div class="form-group">
                                <label for="title">Course Title</label>
                                <input type="text" name="title" class="form-control" id="title">
                            </div>
                            
                            <div class="form-group">
                                <label for="role">Course Instructor</label>
                                <select class="custom-select" id="role" name="user_id">
                                    <option value="{{ auth()->user()->id }}" selected>{{ auth()->user()->name }}</option>                                                               
                                </select>
                            </div>
                                                
                            <div class="form-group">
                                <label for="short_text">Short Text</label>
                                <input type="text" name="short_text" class="form-control" id="short_text">
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

