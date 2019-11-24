@extends('layouts.dashboard.app')
@section('title','Customer Name')
@section('content')
<div class="content">
    {{-- head --}}
    <div class="header p-2 pb-3">
        <div class="head">
            <h3>Customer Name..</h3>
        </div>
        {{-- back to customers --}}
        <div class="add">
            <a href="/auth/customers">
                Customers
            </a>
        </div>
    </div>
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
            <div class="md:w-64 w-full bg-white rounded-lg p-6 m-1">
                <img class="h-32 w-32 rounded-full mx-auto my-3" src="/img/default-user.svg">
                <div class="text-center">
                    <h2 class="text-lg">Erin Lindford</h2>
                    <div class="text-purple-500">@mahmoudmo</div>
                    <div class="text-gray-600">mahmoud@gmail.com</div>
                    <div class="text-gray-600">01155536247</div>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg p-6 ml-1 my-1">
                {{-- company --}}
                <div class="form-group">
                    <label for="company" class="col-form-label">Company :</label>
                    <div class="col-sm-12">
                        <input type="text" readonly class="form-control-plaintext" id="company" value="Holafiy">
                    </div>
                </div>
                {{-- address --}}
                <div class="form-group">
                    <label for="address" class="col-form-label">Address :</label>
                    <div class="col-sm-12">
                        <input type="text" readonly class="form-control-plaintext" id="address" value="41st">
                    </div>
                </div>
            </div>
        </div>
        {{-- orders --}}
        <div class="w-full bg-white rounded-lg p-6 m-2">
            {{-- cusotmer orders --}}
            <label class="px-2 pb-3">Orders..</label>
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
    </div>
</div>
@endsection