@extends('frontend.master')

@section('content')
<div class="site-section-cover overlay" style="background-image: url('{{ asset('frontend') }}/images/hero_bg.jpg');">
        
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
          <h1>Course <strong>Page</strong></h1>
          {{-- <p>
            <span class="mr-2 mb-2">1hr 24m</span> 
            <span class="mr-2 mb-2">Advanced</span>
            <span class="mr-2 mb-2">Jun 18, 2020</span>
          </p> --}}
        </div>
      </div>
    </div>
  </div>


  <div class="site-section bg-light pb-0">
    <div class="container">
      <div class="row align-items-stretch overlap">
        <div class="col-lg-12">
          <div class="box h-100">
            <div class="d-flex align-items-center">
              <div class="img"><img src="{{ asset('images/courses/' . $course->image) }}" class="img-fluid" alt="Image"></div>
              <div class="text">
                <a href="#" class="category">Course</a>
                <h3><a href="#">{{ $course->title }}</a></h3>
                <p>{{ $course->long_text }}</p>

                <p class="meta mb-0">
                  <span class="mr-2">Course Instructor: {{ $course->user->name }}</span>
                  <span class="mr-2">| Started at: {{ $course->started_at }}</span>
                </p>
                
                <p class="mb-0">
                  <a href="" class="btn btn-success custom-btn">Join Now</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>  


  <div class="site-section">
    <div class="container"> 
      <div class="row">
        <div class="col-md-12">
          <ul class="list-unstyled tutorial-section-list">

            <li class="border mb-3">              
              <h3><span>Assignment Title: course outline</span></h3>
              <p>
                <span class="mr-2 mb-2">Published by: Admin | Due date: 20/09/2020</span> 
              </p>
              <hr>
              <p>
                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime aspernatur illum et aliquid facere. Quia culpa animi sit natus impedit rerum saepe nam? Sequi esse, autem rerum animi cum quaerat.</span>
              </p>
              <div class="d-flex mt-2">
                <a href="#" class="btn btn-info btn-sm mr-2">View</a>
                <a href="#" class="btn btn-success btn-sm">Download</a>
              </div>
            </li>    
            
            <li>
              <h3><a href="#">How to install dependency</a></h3>
              <p>
                <span class="mr-2 mb-2">1hr 24m</span> 
              </p>
              <a href="#" class="play">Play</a>
            </li>

          </ul>
        </div>        
      </div>
    </div>
  </div>
@endsection

