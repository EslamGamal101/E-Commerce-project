<!DOCTYPE html>
<html>


    @include('front.partials.head')

    <body>
      <div class="hero_area">
       
        @include('front.partials.header')    
               
        @yield('slider')
         

       </div>
    
       @yield('content')
  
       @include('front.partials.footer')

       @include('front.partials.scribts')
  
</body>

</html>