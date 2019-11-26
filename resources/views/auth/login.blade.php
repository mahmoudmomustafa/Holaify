@extends('layouts.app')
@section('title','Login')
@section('content')
<div class="container">
    <div class="contain">
        <div class="rows w-100">
            {{-- form --}}
            <div class="w-full md:w-2/4 m-4 mt-5 shadow-sm bg:white">
                <div class="form p-2">
                    <div class="container">
                        {{-- register --}}
                        <nav class="p-2">
                            <div class="float-right wow slideInDown text-gray-700 text-xs" data-wow-duration="3s"
                                data-wow-delay="0s">
                                Not member ?
                                <a class="text-sm" href="{{ route('register') }}" data-toggle="tooltip"
                                    data-placement="bottom" title="Register">
                                    Create an account
                                </a>
                            </div>
                        </nav>
                        {{-- form login --}}
                        <div class="log p-3">
                            {{-- header --}}
                            <div class="header p-2 pb-4">
                                <img src="/img/online.svg" alt="icon" width="100" class="wow tada"
                                    data-wow-duration="1s" data-wow-delay="0s">
                                <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                    Holafiy</h3>
                            </div>
                            {{-- login form --}}
                            <div class="body wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    {{-- email --}}
                                    <div class="form-group">
                                        <div class="md:w-4/5 w-full m-auto">
                                            <label for="email" class="text-gray-800 text-sm font-bold">Email
                                                Address</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                placeholder="Email address" required autocomplete="none" autofocus>
                                            {{-- email error --}}
                                            @error('email')
                                            <span class="text-danger text-xs" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- password --}}
                                    <div class="form-group">
                                        <div class="md:w-4/5 w-full m-auto">
                                            <label for="password"
                                                class="text-gray-800 text-sm font-bold">Password</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password" name="password" autocomplete="none">
                                            {{-- password error --}}
                                            @error('password')
                                            <span class="text-danger text-xs" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- remember check --}}
                                    <div class="form-group">
                                        <div class="md:w-4/5 w-full flex-wrap flex align-content-center justify-between m-auto">
                                            {{-- remember --}}
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label font-bold text-gray-700"
                                                    for="remember">Keep me in</label>
                                            </div>
                                            {{-- forget pass --}}
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link text-xs" href="{{ route('password.request') }}">
                                                {{ __('Forgot Password?') }}
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                    {{-- submit btn --}}
                                    <div class="form-group mb-0">
                                        <div class="col-md-8 m-auto text-center">
                                            <button type="submit" class="btn btn-primary w-100 heartbeat">
                                                {{ __('Login') }} <i class="fas fa-sign-in-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- social acc --}}
                        <div class="social p-1">
                            {{-- links --}}
                            <div class="or position-relative d-flex justify-content-center">
                                <span class="font-weight-bold">Or</span>
                            </div>
                            <div class="d-flex flex-row justify-content-center my-2 wow fadeInUp" data-wow-duration="2s"
                                data-wow-delay="0s">
                                {{-- google account --}}
                                <div class="link">
                                    <a href="#" class="btn" data-toggle="tooltip" data-placement="bottom"
                                        title="Google">
                                        <i class="fab fa-google"></i>
                                        <span class="d-none">Sign With Google</span>
                                    </a>
                                </div>
                                {{-- facebook account --}}
                                <div class="link">
                                    <a href="#" class="btn px-2" data-toggle="tooltip" data-placement="bottom"
                                        title="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                        <span class="d-none">Sign With Facebook</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection