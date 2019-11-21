<div class="col-12 col-md-5 p-0">
    <div class="container form">
        <div id="login-form" class="login-form p-4">
            <div class="header d-flex p-2 my-3">
                <img src="/img/brand.svg" width="05" class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0s"
                    alt="brand-img">
                <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">Holafiy</h1>
            </div>
            <div class="card p-2 mt-4">
                <div class="card-header px-4">
                    <h3 class="wow slideInDown" data-wow-duration="2s" data-wow-delay="0s">
                        {{ __('Verify Your Email Address') }}..</h3>
                </div>
                <div class="card-body wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@extends('layouts.app')
@section('title','Verify Email')
@section('content')
<div class="container">
    <div class="contain">
        <div class="rows row m-4 w-100">
            {{-- left-side --}}
            <div class="d-none d-md-block col-md-5 p-0">
                <div class="left-side">
                    <div class="container">
                        <div class="header d-flex py-5 px-4">
                            <img src="/img/brand.svg" width="35" class="mr-1 wow fadeIn" data-wow-duration="2s"
                                data-wow-delay="0s" alt="brand-img">
                            <h1 class="pl-2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">Holafiy</h1>
                        </div>
                        <img src="/img/verfiy-mail.svg" alt="">
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
                                <h3 class="wow slideInDown" data-wow-duration="2s" data-wow-delay="0s">
                                    {{ __('Verify Your Email Address') }}..</h3>
                            </div>
                            {{-- login form --}}
                            <div class="card-body wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
                                @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                                @endif

                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
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