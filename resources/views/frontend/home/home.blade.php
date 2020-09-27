@extends('frontend.master')

@section('content')
<div class="site-section-cover overlay" style="background-image: url('{{ asset('frontend') }}/images/hero_bg.jpg');">
        
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
          <h1>Intelligent Reading App</h1>
        </div>
      </div>
    </div>
  </div>       

  <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <form action="#" class="d-flex search-form">
            <span class="icon-"></span>
            <input type="search" class="form-control mr-2" placeholder="Search subjects">
            <input type="submit" class="btn btn-primary px-4" value="Search">
          </form>
        </div>
        <div class="col-lg-6 text-lg-right">
          <div class="d-inline-flex align-items-center ml-auto">
          <span class="mr-4">Share:</span>
          <a href="#" class="mx-2 social-item"><span class="icon-facebook"></span></a>
          <a href="#" class="mx-2 social-item"><span class="icon-twitter"></span></a>
          <a href="#" class="mx-2 social-item"><span class="icon-linkedin"></span></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="heading mb-4">
            <span class="caption">Our Offered</span>
            <h2>Courses ({{ App\Course::all()->count() }})</h2>
          </div>
        </div>
        <div class="col-md-12">
          @foreach ($courses as $course)              
          <div class="d-flex tutorial-item mb-4">
            <div class="img-wrap">
              <a href="#"><img src="{{ asset('images/default/' . $course->image) }}" alt="Image" class="img-fluid"></a>
            </div>
            <div>
              <h3><a href="#">{{ $course->title }}</a> <span class="ml-2">| Batch No: {{ $course->batch_no }}</span></h3>
              <p>{{ $course->short_text }}</p>

              <p class="meta">
                <span class="mr-2">Course Instructor: {{ $course->user->name }}</span>
                <span class="mr-2">| Started at: {{ $course->started_at }}</span>
              </p>
              
              <p>
                <a href="{{ route('courses', [$course->id]) }}" class="btn btn-primary custom-btn">Read More</a>
                <a href="" class="btn btn-success custom-btn">Join Now</a>
              </p>
            </div>
          </div>
          @endforeach
          
          {{-- <div class="d-flex tutorial-item mb-4">
            <div class="img-wrap">
              <a href="#"><img src="{{ asset('frontend') }}/images/img_2.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div>
              <h3><a href="#">Learning Angular 101</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>

              <p class="mb-0">
                <span class="brand-angular h5"></span>
                <span class="brand-javascript h5"></span>
              </p>
              <p class="meta">
                <span class="mr-2 mb-2">1hr 24m</span>
                <span class="mr-2 mb-2">Advanced</span>
                <span class="mr-2 mb-2">Jun 18, 2020</span>
              </p>
              
              <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
            </div>
          </div>

          <div class="d-flex tutorial-item mb-4">
            <div class="img-wrap">
              <a href="#"><img src="{{ asset('frontend') }}/images/img_3.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div>
              <h3><a href="#">Learning Photoshop</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>
              <p class="mb-0">
                <span class="brand-adobephotoshop h5"></span>
              </p>
              <p class="meta">
                <span class="mr-2 mb-2">1hr 24m</span>
                <span class="mr-2 mb-2">Advanced</span>
                <span class="mr-2 mb-2">Jun 18, 2020</span>
              </p>
              <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
            </div>
          </div>

          <div class="d-flex tutorial-item mb-4">
            <div class="img-wrap">
              <a href="#"><img src="{{ asset('frontend') }}/images/img_4.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div>
              <h3><a href="#">Advance Illustrator</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>
              <p class="mb-0">
                <span class="brand-adobeillustrator h5"></span>
              </p>
              <p class="meta">
                <span class="mr-2 mb-2">1hr 24m</span>
                <span class="mr-2 mb-2">Advanced</span>
                <span class="mr-2 mb-2">Jun 18, 2020</span>
              </p>
              <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
            </div>
          </div> --}}

          <div class="text-center d-flex">
            {{ $courses->links() }}
          </div>

          {{-- <div class="custom-pagination">
            <ul class="list-unstyled">
              <li><a href="#"><span>1</span></a></li>
              <li><span>2</span></li>
              <li><a href="#"><span>3</span></a></li>
              <li><a href="#"><span>4</span></a></li>
              <li><a href="#"><span>5</span></a></li>
            </ul>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
  
  <div class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 text-center mb-5">
        <div class="heading">
          <span class="caption">Testimonials</span>
          <h2>Student Reviews</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="testimonial-2">
          <h3 class="h5">Excellent Teacher!</h3>
          <div>
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
            <span class="icon-star-o text-warning"></span>
          </div>
          <blockquote class="mb-4">
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
          </blockquote>
          <div class="d-flex v-card align-items-center">
            <img src="{{ asset('frontend') }}/images/person_1.jpg" alt="Image" class="img-fluid mr-3">
            <div class="author-name">
              <span class="d-block">Mike Fisher</span>
              <span>Owner, Ford</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="testimonial-2">
          <h3 class="h5">Best Video Tutorial!</h3>
          <div>
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
            <span class="icon-star-o text-warning"></span>
          </div>
          <blockquote class="mb-4">
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
          </blockquote>
          <div class="d-flex v-card align-items-center">
            <img src="{{ asset('frontend') }}/images/person_2.jpg" alt="Image" class="img-fluid mr-3">
            <div class="author-name">
              <span class="d-block">Jean Stanley</span>
              <span>Traveler</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="testimonial-2">
          <h3 class="h5">Easy to Understand!</h3>
          <div>
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
            <span class="icon-star text-warning"></span>
            <span class="icon-star-o text-warning"></span>
          </div>
          <blockquote class="mb-4">
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
          </blockquote>
          <div class="d-flex v-card align-items-center">
            <img src="{{ asset('frontend') }}/images/person_3.jpg" alt="Image" class="img-fluid mr-3">
            <div class="author-name">
              <span class="d-block">Katie Rose</span>
              <span >Customer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>    
@endsection

