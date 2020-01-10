@extends('layouts.main')
@section('title','Home')
@section('content')
{{-- carousel --}}
<div id="carouselslide" class="carousel slide position-relative" data-ride="carousel">
    {{-- top --}}
    <div class="top">
        <div class="font-bold wow flipInX" data-wow-duration="2s" data-wow-delay="1s">
            Welcome to Holaify
        </div>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/img.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/pexels-photo.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>

<div class="container">
    {{-- collections --}}
    <div class="py-4 our-collections section wow fadeIn " data-wow-duration="2s" data-wow-delay="1s">
        <div class="header">
            Explore our collections
        </div>
        <div class="collections my-2 justify-center sm:justify-start body">
            <div class="w-64 sm:w-1/4 bg-white shadow collection m-1 card-div">
                <img class="w-full" src="/img/collection.jpg" alt="Sunset in the mountains">
                <div class="text-left px-4 py-3">
                    <div class="d-flex flex-column">
                        <div class="font-bold text-xs mb-2 title"><span>4 Products</span></div>
                        <div class="font-bold text-xl mb-2 title w-100">Collection Name</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- recommend items --}}
    <div class="recommend-div mb-4 section wow fadeIn " data-wow-duration="2s" data-wow-delay="1s">
        <div class="header">
            Recommended For You
        </div>
        <div class="recommended my-2 body">
            {{-- max five div --}}
            <div class="w-56 max-w-sm rounded overflow-hidden recommend card-div">
                <div class="more">
                    <div class="add-cart" data-toggle="tooltip" data-placement="left" title="Add to cart">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="like" data-toggle="tooltip" data-placement="left" title="Like">
                        <i class="far fa-heart"></i>
                    </div>
                </div>
                <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
                <div class="px-2 body">
                    <div class="d-flex justify-content-between m-1">
                        <div class="font-bold text-sm title">The Coldest Sunset</div>
                        <div class="price font-bold text-sm">EGP 10.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- top rated --}}
    <div class="rated-div section wow fadeIn " data-wow-duration="2s" data-wow-delay="1s">
        <div class="header">
            Top Rated
        </div>
        <div class="rateded my-2 body">
            {{--5 rated items --}}
            <div class="w-56 max-w-xs rounded overflow-hidden shadow-md rated card-div">
                <div class="more">
                    <div class="add-cart" data-toggle="tooltip" data-placement="left" title="Add to cart">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="like" data-toggle="tooltip" data-placement="left" title="Like">
                        <i class="far fa-heart"></i>
                    </div>
                </div>
                <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
                <div class="p-3 body">
                    <div class="font-bold text-lg mb-2 title w-100">The Coldest Sunset</div>
                    <div class="d-flex flex-column">
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
                        <div class="price font-bold text-base">EGP 10.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- recentaly added --}}
    <div class="added-div section wow fadeIn " data-wow-duration="2s" data-wow-delay="1s">
        <div class="header">
            Recently added
        </div>
        <div class="just-added my-2 body">
            {{-- max 5 divs --}}
            <div class="w-56 max-w-xs rounded overflow-hidden shadow-md added card-div">
                <div class="more">
                    <div class="add-cart" data-toggle="tooltip" data-placement="left" title="Add to cart">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="like" data-toggle="tooltip" data-placement="left" title="Like">
                        <i class="far fa-heart"></i>
                    </div>
                </div>
                <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-2 body">
                    <div class="font-bold text-lg mb-2 title w-100">The Coldest Sunset</div>
                    <div class="d-flex justify-content-between items-center m-1 w-100">
                        <span class="new">New</span>
                        <div class="price font-bold text-sm">EGP 10.00</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection