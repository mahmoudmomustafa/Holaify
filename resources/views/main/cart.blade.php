@extends('layouts.main')
@section('title','Cart')
@section('content')
<div class="container">
    <div class="cart-div p-3">
        <div class="row mx-0 justify-content-center">
            {{-- no cart --}}
            <div class="p-3 d-flex justify-content-center no-cart">
                {{-- img --}}
                <div class="img m-auto">
                    <img src="/img/empty-cart.gif" width="520" alt="no-cart">
                </div>
                {{-- empty cart --}}
                <div class="text m-auto">
                    <div class="p-3">Cart is empty</div>
                </div>
            </div>
            {{-- cart --}}
            {{-- ptoduct image --}}
            {{-- <div class="products max-w-2xl w-full m-1 bg-white shadow-sm rounded-lg">
                <div class="header text-3xl font-bold p-4">
                    Shopping Cart (2)
                </div>
                products
                <div class="p-3">
                    <div class="max-w-sm min-w-sm md:flex bg-gray-200 shadow rounded-lg mx-auto my-1 p-6">
                        <img class="h-24 w-24 rounded-full mx-auto" src="/img/shopping.jpg">
                        <div class="text-center w-100 d-flex justify-content-center flex-column">
                            <div class="text-gray-600 text-xs">11-Nov-19 5:09 PM</div>
                            <h2 class="text-2xl font-bold">Profuct tite</h2>
                            <div class="text-purple-500 text-base font-bold">EGP 10.0</div>
                            <button class="btn btn-primary rounded-full w-80 text-xs mx-auto mt-2">Delete form Cart</button>
                        </div>
                    </div>
                    <div class="max-w-sm min-w-sm md:flex bg-gray-200 shadow rounded-lg mx-auto my-1 p-6">
                            <img class="h-24 w-24 rounded-full mx-auto" src="/img/shopping.jpg">
                            <div class="text-center w-100 d-flex justify-content-center flex-column">
                                <div class="text-gray-600 text-xs">11-Nov-19 5:09 PM</div>
                                <h2 class="text-2xl font-bold">Profuct tite</h2>
                                <div class="text-purple-500 text-base font-bold">EGP 10.0</div>
                                <button class="btn btn-primary rounded-full w-80 text-xs mx-auto mt-2">Delete form Cart</button>
                            </div>
                        </div>
                </div>
            </div>
            product info
            <div class="checkouts m-1 p-4 bg-white shadow-sm rounded-lg" style="height:fit-content">
                <div class="m-2">
                    <div class="text-3xl font-bold pb-1">Total Price:</div>
                    <div class="text-xl font-bold pb-1 ml-5">1000.0 EGP</div>
                    <div class="add-to-cart py-3 px-2 text-center">
                        <button class="btn btn-primary text-lg mx-auto">Checkout your Orders</button>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection