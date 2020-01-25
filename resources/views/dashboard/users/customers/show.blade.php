@extends('layouts.dashboard.app')
@section('title','Client Name')
@section('content')
<div class="content">
    {{-- header--}}
    <show-head title="Clients Name" link="/auth/clients" back="Clients"></show-head>
    {{-- content --}}
    <div class="main">
        {{-- edit && delete --}}
        <div class="row w-100 mx-0 justify-content-end mt-2">
            {{-- Edit customer --}}
            <div class="mx-2">
                <a href="#" class="btn btn-primary w-100 btn-edit">
                    {{ __('Edit') }}
                    <i class="fas fa-edit"></i>
                </a>
            </div>
            {{-- delte customer --}}
            <div class="ml-2">
                <form action="" method="get">
                    <button type="submit" class="btn btn-primary w-100 del-user">
                        {{ __('Delete') }}
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </div>
        {{-- info --}}
        <div class="inf md:flex">
            <div class="md:w-64 w-full bg-white rounded p-6 m-1 shadow-sm">
                <div id="img">
                    <img class="h-32 w-32 rounded-full mx-auto mt-3 mb-4" src="/img/default-user.svg">
                </div>
                <div class="text-center m-3">
                    <h2 class="text-2xl mb-2">Erin Lindford</h2>
                    <div class="text-gray-500 text-base break-words">mahmoud@gmail.com</div>
                </div>
            </div>
            <div class="md:w-64 m-1">
                <div class="w-full bg-white rounded p-4 mb-1 shadow-sm">
                    <div class="text-left m-3">
                        <div class="text-purple-500 text-base mb-2">@mahmoudmo</div>
                        <span class="text-sm mb-2 flex items-center title"><i
                                class="far fa-envelope mr-2"></i>mahmoud@gmail.com</span>
                        <div class="text-base mb-2"><i class="lni-phone-handset mr-2"></i>01155536247</div>
                    </div>
                </div>
                <div class="w-full bg-white rounded p-4 mt-1 shadow-sm">
                    <div class="text-left m-3">
                        <span class="text-purple-500 text-base mb-2 break-all"><i class="far fa-building mr-2"></i>41st
                            Zayiton</span>
                        <span class="text-base mb-2 flex items-center break-all"><i
                                class="fas fa-warehouse mr-2"></i>Holaify Company</span>
                    </div>
                </div>
            </div>
            <div class="w-full m-1">
                <div class="w-full bg-white rounded p-4 mb-1 shadow-sm">
                    <div class="text-left m-3">
                        <div class="text-purple-500 text-base mb-2">@mahmoudmo</div>
                        <span class="text-sm mb-2 flex items-center title"><i
                                class="far fa-envelope mr-2"></i>mahmoud@gmail.com</span>
                        <div class="text-base mb-2"><i class="lni-phone-handset mr-2"></i>01155536247</div>
                    </div>
                </div>
                <div class="w-full bg-white rounded p-4 mt-1 shadow-sm">
                    <div class="text-left m-3">
                        <span class="text-purple-500 text-base mb-2 break-all"><i class="far fa-building mr-2"></i>41st
                            Zayiton</span>
                        <span class="text-base mb-2 flex items-center break-all"><i
                                class="fas fa-warehouse mr-2"></i>Holaify Company</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- orders & wishlists--}}
        <div id="client_tables">
            <div class="w-full bg-white rounded-lg p-6 my-2 shadow-sm">
                {{-- cusotmer orders --}}
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#orders" role="tab"
                            aria-controls="home" aria-selected="true">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#whishlists" role="tab"
                            aria-controls="profile" aria-selected="false">Wishlists</a>
                    </li>
                </ul>
                {{-- tables --}}
                <div class="tab-content" id="myTabContent">
                    {{-- orders --}}
                    <div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                        {{-- if customer has orders --}}
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Order</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">State</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>order Code</td>
                                        <td class="text-sm">12 Nov 19</td>
                                        <td><span class="text-sm deliverd">Deliverd</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- empty --}}
                        {{-- <div class="div px-4">
                                    <label>This customer hasn’t placed any orders yet</label>
                                </div> --}}
                    </div>
                    {{-- whishlists --}}
                    <div class="tab-pane fade" id="whishlists" role="tabpanel" aria-labelledby="whishlists-tab">
                        {{-- if customer has whishlists --}}
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>product name</td>
                                        <td class="text-sm">12 Nov 19</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- empty --}}
                        {{-- <div class="div px-4">
                                    <label>This customer hasn’t placed any orders yet</label>
                                </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection