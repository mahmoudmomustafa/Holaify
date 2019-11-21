@extends('layouts.dashboard.app')
@section('title','Products')
@section('content')
<div class="content">
  {{-- header --}}
  @component('componants.dashHeading')
  @slot('title')
  Products
  @endslot
  @slot('link')
  /auth/products/create
  @endslot
  @slot('Add')
  Add Products
  @endslot
  @endcomponent
  {{-- content --}}
  <div class="main">
    {{-- search --}}
    <div class="search w-100 py-3" id="search">
      {{-- view --}}
      {{-- @include('layouts.dashboard.grid') --}}
      <view-com></view-com>
      {{-- search --}}
      <div class="form-group mb-0">
        <div class="p-0 position-relative">
          <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
          <input id="search" type="text" class="form-control search-input" name="search" placeholder="Filters Products">
        </div>
      </div>
    </div>
    {{-- grid --}}
    <div class="row mx-0 my-2 justify-around" v-if="grid">
      <div class="w-48 bg-white m-2 rounded shadow-md product">
        <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
        <div class="p-2 body">
          <div class="font-bold text-lg mb-2 title w-100">The Coldest Sunset</div>
          <div class="d-flex flex-column">
            <div class="rate">
              <input type="radio" name="stars" id="star-1" class="d-none" />
              <input type="radio" name="stars" id="star-2" class="d-none" />
              <input type="radio" name="stars" id="star-3" class="d-none" />
              <input type="radio" name="stars" id="star-4" class="d-none" />
              <input type="radio" name="stars" id="star-5" class="d-none" />
              <section>
                <label for="star-1">
                  <i class="lni-star-filled"></i>
                </label>
                <label for="star-2">
                  <i class="lni-star-filled"></i>
                </label>
                <label for="star-3"><i class="lni-star-filled"></i>
                </label>
                <label for="star-4"><i class="lni-star-filled"></i>
                </label>
                <label for="star-5"><i class="lni-star-filled"></i>
                </label>
              </section>
            </div>
            <div class="w-100 d-flex justify-between position-relative">
              <div class="price font-bold text-sm mb-2">EGP 10.00</div>
              <i class="fas fa-ellipsis-v cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></i>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item edit" href="#">Edit</a>
                <a class="dropdown-item delete" href="#">Delete</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-48 bg-white m-2 rounded shadow-md product">
        <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
        <div class="p-2 body">
          <div class="font-bold text-lg mb-2 title w-100">The Coldest Sunset</div>
          <div class="d-flex flex-column">
            <div class="rate">
              <input type="radio" name="stars" id="star-1" class="d-none" />
              <input type="radio" name="stars" id="star-2" class="d-none" />
              <input type="radio" name="stars" id="star-3" class="d-none" />
              <input type="radio" name="stars" id="star-4" class="d-none" />
              <input type="radio" name="stars" id="star-5" class="d-none" />
              <section>
                <label for="star-1">
                  <i class="lni-star-filled"></i>
                </label>
                <label for="star-2">
                  <i class="lni-star-filled"></i>
                </label>
                <label for="star-3"><i class="lni-star-filled"></i>
                </label>
                <label for="star-4"><i class="lni-star-filled"></i>
                </label>
                <label for="star-5"><i class="lni-star-filled"></i>
                </label>
              </section>
            </div>
            <div class="w-100 d-flex justify-between position-relative">
              <div class="price font-bold text-sm mb-2">EGP 10.00</div>
              <i class="fas fa-ellipsis-v cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></i>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item edit" href="#">Edit</a>
                <a class="dropdown-item delete" href="#">Delete</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-48 bg-white m-2 rounded shadow-md product">
        <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
        <div class="p-2 body">
          <div class="font-bold text-lg mb-2 title w-100">The Coldest Sunset</div>
          <div class="d-flex flex-column">
            <div class="rate">
              <input type="radio" name="stars" id="star-1" class="d-none" />
              <input type="radio" name="stars" id="star-2" class="d-none" />
              <input type="radio" name="stars" id="star-3" class="d-none" />
              <input type="radio" name="stars" id="star-4" class="d-none" />
              <input type="radio" name="stars" id="star-5" class="d-none" />
              <section>
                <label for="star-1">
                  <i class="lni-star-filled"></i>
                </label>
                <label for="star-2">
                  <i class="lni-star-filled"></i>
                </label>
                <label for="star-3"><i class="lni-star-filled"></i>
                </label>
                <label for="star-4"><i class="lni-star-filled"></i>
                </label>
                <label for="star-5"><i class="lni-star-filled"></i>
                </label>
              </section>
            </div>
            <div class="w-100 d-flex justify-between position-relative">
              <div class="price font-bold text-sm mb-2">EGP 10.00</div>
              <i class="fas fa-ellipsis-v cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></i>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item edit" href="#">Edit</a>
                <a class="dropdown-item delete" href="#">Delete</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-48 bg-white m-2 rounded shadow-md product">
        <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
        <div class="p-2 body">
          <div class="font-bold text-lg mb-2 title w-100">The Coldest Sunset</div>
          <div class="d-flex flex-column">
            <div class="rate">
              <input type="radio" name="stars" id="star-1" class="d-none" />
              <input type="radio" name="stars" id="star-2" class="d-none" />
              <input type="radio" name="stars" id="star-3" class="d-none" />
              <input type="radio" name="stars" id="star-4" class="d-none" />
              <input type="radio" name="stars" id="star-5" class="d-none" />
              <section>
                <label for="star-1">
                  <i class="lni-star-filled"></i>
                </label>
                <label for="star-2">
                  <i class="lni-star-filled"></i>
                </label>
                <label for="star-3"><i class="lni-star-filled"></i>
                </label>
                <label for="star-4"><i class="lni-star-filled"></i>
                </label>
                <label for="star-5"><i class="lni-star-filled"></i>
                </label>
              </section>
            </div>
            <div class="w-100 d-flex justify-between position-relative">
              <div class="price font-bold text-sm mb-2">EGP 10.00</div>
              <i class="fas fa-ellipsis-v cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></i>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item edit" href="#">Edit</a>
                <a class="dropdown-item delete" href="#">Delete</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-48 bg-white m-2 rounded shadow-md product">
        <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
        <div class="p-2 body">
          <div class="font-bold text-lg mb-2 title w-100">The Coldest Sunset</div>
          <div class="d-flex flex-column">
            <div class="rate">
              <input type="radio" name="stars" id="star-1" class="d-none" />
              <input type="radio" name="stars" id="star-2" class="d-none" />
              <input type="radio" name="stars" id="star-3" class="d-none" />
              <input type="radio" name="stars" id="star-4" class="d-none" />
              <input type="radio" name="stars" id="star-5" class="d-none" />
              <section>
                <label for="star-1">
                  <i class="lni-star-filled"></i>
                </label>
                <label for="star-2">
                  <i class="lni-star-filled"></i>
                </label>
                <label for="star-3"><i class="lni-star-filled"></i>
                </label>
                <label for="star-4"><i class="lni-star-filled"></i>
                </label>
                <label for="star-5"><i class="lni-star-filled"></i>
                </label>
              </section>
            </div>
            <div class="w-100 d-flex justify-between position-relative">
              <div class="price font-bold text-sm mb-2">EGP 10.00</div>
              <i class="fas fa-ellipsis-v cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></i>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item edit" href="#">Edit</a>
                <a class="dropdown-item delete" href="#">Delete</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- table --}}
    <table class="table table-hover" v-else>
      <thead>
        <tr>
          <th scope="col" width="15">
            <div class="custom-control custom-checkbox" style="z-index: 1;" data-toggle="tooltip" data-placement="right"
              title="Select all Products">
              <input type="checkbox" class="custom-control-input selected-all" name="selectAll" id="selectAll"
                @click="selectAll()">
              <label class="custom-control-label" for="selectAll"></label>
            </div>
          </th>
          <th scope="col">Product</th>
          <th scope="col">Inventory</th>
          <th scope="col">Type</th>
          <th scope="col">Rate</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="product" value="product-id" id="Product-id"
                @change="selected()">
              <label class="custom-control-label" for="Product-id"></label>
            </div>
          </td>
          <td><a href="#"><img src="/img/default-product.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
                style="margin-right:8px">Iphone</a></td>
          <td>5 in stock</td>
          <td>Mobile</td>
          <td>
            <div class="rate text-sm">
              <input type="radio" name="stars" id="star-1" class="d-none" />
              <input type="radio" name="stars" id="star-2" class="d-none" />
              <input type="radio" name="stars" id="star-3" class="d-none" />
              <input type="radio" name="stars" id="star-4" class="d-none" />
              <input type="radio" name="stars" id="star-5" class="d-none" />
              <section>
                <label for="star-1">
                  <i class="lni-star-filled"></i>
                </label>
                <label for="star-2">
                  <i class="lni-star-filled"></i>
                </label>
                <label for="star-3"><i class="lni-star-filled"></i>
                </label>
                <label for="star-4"><i class="lni-star-filled"></i>
                </label>
                <label for="star-5"><i class="lni-star-filled"></i>
                </label>
              </section>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
@section('script')
{{-- <script>
  let app = new Vue({  
  el:".content",
  data:{
    // grid:false,
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
        $('input[name="product"]').prop('checked',true);
      }else{
        // diselect All
        $('input[name="product"]').prop('checked',false);        
      }
    },
    selected(){
      if($('input[name="product"]:not(:checked)').length == 0){ 
        // all are checked
        this.selectedAll = true;
        $('input[name="selectAll"]').prop('checked', true);
        $('input[name="selectAll"]').prop('indeterminate', false);
      }else{
        // some checkbox checked
        this.selectedAll = false;
        $('input[name="selectAll"]').prop('checked', false);
        $('input[name="selectAll"]').prop('indeterminate', true);
      }
    },
    closeSession(){
      $('.session').remove();
    }
  }
})
</script> --}}
@endsection