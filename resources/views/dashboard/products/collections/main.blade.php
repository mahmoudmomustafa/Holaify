@extends('layouts.dashboard.app')
@section('title','Collections')
@section('content')
<div class="content">
  {{-- header --}}
  <dash-head title="Collections" link="/auth/collections/create" add="Add Collection"></dash-head>
  {{-- content --}}
  <div class="main">
    {{-- session message --}}
    @if (session('message'))
    @component('componants.session')
    {{session('message')}}
    @endcomponent
    @endif
    {{-- @if(!$collections->count()) --}}
    {{-- <div class="not-yet ">
      <h3 class="my-3">No Collections Yet</h3>
      <img src="/img/not-found.svg" alt="no-collection" width="380">
    </div>
    @else --}}
    {{-- select & search --}}
    <div class="search w-100 py-3">
      {{-- sort --}}
      <div class="dropdown filter">
        <button class="text-sm text-gray-700 dropdown-toggle" type="button" id="filter_menu"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="lni-funnel" data-toggle="tooltip"
          data-placement="right" title="Filter"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
        </div>
      </div>
      {{-- view --}}
      @include('layouts.dashboard.grid')
      {{-- more settings --}}
      <div class="dropdown more_settings mr-2">
        <button class="text-sm text-gray-700 dropdown-toggle" type="button" id="more_settings"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="lni-cog" data-toggle="tooltip"
          data-placement="left" title="Settings"></i>
        </button>
        <div class="dropdown-menu py-1" aria-labelledby="more_settings">
          <a class="dropdown-item" href="#"><i class="lni-cloud-upload"></i><span>Import</span></a>
          <a class="dropdown-item" href="#"><i class="lni-exit-down"></i><span>Export</span></a>
          <div class="dropdown-divider my-1"></div>
          <a class="dropdown-item" href="#"><i class="lni-circle-minus"></i><span>Erase Data</span></a>
        </div>
      </div>
      {{-- search --}}
      <div class="form-group mb-0">
        <div class="p-0 position-relative">
          <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
          <input id="search" type="text" class="form-control search-input" name="search" placeholder="Search for Order">
        </div>
      </div>
    </div>
    {{-- view colections in grid --}}
    <div class="row mx-0 my-2 justify-around" v-if="grid">
      <div class="bg-white rounded-lg py-3 shadow px-4 order m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item edit" href="#">Edit</a>
            <a class="dropdown-item delete" href="#">Delete</a>
          </div>
        </div>
        <div class="text-center">
          <div class="font-bold text-xl mb-2 title w-100">Collection Name</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title">4 Products</div>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-lg py-3 shadow px-4 order m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item edit" href="#">Edit</a>
            <a class="dropdown-item delete" href="#">Delete</a>
          </div>
        </div>
        <div class="text-center">
          <div class="font-bold text-xl mb-2 title w-100">Collection Name</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title">4 Products</div>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-lg py-3 shadow px-4 order m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item edit" href="#">Edit</a>
            <a class="dropdown-item delete" href="#">Delete</a>
          </div>
        </div>
        <div class="text-center">
          <div class="font-bold text-xl mb-2 title w-100">Collection Name</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title">4 Products</div>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-lg py-3 shadow px-4 order m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item edit" href="#">Edit</a>
            <a class="dropdown-item delete" href="#">Delete</a>
          </div>
        </div>
        <div class="text-center">
          <div class="font-bold text-xl mb-2 title w-100">Collection Name</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title">4 Products</div>
          </div>
        </div>
      </div>
    </div>
    {{-- view collections in table --}}
    <table class="table table-hover" v-else>
      <thead>
        <tr>
          <th scope="col" width="15">#</th>
          <th scope="col">Collections</th>
          <th scope="col">no. of Products</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach($collections as $collection) --}}
        <tr>
          {{-- <td>1</td>
          <td><a href="/auth/collections/{{$collection->id}}">{{$collection->title}}</a></td>
          <td>{{$collection->no-of-products}}</td>
          --}}
          <td>1</td>
          <td><a href="#">Phones</a></td>
          <td>3 Product</td>
          <td><div class="w-100 d-flex justify-end position-relative">
              <i class="fas fa-ellipsis-v cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></i>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item edit" href="#">Edit</a>
                <a class="dropdown-item delete" href="#">Delete</a>
              </div>
            </div></td>
        </tr>
        {{-- @endforeach --}}
      </tbody>
    </table>
    {{-- @endif --}}
  </div>
</div>
@endsection