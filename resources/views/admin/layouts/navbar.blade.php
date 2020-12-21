

<nav class="main-header navbar navbar-expand bg-nav-dark-mode ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-nav-dark-mode text-seagreen" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-seagreen"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin') }}" class="nav-link text-nav-dark-mode">Principal</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('blog') }}" class="nav-link text-nav-dark-mode  ">Blog</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin') }}" class="nav-link text-nav-dark-mode  ">Contacto</a>
      </li>
    </ul>

    

    <!-- Right navbar links -->
    @include('admin.layouts.dropdowns')
</nav>

