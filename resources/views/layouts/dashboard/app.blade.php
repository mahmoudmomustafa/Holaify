<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Holaify - @yield('title')</title>
    <!-- Styles -->
    {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/animate.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <link href="/css/tags.css" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    {{-- <i class="fas fa-stream"></i> --}}
                    <i class="lni-text-align-left"></i>
                </button>
                {{-- nav brand --}}
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span class="wow fadeInLeft" data-wow-duration="1s"
                        data-wow-delay="1s">{{ config('app.name', 'Holaify') }}</span>
                </a>

                <div class="navs">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="/img/default-user.svg" width="25"
                                    style="display:inline-block;border-radius:50%">
                                <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/">
                                    <i class="fas fa-globe pr-2"></i> {{ __('Site') }}
                                </a>
                                {{-- profile --}}
                                <a class="dropdown-item" href="/auth/admins/show">
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
        <div class="mains">
            {{-- sideNav --}}
            @include('layouts.dashboard.sideNav')
            {{-- content --}}
            <div class="main-content p-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    {{-- script files --}}
    <script src="/js/jq.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script src="/js/tags.js"></script>
    <script src="/js/app.js"></script>
    @yield('script')
    <script>
        // check if file select
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img').attr('src', e.target.result);
                $('#prevImg').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img-post").change(function () {
        $('.img').show();
        readURL(this);
    });
    $('.close').click(function () {
        $('.img').hide();
        $('#img-post').val('');
    });
    </script>
</body>

</html>