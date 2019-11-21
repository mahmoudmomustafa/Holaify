@extends('layouts.dashboard.app')
@section('title','Overview')
@section('content')

<div class="content dash">
    {{-- head --}}
    <div class="head">
        <div class="py-2">
            {{-- <h3>Welcome,{{Auth::user()->name}}</h3> --}}
            <h3>Welcome, Mahmoud</h3>
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
    <div class="overview p-3">
        {{-- overview --}}
        <div class="row mx-0 justify-center py-3">
            <div class="div-table md:w-1/4 w-full">
                <div class="heading">
                    Orders
                </div>
                <div class="chart-container">
                    <canvas id="orders" width="200" height="200"></canvas>
                </div>
            </div>
            <div class="div-table md:w-2/4 w-full">
                <div class="heading font-bold">
                    Orders Weekly
                </div>
                <div class="body">
                    
                </div>
            </div>
            <div class="div-table md:w-2/4 w-full">
                <div class="heading">
                    Total Order
                </div>
                <div class="body">
                    asdsd 0
                    {{-- {{$orders->count()}} --}}
                </div>
            </div>
            <div class="div-table md:w-1/4 w-full">
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
@endsection