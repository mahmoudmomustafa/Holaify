@extends('layouts.main')
@section('title','Collection Name')
@section('content')
<div class="container">
  <div class="collection-div p-4">
    <div class="header">
      Collection Name
    </div>
    {{-- nothing found --}}
    <div class="row mx-0 justify-content-center align-center">
      <div class="not-found">
        <div class="p-3 d-flex justify-content-center flex-column no-found">
          {{-- img --}}
          <div class="img m-auto">
            <img src="/img/empty_state.png" width="500" alt="nothing-found">
          </div>
          {{-- empty collection --}}
          <div class="text m-auto">
            <div class="p-3">Nothing found</div>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="collections m-3">
      <div class="w-64 max-w-xs rounded overflow-hidden shadow-lg collection">
        <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-3 body">
          <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
          <div class="d-flex justify-content-between my-3 mx-1">
            <div class="price font-bold text-base mb-2">EGP 10.00</div>
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
          </div>
        </div>
      </div>
    </div> --}}
  </div>
</div>
@endsection