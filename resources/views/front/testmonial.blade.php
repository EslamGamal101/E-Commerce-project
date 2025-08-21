@extends('front.master')
@section('title','Testmonial')
@section('color','innerpage_navbar')
@section('testmonial-active','active')



@section('content')
<div class="container-xxl py-6">
  <div class="container">
      <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <br>
          <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
          <h2 class="mb-5">What Our Clients Say!</h2>
      </div>
          @if (count($testmonials)>0)
            @foreach ( $testmonials as $testmonial )
              <div class="testimonial-item rounded p-4">
              
              <p>{{ $testmonial->description }}</p>
              <div class="d-flex align-items-center">
                  
                  <div class="ps-3">
                      <h6 class="mb-1">{{ $testmonial->name }}</h6>
                      <small></small>
                  </div>
              </div>
          </div>
            @endforeach
            
          @endif
          
      </div>
    </div>
  </div>
@endsection