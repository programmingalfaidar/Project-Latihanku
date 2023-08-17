<nav class="navbar navbar-expand-lg navbar-light bg-success mb-5">
    <div class="container">
      <a class="navbar-brand" href="/">Aplikasi Hotel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">Konfirmasi Pemesanan</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->pengguna }}<i class="bi bi-person-lines-fill"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/Admin"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
               <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i>Logout</button>
              </form>
            </li>
          </ul>
        </li> 
        @else 
        <li class="nav-item">
          <a href="/login" class="nav-link {{ Request::is('post') ? 'active' : '' }}"><i class="bi bi-box-arrow-right"></i>Login</a>
  
        </li>
      </ul>
      @endauth
      
      </div>
    </div>
  </nav>