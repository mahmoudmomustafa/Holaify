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
          <div class="font-bold text-base mb-2 li active"><a href="/profile" class="w-100">Personal Info.</a></div>
          <div class="font-bold text-base mb-2 li"><a href="/profile/orders" class="w-100">Orders</a></div>
          <div class="font-bold text-base mb-2 li"><a href="/profile/setting" class="w-100">Settings</a></div>
        </div>
      </div>
    </div>
    <div class="max-w-4xl mx-auto rounded overflow-hidden shadow-md w-100 bg-white m-2">
      <div class="main p-4">
        <div class="header">
          Personal Information :
        </div>
        <div class="body px-5 py-2">
          {{-- Personal info --}}
          <div class="info">
            <div class="edit d-flex justify-end">
                <a href="/profile/edit">
                  <i class="fas fa-edit"></i>
                </a>
            </div>
            {{-- name --}}
            <div class="form-group">
              <label for="name" class="col-form-label">Full Name :</label>
              <div class="col-sm-12">
                <input type="text" readonly class="form-control-plaintext" id="name" value="Mahmoud Mustafa">
              </div>
            </div>
            {{-- userName --}}
            <div class="form-group">
              <label for="username" class="col-form-label">UserName :</label>
              <div class="col-sm-12">
                <input type="text" readonly class="form-control-plaintext" id="username" value="mahmoudmo">
              </div>
            </div>
            {{-- email --}}
            <div class="form-group">
              <label for="email" class="col-form-label">Email :</label>
              <div class="col-sm-12">
                <input type="text" readonly class="form-control-plaintext" id="email" value="mahmoud@gmail.com">
              </div>
            </div>
            {{-- number --}}
            <div class="form-group">
              <label for="phone" class="col-form-label">Phone :</label>
              <div class="col-sm-12">
                <input type="text" readonly class="form-control-plaintext" id="phone" value="01155536247">
              </div>
            </div>
            {{-- company --}}
            <div class="form-group">
              <label for="company" class="col-form-label">Company :</label>
              <div class="col-sm-12">
                <input type="text" readonly class="form-control-plaintext" id="company" value="Holaify Co.">
              </div>
            </div>
            {{-- address --}}
            <div class="form-group">
              <label for="address" class="col-form-label">Address :</label>
              <div class="col-sm-12">
                <input type="text" readonly class="form-control-plaintext" id="address" value="41st. balb bla bal ">
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