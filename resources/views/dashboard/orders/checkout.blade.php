@extends('layouts.dashboard.app')
@section('title','Abandoned Checkouts')
@section('content')
<div class="content">
  {{-- header --}}
  <dash-head title="Abandoned Checkouts"></dash-head>
  {{-- content --}}
  <div class="main">
    {{-- session message --}}
    @if (session('message'))
    <div class="text-center session">
      <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
        role="alert">
        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{ session('message')}}</span>
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20" style="color:white" @click="closeSession()">
          <title>Close</title>
          <path
            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
        </svg>
      </div>
    </div>
    @endif
    {{-- @if(!$checkouts->count()) --}}
    {{-- <div class="not-yet">
      <h3 class="p-2 my-3">No Abandoed Checkouts Yet</h3>
      <img src="/img/not-found.svg" alt="no-order" width="380">      
    </div> 
    @else--}}
    {{-- search --}}
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
    {{-- checkout in grid --}}
    <div class="row mx-0 my-2 justify-around" v-if="grid">
      <div class="w-56 bg-white rounded-lg py-3 shadow px-4 order m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item edit" href="#">Edit</a>
            <a class="dropdown-item delete" href="#">Delete</a>
          </div>
        </div>
        <div class="text-center">
          <div class="font-bold text-xl mb-2 title w-100">Customer Name</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title">Product Item</div>
            <div class="font-bold text-gray-700 text-xs mb-2 title">From 1:31 PM</div>
          </div>
        </div>
      </div>
    </div>
    {{-- checkout in table --}}
    <table class="table table-hover" v-else>
      <thead>
        <tr>
          <th scope="col" width="15">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" @click="selectAll()" name="SelectAll" id="SelectAll"
                :value="checkedRows">
              <label class="custom-control-label" for="SelectAll"></label>
            </div>
          </th>
          <th scope="col">Customer</th>
          <th scope="col">Order</th>
          <th scope="col">From</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input custom" name="checked" id="customer" @click="selected()"
                value="customer1" v-model="checkedRows">
              <label class="custom-control-label" for="customer"></label>
            </div>
          </td>
          <td><a href="#"> <img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
                style="margin-right:8px">Mark</a></td>
          <td>iphone7</td>
          <td>3 Days</td>
          <td>
            <div class="w-100 d-flex justify-end position-relative">
              <i class="fas fa-ellipsis-v cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></i>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item edit" href="#">Edit</a>
                <a class="dropdown-item delete" href="#">Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input custom" name="checked" id="custome2r" @click="selected()"
                value="customer1asda" v-model="checkedRows">
              <label class="custom-control-label" for="custome2r"></label>
            </div>
          </td>
          <td><a href="#"> <img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
                style="margin-right:8px">Mark</a></td>
          <td>iphone7</td>
          <td>3 Days</td>
          <td>
            <div class="w-100 d-flex justify-end position-relative">
              <i class="fas fa-ellipsis-v cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></i>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item edit" href="#">Edit</a>
                <a class="dropdown-item delete" href="#">Delete</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection