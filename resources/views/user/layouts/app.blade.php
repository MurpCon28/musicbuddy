<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          {{-- <a class="navbar-brand" href="{{ url('/') }}">
              {{ config('app.name', 'Laravel') }}
          </a> --}}
          <div class="nav-logo-background-color">
            <a class="navbar-brand nav-logo-background-color" href="{{ url('/home') }}">
              {{-- <div class="nav-logo-background-color"> --}}
                <div class="logo-image">
                 <img src="{{ asset('logo/musicbuddylogoforsite.png')}}" class="logo img-fluid">
               </div>
             {{-- </div> --}}
            </a>
          </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.uploads.index') }}"><h5>Home</h5></a>
                </li>
                {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <h5>Lessons</h5>
                </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="{{ route('user.lessons.index') }}">All Lessons</a>
                   <a class="dropdown-item" href="#">Guitar</a>
                   <a class="dropdown-item" href="#">Bass</a>
                </div>
                </li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.lessons.index') }}"><h5>Lessons</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.covers.index') }}"><h5>Covers</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.reviews.index') }}"><h5>Reviews</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.gigs.index') }}"><h5>Gigs</h5></a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
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
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('user.uploads.create') }}">
                                  Upload Video
                              </a>
                              <a class="dropdown-item" href="{{ url('home') }}">
                                  Profile Page
                              </a>
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
              </ul>
            </div>
          </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
