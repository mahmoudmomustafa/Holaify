@extends('layouts.dashboard.app')
@section('title','Create Customer')
@section('content')
<div class="content">
    {{-- head --}}
    <div class="header p-2 pb-3">
        <div class="head">
            <h3>Create New Customer ..</h3>
        </div>
        {{-- back to Customers --}}
        <div class="add">
            <a href="/auth/customers">
                Customers
            </a>
        </div>
    </div>
    {{-- content --}}
    <div class="main">
        <form method="POST" action="/auth/customers" class="w-100 row m-0">
            @csrf
            <div class="row w-100 m-0">
                {{-- label --}}
                <div class="col-md-3 p-0">
                    <label class="py-4">Cutomser Info:</label>
                </div>
                {{-- inputs --}}
                <div class="col-md-8 p-0">
                    <div class="form">
                        <div class="container">
                            {{-- names --}}
                            <div class="form-group row mb-0">
                                {{-- name --}}
                                <div class="col-md-6 position-relative mb-3">
                                    <label for="title" class="col">{{ __('Full Name') }}</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name" required
                                        autofocus placeholder="Full Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- username --}}
                                <div class="col-md-6 position-relative mb-3">
                                    <label for="title" class="col">{{ __('UserName') }}</label>
                                    <input id="UserName" type="text"
                                        class="form-control @error('userName') is-invalid @enderror" name="userName"
                                        required placeholder="UserName" autocomplete="none">
                                    @error('userName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- email --}}
                            <div class="form-group row">
                                <div class="col-md-12 position-relative">
                                    <label for="title" class="col">{{ __('Email Adress') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email" required
                                        placeholder="Email Address" autocomplete="none">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- mobile --}}
                            <div class="form-group row">
                                <div class="col-md-12 position-relative">
                                    <label for="title" class="col">{{ __('Phone Number') }}</label>
                                    <input id="number" type="text"
                                        class="form-control @error('number') is-invalid @enderror" name="number"
                                        required placeholder="Phone Number">
                                    @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- password --}}
                            <div class="form-group row mb-1">
                                <div class="col-md-6 position-relative mb-3">
                                    <label for="password" class="col">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Password" autocomplete="none">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 position-relative mb-3">
                                    <label for="password-confirm" class="col">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="none" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row w-100 m-0">
                {{-- label --}}
                <div class="col-md-3">
                    <label class="py-4">Address Info:</label>
                </div>
                {{-- inputs --}}
                <div class="col-md-8 p-0">
                    <div class="form">
                        <div class="container">
                            {{-- company --}}
                            <div class="form-group row">
                                <div class="col-md-12 position-relative">
                                    <label for="company" class="col">{{ __('Company') }}</label>
                                    <input id="company" type="text"
                                        class="form-control @error('company') is-invalid @enderror" name="company"
                                        placeholder="Company Name">
                                    @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- address --}}
                            <div class="form-group row">
                                <div class="col-md-12 position-relative">
                                    <label for="address" class="col">{{ __('Address') }}</label>
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        placeholder="Address">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- apartment --}}
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="apartment" class="col">{{ __('Apartment') }}</label>
                                    <input id="apartment" type="text"
                                        class="form-control mb-1 @error('apartment') is-invalid @enderror" name="apartment"
                                        placeholder="Apartment">
                                    @error('apartment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- city --}}
                                <div class="col-md-4">
                                    <label for="city" class="col">{{ __('city') }}</label>
                                    <input id="city" type="text"
                                        class="form-control mb-1 @error('city') is-invalid @enderror" name="city"
                                        placeholder="City">
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- country --}}
                                <div class="col-md-4">
                                    <label for="country" class="col">{{ __('country') }}</label>
                                    <input id="country" type="text"
                                        class="form-control mb-1 @error('country') is-invalid @enderror" name="country"
                                        placeholder="Country">

                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- btns --}}
            <div class="form-group row w-100 mx-0 d-flex justify-content-center">
                {{-- submit --}}
                <div class="col-md-4 mb-2">
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Create') }}
                    </button>
                </div>
                {{-- back --}}
                <div class="col-md-2">
                    <span class="btn btn-primary w-100 btn-dis">
                        <a href="/auth/customers"></a> {{ __('Discard') }}
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection