@extends('layouts.main')
@section('title','Lists')
@section('content')
<div class="container-fluid">
  <div class="d-flex user flex-wrap">
    <div class="w-full max-w-xs m-2 mx-auto bg-white rounded overflow-hidden shadow-md user-div">
      <img class="w-32 mx-auto mt-5 mb-3" src="/img/default-user.svg" alt="admin-img">
      <div class="p-3 body">
        <div class="font-bold text-2xl mb-2 title w-100 text-center">Mahmoud Mustafa</div>
        <div class="d-flex flex-column m-3 setting">
          <div class="font-bold text-base mb-2 li"><a href="/profile" class="w-100">Personal Info.</a></div>
          <div class="font-bold text-base mb-2 li active"><a href="/profile/lists" class="w-100">Your Lists</a></div>
          <div class="font-bold text-base mb-2 li"><a href="/profile/orders" class="w-100">Orders</a></div>
          <div class="font-bold text-base mb-2 li"><a href="/profile/setting" class="w-100">Settings</a></div>
        </div>
      </div>
    </div>
    <div class="max-w-4xl mx-auto rounded overflow-hidden shadow-md w-100 bg-white m-2">
      <div class="main p-4">
        <div class="header">
          Lists :
        </div>
        <div class="body px-5 py-2">
          {{-- lists --}}
          <div class="orders d-flex">
            <div class="w-48 max-w-xs rounded overflow-hidden shadow-md product">
                <div class="like">
                    <i class="far fa-heart"></i>
                </div>
                <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-2 body">
                    <div class="font-bold text-lg mb-2 title w-100">The Coldest Sunset</div>
                    <div class="d-flex justify-content-between items-center m-1">
                        <span class="new">New</span>
                        <div class="price font-bold text-sm">EGP 10.00</div>
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