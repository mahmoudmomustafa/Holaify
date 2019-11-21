@extends('layouts.dashboard.app')
@section('title','Customers')
@section('content')
<div class="content">
  {{-- header --}}
  @component('componants.dashHeading')
  @slot('title')
  Customers
  @endslot
  @slot('link')
  /auth/customers/create
  @endslot
  @slot('Add')
  Add Customer
  @endslot
  @endcomponent
  {{-- content --}}
  <div class="main">
    {{-- search --}}
    <div class="search w-100 py-3">
      {{-- view--}}
      @include('layouts.dashboard.grid')
      {{-- search --}}
      <div class="form-group mb-0">
        <div class="position-relative p-0">
          <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
          <input id="search" type="text" class="form-control search-input" name="search" placeholder="Filter Customers">
        </div>
      </div>
    </div>
    {{-- csutomr in grid --}}
    <div class="row mx-0 my-2 justify-around" v-if="grid">
      <div class="bg-white rounded-lg py-3 px-4 customer m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
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
      <div class="bg-white rounded-lg py-3 px-4 customer m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
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
      <div class="bg-white rounded-lg py-3 px-4 customer m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
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
      <div class="bg-white rounded-lg py-3 px-4 customer m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
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
      <div class="bg-white rounded-lg py-3 px-4 customer m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
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
      <div class="bg-white rounded-lg py-3 px-4 customer m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
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
      <div class="bg-white rounded-lg py-3 px-4 customer m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
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
    {{-- customer in table --}}
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
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="col">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="customer" @change="selected()"
                value="customerID" id="selectAll">
              <label class="custom-control-label" for="selectAll"></label>
            </div>
          </td>
          <td><a href="#"><img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
                style="margin-right:8px">Mark</a></td>
          <td>0 Orders</td>
          <td>LE 0.00 spent</td>
        </tr>
      </tbody>
    </table>
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
        $('input[name="customer"]').prop('checked',true);
      }else{
        // diselect All
        $('input[name="customer"]').prop('checked',false);        
      }
    },
    selected(){
      if($('input[name="customer"]:not(:checked)').length == 0){ 
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