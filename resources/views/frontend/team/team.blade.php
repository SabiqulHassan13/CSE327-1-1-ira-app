@extends('frontend.master')

@section('content')
<div class="site-section-cover overlay" style="background-image: url('{{ asset('frontend') }}/images/hero_bg.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
          <h1><strong>Our Team</strong></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5 section-2-title">
        <div class="col-md-6">
          <div class="heading mb-4">
            <span class="caption">The team</span>
            <h2>Meet Our Team</h2>
          </div>


        </div>
      </div>
      <div class="row align-items-stretch">

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1">

            <img src="{{ asset('frontend') }}/images/person_1.jpg" alt="Image"
            class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Founder</span>
              <h2>James Doe</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1">

            <img src="{{ asset('frontend') }}/images/person_2.jpg" alt="Image"
            class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Founder</span>
              <h2>James Doe</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1">

            <img src="{{ asset('frontend') }}/images/person_3.jpg" alt="Image"
            class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Founder</span>
              <h2>James Doe</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1">

            <img src="{{ asset('frontend') }}/images/person_4.jpg" alt="Image"
            class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Founder</span>
              <h2>James Doe</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1">

            <img src="{{ asset('frontend') }}/images/person_5.jpg" alt="Image"
            class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Founder</span>
              <h2>James Doe</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1">

            <img src="{{ asset('frontend') }}/images/person_1.jpg" alt="Image"
            class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Founder</span>
              <h2>James Doe</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
@endsection

