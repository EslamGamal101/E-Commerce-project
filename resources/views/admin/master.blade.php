<!DOCTYPE html>
<html>
  @include('admin.partials.head')
  <body>
        <header class="header">   
          @include('admin.partials.header')
        
        </header>
      <div class="d-flex align-items-stretch">
      
        <!-- Sidebar Navigation-->
         @include('admin.partials.sidebar')
      <!-- Sidebar Navigation end-->
     
      <div class="page-content">
        
        
        @yield('content')

        
        @include('admin.partials.footer-scribtes')
      </div> 
  </body>
</html>