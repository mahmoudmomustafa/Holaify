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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        {{-- top nav --}}
        <nav class="navbar navbar-expand-md shadow-sm py-1">
            <div class="container-fluid">
                <div class="d-flex">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent2" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                        <svg viewBox="0 0 64 48">
                            <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                            <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                            <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                        </svg>
                    </button>
                    {{-- nav brand --}}
                    <a class="navbar-brand" href="{{ url('/auth') }}">
                        <span class="wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="1s">{{ config('app.name', 'Holaify') }} <span
                                style="font-size: xx-small;">Dashboard</span> </span>
                    </a>
                </div>
                <div class="navs">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto d-flex flex-row align-center">
                        {{-- notifications --}}
                        <li class="nav-item dropdown px-2">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle notification" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right notification-menu pb-2"
                                aria-labelledby="navbarDropdown">
                                <span class="dropdown-item-text">Activity</span>
                                <a class="dropdown-item title text-sm" href="/">
                                    Mahmoud Added 'Bla bla' to his wishlist
                                </a>
                                <div class="dropdown-divider"></div>
                                {{-- all activity --}}
                                <a class="d-block w-100 text-center text-xs" href="/">
                                    {{ __('See all activity') }}
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                style="align-items:center;">
                                <img src="/img/default-user.svg" width="25" style="border-radius:50%"> <span
                                    class="text-sm ml-2 admin-name">Mahmoud</span>
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
                    </ul>
                </div>
            </div>
        </nav>
        {{-- content --}}
        <div class="main-content wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
            {{-- sideNav --}}
            @include('layouts.dashboard.sideNav')
            {{-- main --}}
            <div class="mains py-2">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    {{-- script files --}}
    <script src="/js/jq.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script src="/js/tags.js"></script>
    <script src="/js/jquery.nicescroll.min.js"></script>
    <script src="/js/app.js"></script>
    @yield('script')
    <script>
        $('[data-toggle="tooltip"]').tooltip();

        $('body , .nav').niceScroll();
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
        document.querySelectorAll('.navbar-toggler').forEach(btn => {
            btn.addEventListener('click', e => {
                btn.classList.toggle('active');
            });
        });
    </script>
</body>

</html>