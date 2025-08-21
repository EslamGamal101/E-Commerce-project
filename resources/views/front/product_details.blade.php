@extends('front.master')
@section('title','shop')
@section('color','innerpage_navbar')
@section('shop-active','active')

@section('content')

   <style type="text/css">
        .dev_center{
            display: flex ;
            justify-content: center ;
            align-items: center ;
            padding: 30px ;
        }
    </style>   
    <!-- shop section -->
 <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Products
        </h2>
      </div>
      <div class="row">
        
           
           <div class=" col-md-12 ">
            <div class="box">
              <a href="">
                <div class="dev_center">
                  <img width="200" src="{{ asset("storage/categories/$data->image") }}" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    {{ $data->name }}
                  </h6>
                  <h6>
                    Price
                    <span>
                      {{ $data->price }}
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
          </div>
        </div>  
          
        
        
  
      
      
      
      </div>
    </div>
  </section>
  
  <!-- end shop section -->
@endsection


