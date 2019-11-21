@extends('layouts.dashboard.app')
@section('title','Abandoned Checkouts')
@section('content')
<div class="content">
  {{-- header --}}
  @component('componants.dashHeading')
  @slot('title')
  Abandoned Checkouts
  @endslot
  @endcomponent
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
      {{-- view --}}
      @include('layouts.dashboard.grid')
      {{-- search --}}
      <div class="form-group mb-0">
        <div class="p-0 position-relative">
          <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
          <input id="search" type="text" class="form-control search-input" name="search" placeholder="Filter Orders">
        </div>
      </div>
    </div>
    {{-- checkout in grid --}}
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
          <div class="font-bold text-xl mb-2 title w-100">Customer Name</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title">Product Item</div>
            <div class="font-bold text-gray-700 text-xs mb-2 title">From 1:31 PM</div>
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
          <div class="font-bold text-xl mb-2 title w-100">Customer Name</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title">Product Item</div>
            <div class="font-bold text-gray-700 text-xs mb-2 title">From 1:31 PM</div>
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
          <div class="font-bold text-xl mb-2 title w-100">Customer Name</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title">Product Item</div>
            <div class="font-bold text-gray-700 text-xs mb-2 title">From 1:31 PM</div>
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
              <input type="checkbox" class="custom-control-input" @click="selectAll()" name="SelectAll" id="SelectAll">
              <label class="custom-control-label" for="SelectAll"></label>
            </div>
          </th>
          <th scope="col">Customer</th>
          <th scope="col">Order</th>
          <th scope="col">From</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach($checkouts as $checkout) --}}
        <tr>
          {{-- <td>
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="{{$checkout->id}}" id="{{$checkout->id}}">
          <label class="custom-control-label" for="{{$cheakout->id}}"></label>
  </div>
  </td>
  <td><a href=""><img src="{{$checkout->customer->img}}" class="img-thumbnail d-none d-md-inline-block" width="35"
        style="margin-right:8px">{{$checkout->customer->name}}</a></td>
  <td>{{$checkout->order->title}}</td> --}}
  <td>
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" @change="selected()" name="aband" id="">
      <label class="custom-control-label" for=""></label>
    </div>
  </td>
  <td><a href="#"> <img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
        style="margin-right:8px">Mark</a></td>
  <td>iphone7</td>
  <td>3 Days</td>
  </tr>
  {{-- $endforeach --}}
  </tbody>
  </table>
  {{-- @endif --}}
</div>
</div>
@endsection
@section('script')
<script>
  let app = new Vue({  
        el:".content",
        data:{
          grid:false,
          selectedAll:false,
          anySelect:false
        },
        methods:{
          // grid view
          view(){
            this.grid = !this.grid;
          },
          selectAll(){
            this.selectedAll = !this.selectedAll;
            if(this.selectedAll){
              // select All
              $('input[name="admin"]').prop('checked',true);
            }else{
              // diselect All
              $('input[name="admin"]').prop('checked',false);        
            }
          },
          selected(){
            if($('input[name="admin"]:not(:checked)').length == 0){ 
              // all are checked
              this.selectedAll = true;
              $('input[name="selectAll"]').prop('checked', true);
              $('input[name="selectAll"]').prop('indeterminate', false);
            }else{
              // some checkbox checked
              this.selectedAll = false;
              $('input[name="selectAll"]').prop('indeterminate', true);
              $('input[name="selectAll"]').prop('checked', false);
            }
          },
          closeSession(){
            $('.session').remove();
          }
        }
      })
</script>
@endsection