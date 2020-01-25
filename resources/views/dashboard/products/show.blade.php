@extends('layouts.dashboard.app')
@section('title','Product title')
@section('content')
<div class="content">
    {{-- head --}}
    <show-head title="Product title" link="/auth/products" back="Products"></show-head>
    {{-- product --}}
    <div class="main px-4 py-3">
        {{-- edit && delete --}}
        <div class="row w-100 mx-0 justify-content-end">
            {{-- Edit product --}}
            <div class="mx-2">
                <a href="#" class="btn btn-primary w-100 btn-edit">
                    {{ __('Edit') }}
                    <i class="fas fa-edit"></i>
                </a>
            </div>
            {{-- delte product --}}
            <div class="mx-3">
                <form action="" method="get">
                    <button type="submit" class="btn btn-primary w-100 del-user">
                        {{ __('Delete') }}
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </div>
        {{-- content --}}
        <div class="w-100 row m-0 justify-content-around">
            <div class="mx-3" style="flex-grow:2">
                {{-- title ,desc. --}}
                <div class="form">
                    <div class="container">
                        <div class="div px-4">
                            {{-- title --}}
                            <div class="form-group">
                                <label for="name" class="col">Title :</label>
                                <div class="col-12">
                                    <input type="text" readonly class="form-control-plaintext" id="name" value="title">
                                </div>
                            </div>
                            {{-- description --}}
                            <div class="form-group">
                                <label for="description" class="col">Description :</label>
                                <div class="col-12">
                                    <input type="text" readonly class="form-control-plaintext" id="description"
                                        value="this is a description">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- price , quantity --}}
                <div class="form">
                    <div class="container">
                        <div class="div px-4">
                            {{-- collection --}}
                            <div class="form-group">
                                <label for="collection" class="col">Collection :</label>
                                <div class="col-12">
                                    <input type="text" readonly class="form-control-plaintext" id="collection"
                                        value="Collection Name">
                                </div>
                            </div>
                            {{-- price --}}
                            <div class="form-group">
                                <label for="price" class="col">Price :</label>
                                <div class="col-12">
                                    <input type="text" readonly class="form-control-plaintext" id="price"
                                        value="EGP 0.00">
                                </div>
                            </div>
                            {{-- quantity --}}
                            <div class="form-group">
                                <label for="quantity" class="col">Description :</label>
                                <div class="col-12">
                                    <input type="text" readonly class="form-control-plaintext" id="quantity"
                                        value="4 In inventory">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- right side --}}
            <div class="mx-3" style="flex-grow:1">
                {{-- image --}}
                <div class="form">
                    <div class="container">
                        <label class="px-2 pb-2">Product Image</label>
                        <div class="div px-2">
                            {{-- img --}}
                            <img src="/img/default-product.svg" alt="collection-pic" width="200"
                                class="img-thumbnail m-auto" data-toggle="modal" data-target="#showImg">
                            {{-- preview Image  --}}
                            <div class="modal fade" id="showImg" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-none">
                                            <button data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="#" id="prevImg" width="500" class="img-fluid m-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- type , tags --}}
                <div class="form px-4">
                    {{-- type --}}
                    <div class="form-group">
                        <label for="type" class="col">Product Type :</label>
                        <div class="col-12">
                            <input type="text" readonly class="form-control-plaintext" id="type" value="Mobile Phone">
                        </div>
                    </div>
                    {{-- tags --}}
                    <div class="form-group">
                        <label for="tags" class="col">Tags :</label>
                        <div class="col-12">
                            <input type="text" readonly class="form-control-plaintext" id="tags" value="#Iphone">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection