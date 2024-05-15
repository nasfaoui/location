<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
        <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="{{route('pricing')}}" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="{{route('cars')}}" class="nav-link">Cars</a></li>
        <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
        <div class="navbar-nav ms-auto">
          <!-- Authentication Links -->
          @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </div>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->