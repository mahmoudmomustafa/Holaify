@extends('layouts.main')
@section('title','Profile')
@section('content')
<div class="container-fluid">
  <div class="d-flex user flex-wrap">
    <div class="w-full max-w-xs m-2 mx-auto bg-white rounded overflow-hidden shadow-md user-div">
      <img class="w-32 mx-auto mt-5 mb-3" src="/img/default-user.svg" alt="admin-img">
      <div class="p-3 body">
        <div class="font-bold text-2xl mb-2 title w-100 text-center">Mahmoud Mustafa</div>
        <div class="d-flex flex-column m-3 setting">
          <div class="font-bold text-base mb-2 li"><a href="/profile" class="w-100">Personal Info.</a></div>
          <div class="font-bold text-base mb-2 li"><a href="/profile/orders" class="w-100">Orders</a></div>
          <div class="font-bold text-base mb-2 li active"><a href="/profile/setting" class="w-100">Settings</a></div>
        </div>
      </div>
    </div>
    <div class="max-w-4xl mx-auto rounded overflow-hidden shadow-md w-100 bg-white m-2">
      <div class="main p-4">
        <div class="header">
          Settings :
        </div>
        <div class="body px-5 py-2">
          {{-- setting --}}
          <div class="settings">
            {{-- change password --}}
            <div class="d-flex flex-column my-2">
              <div class="font-bold text-base m-2">Change your password : </div>
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
              <button type="submit" class="btn btn-primary">Change Password</button>
            </div>
            {{-- deletes --}}
            <div class="d-flex flex-row flex-wrap align-items-center my-2">
              <div class="font-bold text-base m-2">Delete All Your Orders : </div>
              <button type="button" class="btn btn-danger">Erase Orders</button>
            </div>
            {{-- delete user --}}
            <div class="d-flex flex-row flex-wrap align-items-center my-2">
              <div class="font-bold text-base m-2">Delete Your Account : </div>
              <button type="button" class="btn btn-danger">Delete Account</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection