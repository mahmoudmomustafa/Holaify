@extends('layouts.dashboard.app')
@section('title','Collection name')
@section('content')
<div class="content">
  {{-- head --}}
  <show-head title="Collection title" link="/auth/collections" back="Collections"></show-head>
  {{-- content --}}
  <div class="main px-4 py-3">
    {{-- edit && delete --}}
    <div class="row w-100 mx-0 justify-content-end">
      {{-- Edit collection --}}
      <div class="mx-2">
        <a href="#" class="btn btn-primary w-100 btn-edit">
          {{ __('Edit') }}
          <i class="fas fa-edit"></i>
        </a>
      </div>
      {{-- delte collection --}}
      <div class="mx-3">
        <form action="" method="get">
          <button type="submit" class="btn btn-primary w-100 del-user">
            {{ __('Delete') }}
            <i class="far fa-trash-alt"></i>
          </button>
        </form>
      </div>
    </div>
    {{-- info --}}
    <div class="row w-100 mx-0 justify-content-around">
      {{-- left side. --}}
      <div class="mx-3" style="flex-grow:2">
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
        {{-- collection products --}}
        <div class="form">
          <div class="container">
            <label class="px-2 pb-3">Products..</label>
            {{-- if customer has orders --}}
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">product</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>product</td>
                </tr>
              </tbody>
            </table>
            {{-- empty --}}
            {{-- <div class="div px-4">
                                    <label>There are no products in this collection</label>
                                </div> --}}
          </div>
        </div>
      </div>
      {{-- right side --}}
      <div class="mx-3" style="flex-grow:1">
        {{-- collection img --}}
        <div class="form">
          <div class="container">
            <label class="px-2 pb-2">Collection Image</label>
            <div class="div px-2">
              {{-- img --}}
              <img src="/img/default-product.svg" alt="collection-pic" width="200" class="img-thumbnail m-auto"
                data-toggle="modal" data-target="#showImg">
              {{-- preview Image  --}}
              <div class="modal fade" id="showImg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
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
      </div>
    </div>
  </div>
</div>
@endsection