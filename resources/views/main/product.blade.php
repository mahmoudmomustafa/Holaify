@extends('layouts.main')
@section('title','Product Name')
@section('content')
<div class="container-fluid">
  <div class="product-div">
    <div class="row mx-0 w-100">
      {{-- ptoduct image --}}
      <div class="product-img m-1">
        <img src="/img/shopping.jpg" class="img-fluid my-4 mx-auto" height="330" alt="product-img">
      </div>
      {{-- product info --}}
      <div class="product-info m-1 p-3">
        <div class="info m-2">
          <div class="d-flex justify-between">
            <div class="product-title pb-1">Product title</div>
            <div class="text-lg p-1">
                <i class="far fa-heart"></i>
            </div>
          </div>
          <div class="product-price pb-1 mb-2">EGP 10.00</div>
          <div class="product-des p-2">
            <div class="header">
              Description :
            </div>
            <div class="des">
              this is description about that product
              b
              asd
              asd
              asd
              as
              asd
            </div>
          </div>
          <div class="product-type p-2">
            <div class="header">Type :</div>
            <span>Mobile</span>
          </div>
          <div class="product-tags p-2">
            <div class="header">Tags :</div>
            <span class="tag"><a href="/tags"> #Tag</a></span>
            <span class="tag"><a href="/tags"> #Tag</a></span>
            <span class="tag"><a href="/tags"> #Tag</a></span>
            <span class="tag"><a href="/tags"> #Tag</a></span>
          </div>
          <div class="add-to-cart py-3 px-2">
            <button class="btn btn-primary">Add to Cart <i class="lni-cart"></i></button>
          </div>
        </div>
      </div>
    </div>
    <div class="row mx-0 w-100">
      {{-- product review --}}
      <div class="product-reviews m-1 p-3">
        <div class="heading px-2">
          Reviews
        </div>
        <div class="review p-3">
          {{-- your review --}}
          <div class="yours">
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
              <span class="total">4.5</span>
            </section>
          </div>
          {{-- others rating --}}
          <div class="others">
            <div class="div wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
              <div class="left d-flex flex-row">
                <img src="/img/default-user.svg" width="40" alt="user-pic" class="mr-2">
                <div class="rate">
                  <span>
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
                  </span>
                  <div class="name">Mahmoud Mohamed</div>
                </div>
              </div>
              <div class="right"><span>8 Nov</span></div>
            </div>
            <div class="text-center px-2 pt-2">
              End of reviews.
            </div>
          </div>
        </div>
      </div>
      <div class="product-similar m-1">
        <div class="heading p-3">
          Similiar Items :
        </div>
        <ul class="items">
          <li>
            <img src="/img/shopping.jpg" width="100" alt="">
            <div class="price">EGP 10.00</div>
          </li>
          <li>
            <img src="/img/shopping.jpg" width="100" alt="">
            <div class="price">EGP 10.00</div>
          </li>
          <li>
            <img src="/img/shopping.jpg" width="100" alt="">
            <div class="price">EGP 10.00</div>
          </li>
          <li>
            <img src="/img/shopping.jpg" width="100" alt="">
            <div class="price">EGP 10.00</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection