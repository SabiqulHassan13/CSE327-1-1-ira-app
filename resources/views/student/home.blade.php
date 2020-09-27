@extends('frontend.master')

@section('content')
  <div class="site-section-cover overlay" style="background-image: url('{{ asset('frontend') }}/images/hero_bg.jpg');">
        
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
          <h1>Student Course Dashboard</h1>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-12 d-flex justify-content-between">
          <div class="heading mb-4">
            <span class="caption">Enrolled </span>
            <h2>Courses</h2>
          </div>
          <div>
            <a href="" class="btn btn-success border-0">Create a course</a>
          </div>
        </div>
        <div class="col-lg-12">        

          <div class="d-flex tutorial-item mb-4">
            <div class="img-wrap">
              <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
            </div>

            <div>
              <h3><a href="#">course- title </a> <span class="ml-2">| Batch No: </span></h3>
              <p class="mb-0">course short_text </p>              

              <p class="meta">
                <span class="mr-2">Course Instructor: </span>
                <span class="mr-2">| Started at: </span>
              </p>
              
              <p class="mb-0">
                <a href="" class="btn btn-primary custom-btn">Read More</a>
                <a href="" class="btn btn-success custom-btn">Join Now</a>
              </p>
            </div>
          </div>

      </div>
    </div>
  </div>

@endsection

