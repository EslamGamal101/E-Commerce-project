<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="{{ asset('admin')  }}/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">{{ Auth::user()->name }}</h1>
        <p>Admin</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="@yield('home-active')"><a href="{{ route('admin.admins.index') }}"> <i class="icon-home"></i>Home </a></li>
                  <li class="@yield('category-active')">
                    <a href="{{ route('admin.categories.index') }}">
                      <i class="icon-grid">
                      </i>
                        Categories 
                    </a>
                  </li>
            <li class="@yield('testmonial-active')"><a href="{{ route('admin.testmonials.index') }}"> <i class="fa fa-bar-chart"></i>testmonials </a></li>
            <li class="@yield('order-active')"><a href="{{ route('admin.orders.index') }}"> <i class="fa fa-shopping-cart"></i>Orders </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
    </ul>
    
</nav>