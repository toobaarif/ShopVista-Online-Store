<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href={{url('/redirect')}}><img src={{url('admin/assets/images/shop3.png')}} alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href={{url('/redirect')}}><img src={{url('admin/assets/images/logo-mini.svg')}} alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src={{url('admin/assets/images/faces/face15.jpg')}} alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Admin</h5>
              <span>Products Manager</span>
            </div>
          </div>
       
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/redirect">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('add_product')}}">Add Product</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('show_product')}}">Show Products</a></li>
          
          </ul>
        </div>
      </li>


{{-- catagory --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href={{url('/catagory')}}>
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Catagory</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href={{url('/show-orders')}}>
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Orders</span>
        </a>
      </li>

    </ul>
  </nav>