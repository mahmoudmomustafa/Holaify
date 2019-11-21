@extends('layouts.app')
@section('title','Login')
@section('content')
<div class="container">
    <div class="contain">
        <div class="rows row m-4 w-100">
            {{-- left-side --}}
            <div class="d-none d-md-block col-md-5 p-0">
                <div class="left-side">
                    <div class="container">
                        <div class="header d-flex py-5 px-4">
                            <img src="/img/brand.svg" width="40" class="wow fadeIn" data-wow-duration="2s"
                                data-wow-delay="0s" alt="brand-img">
                            <h1 class="wow fadeInLeft mb-0" data-wow-duration="1s" data-wow-delay="1s">Holaify</h1>
                        </div>
                        <img src="/img/log.svg" alt="login-img" class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
                    </div>
                </div>
            </div>
            {{-- form --}}
            <div class="col-12 col-md-7 p-0">
                <div class="form p-3">
                    <div class="container">
                        {{-- register --}}
                        <nav class="mb-3 p-2">
                            <div class="float-right wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
                                Not member ?
                                <a href="{{ route('register') }}" data-toggle="tooltip" data-placement="bottom"
                                    title="Register">
                                    Create an account
                                </a>
                            </div>
                        </nav>
                        {{-- form login --}}
                        <div class="log p-3">
                            {{-- header --}}
                            <div class="header p-2 pb-4">
                                <h3 class="wow slideInDown" data-wow-duration="2s" data-wow-delay="0s">Sign In to
                                    Holafiy</h3>
                            </div>
                            {{-- login form --}}
                            <div class="body wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    {{-- email --}}
                                    <div class="form-group">
                                        <div class="col-md-8 m-auto">
                                            <label for="email">Email Address :</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                placeholder="email" required autocomplete="email" autofocus>
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
                                        <div class="col-md-8 m-auto">
                                            <label for="passwor">Password:</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="password" name="password" autocomplete="none">
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
                                        <div class="col-md-8 m-auto">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="remember">Keep me
                                                    Signed in</label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- submit btn --}}
                                    <div class="form-group mb-0">
                                        <div class="col-md-8 m-auto text-center">
                                            <button type="submit" class="btn btn-primary w-100 heartbeat">
                                                {{ __('Login') }} <i class="fas fa-sign-in-alt"></i>
                                            </button>

                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Password?') }}
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{-- social acc --}}
                            <div class="social p-2">
                                <div class="or position-relative d-flex justify-content-center mt-1">
                                    <span class="font-weight-bold">Or</span>
                                </div>
                                {{-- links --}}
                                <div class="d-flex flex-row justify-content-center wow fadeInDown"
                                    data-wow-duration="2s" data-wow-delay="0s">
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
</div>
@endsection