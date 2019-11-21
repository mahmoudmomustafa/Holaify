<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Holafiy - @yield('title')</title>
  <!-- Styles -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
  <div id="app">
    {{-- navbar --}}
    <nav class="navbar navbar-expand-md shadow-sm py-1 nav-top">
      <div class="container-fluid">
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
              <a class="nav-link" href="#" data-toggle="modal" data-target="#searchModel" v-pre>
                <i class="fas fa-search"></i>
              </a>
              {{-- search model --}}
              <div class="modal fade searchModel" id="searchModel" tabindex="-1" role="dialog"
                aria-labelledby="searchModel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <form class="form-inline position-relative w-100 mr-2">
                        <i class="fas fa-search"></i>
                        <input class="form-control mr-sm-2 w-100" type="search" placeholder="Search"
                          aria-label="Search">
                      </form>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
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
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
        <div class="footer">
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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="/js/app.js"></script>
  @yield('script')
  <script>
  $(window).scroll(function () {
    if($(window).scrollTop() >= 100){
      $(".navbar").removeClass('nav-top');
    }else{
      $(".navbar").addClass('nav-top');
    }
  });
  </script>
</body>

</html>