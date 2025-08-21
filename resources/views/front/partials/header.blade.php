
@php
  if(Auth::id())
         {          
            $count_product_added_to_cart = \App\Models\Cart::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->count();       
         }
        else{ $count_product_added_to_cart = ''; }
@endphp
<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="{{ route('front.index') }}">
        <span>
          Giftos
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""></span>
      </button>

      <div class="collapse navbar-collapse @yield('color')" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item  @yield('home-active')">
              <a class="nav-link" href="{{ route('front.index') }}">Home </a>
          </li>
          <li class="nav-item  @yield('shop-active')">
              <a class="nav-link" href="{{ route('front.shop') }}">Shop</a>
            
          </li>
          <li class="nav-item @yield('why-active')">
            <a class="nav-link" href="{{ route('front.why') }}">
              Why Us
            </a>
          </li>
          <li class="nav-item @yield('testmonial-active')">
            <a class="nav-link" href="{{ route('front.testmonial') }}">
              Testimonial
            </a>
          </li>
          <li class="nav-item @yield('contact-active')">
            <a class="nav-link" href="{{ route('front.contact') }}">Contact Us</a>
          </li>
        </ul>
        <div class="user_option">
          @if ( Auth::check() )
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="margin-left: 20px;">
            @csrf
      
            <button type="submit" class="btn btn-danger" >
              <i >Logout</i>
            </button>
          </form>
          @endif

          @if (! Auth::check())
            
          
          <a href="{{ route('login') }}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
              Login
            </span>
          </a>
          <a href="{{ route('register') }}">
            <i class="fa fa-vcard" aria-hidden="true"></i>
            <span>
              register
            </span>
          </a>
          @endif
          <a  style="margin-left: 20px;" href="{{ route('front.myCart') }}">
            <i class="fa fa-shopping-cart" aria-hidden="true"> {{ $count_product_added_to_cart }}</i>
          </a>
          <form class="form-inline " >
            <button class="btn nav_search-btn" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
          
          



          
        </div>
      </div>
    </nav>
  </header>