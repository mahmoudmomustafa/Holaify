@extends('layouts.dashboard.app')
@section('title','Orders')
@section('content')
<div class="content py-2">
  {{-- header --}}
  <dash-head title="Orders"></dash-head>
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
    {{-- Orders in grid --}}
    <div class="row mx-0 my-2 justify-center" v-if="grid">
      <div class="w-48 bg-white rounded-lg py-3 px-4 order m-1">
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
      <div class="w-48 bg-white rounded-lg py-3 px-4 order m-1">
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
      </div><div class="w-48 bg-white rounded-lg py-3 px-4 order m-1">
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
          <th scope="col" width="50">State</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><a href="#"><img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
                style="margin-right:8px">Mark</a></td>
          <td>513239a9</td>
          <td>41st.</td>
          <td>
            <select data-menu class="select-menu">
              <option>Deliverd</option>
              <option selected>OnGoing</option>
              <option >Canceled</option>
            </select>
          </td>
          <td>
            <div class="w-100 d-flex justify-center position-relative btn-group dropleft">
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
@section('script')
<script>
  $('select[data-menu]').each(function() {
let select = $(this),
    options = select.find('option'),
    menu = $('<div />').addClass('select-menu'),
    button = $('<div />').addClass('button'),
    list = $('<ul />'),
    arrow = $('<em />').prependTo(button);

options.each(function(i) {
    let option = $(this);
    list.append($('<li />').text(option.text()));
});

menu.css('--t', select.find(':selected').index() * -41 + 'px');

select.wrap(menu);

button.append(list).insertAfter(select);

list.clone().insertAfter(button);

});

$(document).on('click', '.select-menu', function(e) {

let menu = $(this);

if(!menu.hasClass('open')) {
    menu.addClass('open');
}

});

$(document).on('click', '.select-menu > ul > li', function(e) {

let li = $(this),
    menu = li.parent().parent(),
    select = menu.children('select'),
    selected = select.find('option:selected'),
    index = li.index();

menu.css('--t', index * -41 + 'px');
selected.attr('selected', false);
select.find('option').eq(index).attr('selected', true);

menu.addClass(index > selected.index() ? 'tilt-down' : 'tilt-up');

setTimeout(() => {
    menu.removeClass('open tilt-up tilt-down');
}, 500);

});

$(document).click(e => {
e.stopPropagation();
if($('.select-menu').has(e.target).length === 0) {
    $('.select-menu').removeClass('open');
}
})

</script>
@endsection