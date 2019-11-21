@extends('layouts.main')
@section('title','Edit Profile')
@section('content')
<div class="container-fluid">
  <div class="d-flex user flex-wrap">
    <div class="w-full max-w-xs m-2 mx-auto bg-white rounded overflow-hidden shadow-md user-div">
      <img class="w-32 mx-auto mt-5 mb-3" src="/img/default-user.svg" alt="admin-img">
      <div class="p-3 body">
        <div class="font-bold text-2xl mb-2 title w-100 text-center">Mahmoud Mustafa</div>
        <div class="d-flex flex-column m-3 setting">
            <div class="font-bold text-base mb-2 li active"><a href="/profile" class="w-100">Personal Info.</a></div>
            <div class="font-bold text-base mb-2 li"><a href="/profile/orders" class="w-100">Orders</a></div>
            <div class="font-bold text-base mb-2 li"><a href="/profile/setting" class="w-100">Settings</a></div>
        </div>
      </div>
    </div>
    <div class="max-w-4xl mx-auto rounded overflow-hidden shadow-md w-100 bg-white m-2">
      <div class="main p-4">
        <div class="header">
          Edit Your Information :
        </div>
        <div class="body px-5 py-2">
          {{-- Personal info --}}
          <div class="info">
            <form action="" method="post" class="w-100">
              @csrf
              {{-- save --}}
              <div class="row w-100 mx-0 my-3 justify-content-end">
                {{-- submit --}}
                <div class="mx-3">
                  <button type="submit" class="btn btn-primary w-100">
                    {{ __('Save') }}
                  </button>
                </div>
                {{-- back --}}
                <div class="mx-2">
                  <a href="/profile" class="btn btn-primary w-100 btn-dis">
                    {{ __('Discard') }}
                  </a>
                </div>
              </div>
              {{-- names --}}
              <div class="form-group row mb-0">
                {{-- name --}}
                <div class="col-md-6 position-relative mb-3">
                  <label for="title" class="col">{{ __('Full Name') }}</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    required autofocus placeholder="Full Name">
                  {{-- value="{{ $customer->name }}" --}}
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                {{-- username --}}
                <div class="col-md-6 position-relative mb-3">
                  <label for="title" class="col">{{ __('UserName') }}</label>
                  <input id="UserName" type="text" class="form-control @error('userName') is-invalid @enderror"
                    name="userName" required placeholder="UserName" autocomplete="none">
                  {{-- value="{{ $customer->userName }}" --}}
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
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    required placeholder="Email Address" autocomplete="none">
                  {{-- value="{{ $customer->email }}" --}}
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
                  <input id="number" type="text" class="form-control @error('number') is-invalid @enderror"
                    name="number" required placeholder="Phone Number">
                  {{-- value="{{ $customer->number }}" --}}
                  @error('number')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              {{-- company --}}
              <div class="form-group row">
                  <div class="col-md-12">
                    <label for="title" class="col">{{ __('Company') }}</label>
                    <input id="company" type="text" class="form-control @error('company') is-invalid @enderror"
                      name="company" required placeholder="Company name">
                    {{-- value="{{ $customer->number }}" --}}
                    @error('company')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              {{-- address --}}
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="title" class="col">{{ __('Address') }}</label>
                  <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                    name="address" required placeholder="Adress">
                  {{-- value="{{ $customer->number }}" --}}
                  @error('address')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
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
@endsection