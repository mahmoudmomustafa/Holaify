@extends('layouts.dashboard.app')
@section('title','Clients')
@section('content')
<div class="content">
  {{-- header --}}
  <dash-head title="Clients" link="/auth/clients/create" add="New Client"></dash-head>
  {{-- content --}}
  <div class="main">
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
    {{-- view clients in grid --}}
    <div class="row mx-0 my-2 justify-center" v-if="grid">
      <div class="w-48 sm:w-56 bg-white rounded-lg py-3 px-4 customer m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="lni-cog cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item edit" href="#">Edit</a>
            <a class="dropdown-item delete" href="#">Delete</a>
          </div>
        </div>
        <img class="h-24 w-24 rounded-full mx-auto my-2" src="/img/default-user.svg">
        <div class="text-center">
          <div class="font-bold text-base mb-2 title w-100">Mahmoud Mustafa</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-xs mb-2 title">100 Orders</div>
            <div class="font-bold text-sm mb-2 title">400 EGP spent</div>
          </div>
        </div>
      </div>
    </div>
    {{-- view clients in table --}}
    <table class="table table-hover" v-else>
      <thead>
        <tr>
          <th scope="col" width="15">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" @click="selectAll()" name="selectAll" id="SelectAll">
              <label class="custom-control-label" for="SelectAll"></label>
            </div>
          </th>
          <th scope="col">Name</th>
          <th scope="col">Orders</th>
          <th scope="col">Spent</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="col">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="checked" v-model="checkedRows" @change="selected()"
                value="customerID" id="customerID">
              <label class="custom-control-label" for="customerID"></label>
            </div>
          </td>
          <td><a href="#"><img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
                style="margin-right:8px">Mark</a></td>
          <td>0 Orders</td>
          <td>LE 0.00 spent</td>
          <td>
            <div class="w-100 d-flex justify-end position-relative">
              <i class="lni-cog cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
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