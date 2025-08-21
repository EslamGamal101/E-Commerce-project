@extends('front.master')
@section('title','Home')

@section('color','')

@section('home-active','active')

@section('slider')
@include('front.partials.slider')
@endsection


@section('content')

<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Products
      </h2>
    </div>
    <div class="row">
      @if (count($categories)>0)
      @foreach ( $categories as $category )
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="{{ asset('storage/categories/' . $category->image) }}" alt="">
            </div>
            <div class="detail-box">
              <h6>
                {{ $category->name }}
              </h6>
              <h6>
                Price
                <span>
                  {{ $category->price }}
                </span>
              </h6>
            </div>
            <div class="new">
              <span>
                New
              </span>
            </div>

          </a>
        </div>
        <div style="padding:10px">
          <a class="btn btn-danger" href="{{ route('front.product_details',['id'=>$category->id]) }}">details</a>
          <a class="btn btn-primary" href="{{ route('front.add_to_cart',['id'=>$category->id]) }}">Add to cart</a>
        </div>

      </div>


      @endforeach

      @endif


    </div>
    <div style="padding: 5%">
      {{ $categories->render('pagination::bootstrap-4') }}
    </div>
  </div>
</section>




<br><br><br>

<!-- end contact section -->

<section class="contact_section ">
  <div class="container px-0">
    <div class="heading_container ">
      <h2 class="">
        Contact Us
      </h2>
    </div>
  </div>
  <div class="container container-bg">
    <div class="row">
      <div class="col-lg-7 col-md-6 px-0">
        <div class="map_container">
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 px-0">
        <form action="#">
          <div>
            <input type="text" placeholder="Name" />
          </div>
          <div>
            <input type="email" placeholder="Email" />
          </div>
          <div>
            <input type="text" placeholder="Phone" />
          </div>
          <div>
            <input type="text" class="message-box" placeholder="Message" />
          </div>
          <div class="d-flex ">
            <button>
              SEND
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<br><br><br>

<!-- end contact section -->

@endsection