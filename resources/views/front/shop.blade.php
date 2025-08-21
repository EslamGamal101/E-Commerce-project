

@extends('front.master')
@section('title','shop')
@section('color','innerpage_navbar')
@section('shop-active','active')



@section('content')
  <!--   <x-front-shop-component></x-front-shop-component> -->

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
                  <img src="{{ asset("storage/categories/$category->image") }}" alt="">
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
              <a  class="btn btn-danger" href="{{ route('front.product_details',['id'=>$category->id]) }}"  >details</a>
              
              <a  class="btn btn-primary" href="{{ route('front.add_to_cart',['id'=>$category->id]) }}"  >Add to cart</a>
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

@endsection