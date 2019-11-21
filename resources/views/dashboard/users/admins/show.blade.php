@extends('layouts.dashboard.app')
@section('title','Admin Name')
@section('content')
<div class="content">
    {{-- head --}}
    <div class="header p-2 pb-3">
        <div class="head">
            <h3>Admin Name..</h3>
        </div>
        {{-- back to admins --}}
        <div class="add">
            <a href="/auth/admins">
                Admins
            </a>
        </div>
    </div>
    {{-- content --}}
    <div class="main p-3">
        {{-- edit && delete --}}
        <div class="row w-100 mx-0 justify-content-end">
                {{-- Edit admin --}}
                <div class="mx-2">
                    <a href="#" class="btn btn-primary w-100 btn-edit">
                        {{ __('Edit') }}
                        <i class="fas fa-edit"></i>
                    </a>
                </div>
                {{-- delte admin --}}
                <div class="mx-3">
                    <form action="" method="get">
                        <button type="submit" class="btn btn-primary w-100 del-user">
                            {{ __('Delete') }}
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
        {{-- personal inf. --}}
        <div class="w-100 row m-0 justify-content-around">
            {{-- left side --}}
            <div class="mx-3" style="flex-grow:2">
                <div class="form">
                    <div class="container">
                        <label class="px-3 pb-4">Personal Info.</label>
                        <div class="div px-4">
                            {{-- name --}}
                            <div class="form-group">
                                <label for="name" class="col-form-label">Full Name :</label>
                                <div class="col-sm-12">
                                    <input type="text" readonly class="form-control-plaintext" id="name"
                                        value="Mahmoud Mustafa">
                                </div>
                            </div>
                            {{-- userName --}}
                            <div class="form-group">
                                <label for="username" class="col-form-label">UserName :</label>
                                <div class="col-sm-12">
                                    <input type="text" readonly class="form-control-plaintext" id="username"
                                        value="mahmoudmo">
                                </div>
                            </div>
                            {{-- email --}}
                            <div class="form-group">
                                <label for="email" class="col-form-label">Email :</label>
                                <div class="col-sm-12">
                                    <input type="text" readonly class="form-control-plaintext" id="email"
                                        value="mahmoud@gmail.com">
                                </div>
                            </div>
                            {{-- number --}}
                            <div class="form-group">
                                <label for="phone" class="col-form-label">Phone :</label>
                                <div class="col-sm-12">
                                    <input type="text" readonly class="form-control-plaintext" id="phone"
                                        value="01155536247">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- right side --}}
            <div class="mx-3" style="flex-grow:1">
                {{-- profile pic --}}
                <div class="form">
                    <div class="container">
                        <label class="px-2 pb-2">Profile Pic.</label>
                        <div class="div px-2">
                            {{-- img --}}
                            <img src="/img/default-user.svg" alt="admin-pic" width="200" class="img-thumbnail m-auto"
                                data-toggle="modal" data-target="#showImg">
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
                {{-- other info. --}}
                <div class="form">
                    <div class="container">
                        <label class="px-2 pb-3">Other info.</label>
                        <div class="div">
                            <label class="col">{{ __('Joined at : ') }} 6 / 6 / 96</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection