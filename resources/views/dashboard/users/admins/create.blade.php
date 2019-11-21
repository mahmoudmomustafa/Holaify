@extends('layouts.dashboard.app')
@section('title','Create Admin')
@section('content')
<div class="content">
    {{-- head --}}
    <div class="header p-2 pb-3">
        <div class="head">
            <h3>Create New Admin..</h3>
        </div>
        {{-- back to admins --}}
        <div class="add">
            <a href="/auth/admins">
                Admins
            </a>
        </div>
    </div>
    {{-- content --}}
    <div class="main">
        <form method="POST" action="/auth/admins" class="w-100 row m-0">
            @csrf
            {{-- label --}}
            <div class="col-md-2 p-0">
                <label class="py-4">Admin Info:</label>
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
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" required autofocus placeholder="Full Name">
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" required placeholder="Email Address" autocomplete="none">
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
                                    class="form-control @error('number') is-invalid @enderror" name="number" required
                                    placeholder="Phone Number">
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
                                <label for="title" class="col">{{ __('Password') }}</label>
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
                                <label for="title" class="col">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" autocomplete="none" placeholder="Confirm Password">
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
                        <a href="/auth/admins"></a> {{ __('Discard') }}
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection