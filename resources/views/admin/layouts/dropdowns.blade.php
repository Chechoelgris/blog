<ul class="navbar-nav ml-auto">

    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown m-1">
      <a class="nav-link text-nav-dark-mode" data-toggle="dropdown" href="#">
        <i class="text-seagreen fas fa-sliders-h"></i>
        {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right bg-footer-dark-mode border-seagreen">
        <span class="dark-dropdown text-center text-light bg-dropdown-title">Ajustes</span>
        
        
       
        <a href="#" class="dark-dropdown text-nav-dark-mode text-seagreen">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          {{-- <span class="float-right text-muted text-sm">12 hours</span> --}}
        </a>
        <a href="#" class="dark-dropdown text-nav-dark-mode text-seagreen">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          {{-- <span class="float-right text-muted text-sm">12 hours</span> --}}
        </a>
       
        
        
      </div>
    </li>
    

    <!-- Logout -->
    <li class="nav-item d-none d-sm-inline-block">
      @auth
        <a class="nav-link text-nav-dark-mode" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            {{ __('Cerrar sesión') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      @endauth
    </li>
  </ul>