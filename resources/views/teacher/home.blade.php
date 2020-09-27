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
      <div class="row mb-5 align-items-center">
        <div class="col-12 d-flex justify-content-between">
          <div class="heading mb-4">
            <span class="caption">Assigned</span>
            <h2>Courses</h2>
          </div>
          <div>
          <a href="{{ route('teacher.courses.create') }}" class="btn btn-success border-0">Create a course</a>
          </div>
        </div>
        <div class="col-lg-12">   
          @foreach ($courses as $course)              
          <div class="d-flex tutorial-item mb-4">
            <div class="img-wrap">
              <a href="#"><img src="{{ asset('images/courses/' . $course->image) }}" alt="Image" class="img-fluid"></a>
            </div>
            <div>
              <h3><a href="#">{{ $course->title }}</a> <span class="ml-2">| Batch No: {{ $course->batch_no }}</span></h3>
              <p class="mb-0">{{ $course->short_text }}</p>

              <p class="meta">
                <span class="mr-2">Course Instructor: {{ $course->user->name }}</span>
                <span class="mr-2">| Started at: {{ $course->started_at }}</span>
              </p>
              
              <p class="mb-0">
                <a href="{{ route('courses', [$course->id]) }}" class="btn btn-primary custom-btn">Read More</a>
                {{-- <a href="" class="btn btn-success custom-btn">Join Now</a> --}}
                @if($course->user_id == auth()->user()->id)
                  <a href="{{ route('teacher.courses.edit', $course->id) }}" class="btn btn-warning custom-btn">Edit Course</a>
                @endif
              </p>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  </div>

@endsection

