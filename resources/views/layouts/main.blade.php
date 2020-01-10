<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Holafiy - @yield('title')</title>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <!-- Styles -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/animate.css">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
  <div id="app">
    {{-- navbar --}}
    <nav class="navbar navbar-expand-md py-1">
      <div class="container">
        {{-- nav brand --}}
        <a class="navbar-brand" href="{{ url('/') }}">
          <span>{{ config('app.name', 'Holaify') }}</span>
        </a>

        <div class="navs">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item">
              <a class="nav-link" href="#" v-pre>
                <div class="search">
                  <input type="text" placeholder=" ">
                  <div>
                    <svg>
                      <use xlink:href="#path">
                    </svg>
                  </div>
                </div>
              </a>

              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 28" id="path">
                  <path
                    d="M32.9418651,-20.6880772 C37.9418651,-20.6880772 40.9418651,-16.6880772 40.9418651,-12.6880772 C40.9418651,-8.68807717 37.9418651,-4.68807717 32.9418651,-4.68807717 C27.9418651,-4.68807717 24.9418651,-8.68807717 24.9418651,-12.6880772 C24.9418651,-16.6880772 27.9418651,-20.6880772 32.9418651,-20.6880772 L32.9418651,-29.870624 C32.9418651,-30.3676803 33.3448089,-30.770624 33.8418651,-30.770624 C34.08056,-30.770624 34.3094785,-30.6758029 34.4782612,-30.5070201 L141.371843,76.386562"
                    transform="translate(83.156854, 22.171573) rotate(-225.000000) translate(-83.156854, -22.171573)">
                  </path>
                </symbol>
              </svg>
            </li>
            {{-- cart --}}
            <li class="nav-item cart">
              <a class="nav-link position-relative" href="/cart" v-pre>
                <i class="lni-cart"></i>
                <span class="num">0</span>
              </a>
            </li>
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Sign in') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item btn-register">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Get Started') }}</a>
            </li>
            @endif
            @else
            {{-- @guest --}}
            {{-- <div class="nav-item"> --}}
            {{-- cart --}}
            {{-- <a class="nav-link" href="/cart" v-pre>
                <i class="lni-cart"></i>
              </a> --}}
            {{-- </div> --}}
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                <img src="/img/default-user.svg" width="25" style="display:inline-block;border-radius:50%">
                <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                {{-- profile --}}
                <a class="dropdown-item" href="/auth">
                  <i class="lni-pulse pr-2"></i> {{ __('Dashboard') }}
                </a>
                {{-- profile --}}
                <a class="dropdown-item" href="#">
                  <i class="far fa-user pr-2"></i> {{ __('Profile') }}
                </a>
                {{-- logout --}}
                <a class="dropdown-item" href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt pr-2"></i> {{ __('Logout') }}
                </a>
                {{-- {{ route('logout') }} --}}
                <form id="logout-form" action="#" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    {{-- main content --}}
    <div class="main wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
      {{-- content --}}
      @yield('content')
    </div>
    {{-- footer --}}
    <footer>
      <div class="p-5">
        <div class="links d-flex flex-row p-1">
            <a class="px-2 footer-link" href="{{ route('register') }}">{{ __('Get Started') }}</a>
            <a class="px-2 footer-link" href="{{ route('register') }}">{{ __('Subscribe') }}</a>
            <p class="px-2">Have an account ? 
              <a class="footer-link" href="{{ route('login') }}">{{ __('Sign in') }}</a>
            </p>
        </div>
        <div class="footer p-2">
          <div class="text-sm">© 2019 Holaify.com</div>
          <div class="text-base">Holaify developed by <span class="font-bold">M3</span></div>
        </div>
      </div>
    </footer>
  </div>
  {{-- loading --}}
  {{-- @include('componants.loading') --}}
  {{-- script files --}}
  <script src="/js/jq.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/wow.min.js"></script>
  <script src="/js/app.js"></script>
  @yield('script')
</body>

</html>