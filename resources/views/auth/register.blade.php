@extends('layouts.app')
@section('title','Sign Up')
@section('content')
<div class="container">
    <div class="contain">
        <div class="rows w-100">
            {{-- form --}}
            <div class="w-full md:w-2/4 mx-4 mb-3 mt-5 shadow-sm bg:white">
                <div class="form p-3">
                    <div class="container">
                        {{-- register --}}
                        <nav class="p-2">
                            <div class="float-right wow slideInDown text-gray-700 text-xs" data-wow-duration="3s"
                            data-wow-delay="0s">
                                Already a member ?
                                <a href="{{ route('login') }}" data-toggle="tooltip" data-placement="bottom"
                                    title="login"  class="text-sm">
                                    Sign In
                                </a>
                            </div>
                        </nav>
                        {{-- form login --}}
                        <div class="log p-3">
                            {{-- header --}}
                            <div class="header p-2">
                                <img src="/img/online.svg" alt="icon" width="100" class="wow tada"
                                    data-wow-duration="1s" data-wow-delay="0s">
                                <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                    Holafiy</h3>
                            </div>
                            {{-- social acc --}}
                            <div class="social p-2">
                                {{-- links --}}
                                <div class="d-flex flex-row justify-content-center my-1 wow fadeInUp"
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
                                <div class="or position-relative d-flex justify-content-center mt-1">
                                    <span class="font-weight-bold">Or</span>
                                </div>
                            </div>
                            {{-- login form --}}
                            <div class="body wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="section first-div show mb-3">
                                        {{-- names --}}
                                        <div class="form-group">
                                            <div class="md:w-4/5 w-full m-auto">
                                                <label for="name" class="text-gray-800 text-sm font-bold">Full
                                                    Name</label>
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    required autofocus placeholder="Full Name">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- username --}}
                                        <div class="form-group">
                                            <div class="md:w-4/5 w-full m-auto">
                                                <label for="UserName"
                                                    class="text-gray-800 text-sm font-bold">UserName</label>
                                                <input id="UserName" type="text"
                                                    class="form-control @error('userName') is-invalid @enderror"
                                                    name="userName" required placeholder="UserName" autocomplete="none">

                                                @error('userName')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section second-div mb-3">
                                        {{-- email --}}
                                        <div class="form-group">
                                            <div class="md:w-4/5 w-full m-auto">
                                                <label for="email" class="text-gray-800 text-sm font-bold">Email
                                                    Address</label>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" required placeholder="Email Address"
                                                    autocomplete="none">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- mobile --}}
                                        <div class="form-group">
                                            <div class="md:w-4/5 w-full m-auto">
                                                <label for="number"
                                                    class="text-gray-800 text-sm font-bold">Mobile</label>
                                                <input id="number" type="text"
                                                    class="form-control @error('number') is-invalid @enderror"
                                                    name="number" required placeholder="Phone Number">
                                                @error('number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section third-div mb-3">
                                        {{-- password --}}
                                        <div class="form-group">
                                            <div class="md:w-4/5 w-full m-auto">
                                                <label for="password"
                                                    class="text-gray-800 text-sm font-bold">Password</label>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" placeholder="Password" autocomplete="none">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="md:w-4/5 w-full m-auto">
                                                <label for="password-confirm"
                                                    class="text-gray-800 text-sm font-bold">Confirm Password</label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" placeholder="Confirm Password"
                                                    autocomplete="none">
                                            </div>
                                        </div>
                                        {{-- submit btn --}}
                                        <div class="form-group">
                                            <div class="col-md-8 m-auto">
                                                <button type="submit" class="btn btn-primary w-100 heartbeat">
                                                    {{ __('Sign Up') }} <i class="fas fa-sign-in-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- arrows --}}
                                    <div class="arrows d-flex justify-content-end px-3 pt-3">
                                        <div class="arrow back" data-toggle="tooltip" data-placement="top" title="Back">
                                            <i class="fas fa-angle-left m-2"></i>
                                        </div>
                                        <div class="arrow next" data-toggle="tooltip" data-placement="top" title="Next">
                                            <i class="fas fa-angle-right m-2"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection