@extends('layouts.dashboard.app')
@section('title','Orders')
@section('content')
<div class="content">
  {{-- header --}}
  @component('componants.dashHeading')
  @slot('title')
  Orders
  @endslot
  @endcomponent
  {{-- content --}}
  <div class="main">
    {{-- session message --}}
    @if (session('message'))
    @component('componants.session')
    {{session('message')}}
    @endcomponent
    @endif
    {{-- @if (!$orders->count()) --}}
    {{-- <div class="not-yet">
      <h3 class="my-3">No Orders Yet</h3>
      <img src="/img/not-found.svg" alt="no-order" width="380">
    </div>
    @else --}}
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
    {{-- Orders in grid --}}
    <div class="row mx-0 my-2 justify-around" v-if="grid">
      <div class="bg-white rounded-lg py-3 px-4 order m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item edit" href="#">Edit</a>
            <a class="dropdown-item delete" href="#">Delete</a>
          </div>
        </div>
        <img class="h-16 w-16 rounded-full mx-auto my-2" src="/img/default-user.svg">
        <div class="text-center">
          <div class="font-bold text-base mb-2 title w-100">Mahmoud Mustafa</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title">Order Code</div>
            <div class="font-bold text-sm mb-2 title">41st. bla bla bla bla</div>
            <div class="font-bold text-xs mb-2 title"><span class="deliverd">Deliverd</span></div>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-lg py-3 px-4 order m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item edit" href="#">Edit</a>
            <a class="dropdown-item delete" href="#">Delete</a>
          </div>
        </div>
        <img class="h-16 w-16 rounded-full mx-auto my-2" src="/img/default-user.svg">
        <div class="text-center">
          <div class="font-bold text-base mb-2 title w-100">Mahmoud Mustafa</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title">Order Code</div>
            <div class="font-bold text-sm mb-2 title">41st. bla bla bla bla</div>
            <div class="font-bold text-xs mb-2 title"><span class="deliverd">Deliverd</span></div>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-lg py-3 px-4 order m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item edit" href="#">Edit</a>
            <a class="dropdown-item delete" href="#">Delete</a>
          </div>
        </div>
        <img class="h-16 w-16 rounded-full mx-auto my-2" src="/img/default-user.svg">
        <div class="text-center">
          <div class="font-bold text-base mb-2 title w-100">Mahmoud Mustafa</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title">Order Code</div>
            <div class="font-bold text-sm mb-2 title">41st. bla bla bla bla</div>
            <div class="font-bold text-xs mb-2 title"><span class="deliverd">Deliverd</span></div>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-lg py-3 px-4 order m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item edit" href="#">Edit</a>
            <a class="dropdown-item delete" href="#">Delete</a>
          </div>
        </div>
        <img class="h-16 w-16 rounded-full mx-auto my-2" src="/img/default-user.svg">
        <div class="text-center">
          <div class="font-bold text-base mb-2 title w-100">Mahmoud Mustafa</div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title">Order Code</div>
            <div class="font-bold text-sm mb-2 title">41st. bla bla bla bla</div>
            <div class="font-bold text-xs mb-2 title"><span class="deliverd">Deliverd</span></div>
          </div>
        </div>
      </div>
    </div>
    {{-- table --}}
    <table class="table table-hover" v-else>
      <thead>
        <tr>
          <th scope="col" width="15">#</th>
          <th scope="col">Customer</th>
          <th scope="col">Order Code</th>
          <th scope="col">address</th>
          <th scope="col">State</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach($orders as $order) --}}
        <tr>
          {{-- <td>1</td>
          <td><a href="/auth/orders/{{$order->customer->id}}"> <img src="{{$order->customer->img}}"
            class="img-thumbnail d-none d-md-inline-block" width="35"
            style="margin-right:8px">{{$order->customer->name}}</a></td>
          <td>{{$order->product->title}}</td>
          <td>{{$order->customer->address}}</td> --}}
          <td>1</td>
          <td><a href="#"><img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
                style="margin-right:8px">Mark</a></td>
          <td>513239a9</td>
          <td>41st.</td>
          <td><span class="deliverd">Deliverd</span></td>
        </tr>
        {{-- @endforeach --}}
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