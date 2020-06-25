<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img class="img-xs rounded-circle" src="{{ asset('/images/faces/face8.jpg') }}" alt="profile image">
          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name">Sarwar Sunjid</p>
          <p class="designation">Administrator</p>
        </div>
        <div class="icon-container">
          <i class="icon-bubbles"></i>
          <div class="dot-indicator bg-danger"></div>
        </div>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Dashboard</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.index') }}">
        <span class="menu-title">Dashboard</span>
        <i class="icon-screen-desktop menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-title">Manage Products</span>
        <i class="icon-doc menu-icon"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.products') }}"> Products </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.product.create') }}"> Add Product </a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#order-pages" aria-expanded="false" aria-controls="order-pages">
        <span class="menu-title">Manage Orders</span>
        <i class="icon-doc menu-icon"></i>
      </a>
      <div class="collapse" id="order-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.orders') }}"> Manage Orders </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="auth">
        <span class="menu-title">Manage Category</span>
        <i class="icon-doc menu-icon"></i>
      </a>
      <div class="collapse" id="category-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.categories') }}"> Manage Category </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category.create') }}"> Add Category </a></li>
        </ul>
      </div>
      </li>

      <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="auth">
        <span class="menu-title">Manage Brands</span>
        <i class="icon-doc menu-icon"></i>
      </a>
      <div class="collapse" id="brand-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brands') }}"> Manage Brand </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brand.create') }}"> Add Brand </a></li>
        </ul>
      </div>
    </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#division-pages" aria-expanded="false" aria-controls="auth">
        <span class="menu-title">Manage Division</span>
        <i class="icon-doc menu-icon"></i>
      </a>
      <div class="collapse" id="division-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.divisions') }}"> Manage Division </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.division.create') }}"> Add Division </a></li>
        </ul>
      </div>
    </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#district-pages" aria-expanded="false" aria-controls="auth">
        <span class="menu-title">Manage District</span>
        <i class="icon-doc menu-icon"></i>
      </a>
      <div class="collapse" id="district-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.districts') }}"> Manage District </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.district.create') }}"> Add District </a></li>
        </ul>
      </div>
    </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#slider-pages" aria-expanded="false" aria-controls="auth">
        <span class="menu-title">Manage Sliders</span>
        <i class="icon-doc menu-icon"></i>
      </a>
      <div class="collapse" id="slider-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.sliders') }}"> Manage Slider </a></li>

        </ul>
      </div>
    </li>
    <br>
    <li class="nav-item">
      <a class="nav-link" href="#district-pages">
        <form class="form-inline" action="{{ route('admin.logout') }}" method="post">
          @csrf
          <input type="submit" value="Logout Now" class="btn btn-danger">
        </form>
      </a>
    </li>
  </ul>
</nav>
<!-- partial -->
