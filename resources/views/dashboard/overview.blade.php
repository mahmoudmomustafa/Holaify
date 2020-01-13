@extends('layouts.dashboard.app')
@section('title','Overview')
@section('content')

<div class="content dash">
    {{-- head --}}
    <div class="head">
        <div class="py-2">
            {{-- <h3>Hola,{{Auth::user()->name}}</h3> --}}
            <h3>Hola, Mahmoud</h3>
        </div>
        <div class="add">
            <div class="dropdown">
                <button class="btn btn-primary rounded-full dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Create
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/auth/collections/create">Collection</a>
                    <a class="dropdown-item" href="/auth/products/create">Product</a>
                    <a class="dropdown-item" href="/auth/admins/create">Admin</a>
                    <a class="dropdown-item" href="/auth/customers/create">Customer</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Content --}}
    <div class="overview p-2">
        {{-- overview --}}
        <div class="flex flex-wrap">
            <div class="md:w-2/3 w-full">
                <div class="m-1">
                    <div class="div-table">
                        <div class="heading font-bold mb-2">
                            Sales
                        </div>
                        <div class="wrapper">
                            <sales-chart></sales-chart>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3 w-full">
                <div class="m-1">
                    <div class="div-table">
                        <div class="heading pb-2">
                            Orders
                        </div>
                        <div class="wrapper">
                            <order-chart></order-chart>
                        </div>
                        <div class="num text-lg text-gray-700 text-center pt-3">
                            10 Orders
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3 w-full">
                <div class="m-1">
                    <div class="div-table">
                        <div class="heading">
                            Total Order
                        </div>
                        <div class="body">
                            asdsd 0
                            {{-- {{$orders->count()}} --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-2/3 w-full">
                <div class="m-1">
                    <div class="div-table">
                        <div class="heading">
                            Total Customers
                        </div>
                        <div class="body">
                            0
                            {{-- {{$customers->count()}} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection