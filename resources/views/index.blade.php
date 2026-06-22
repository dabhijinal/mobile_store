@extends('layout')
@section('main-content')
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="images/s1.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Mobile</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Powerful Phones, Amazing Prices, Find Your Perfect Mobile</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="images/s2.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">IPhone</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">New Launches Available Now, Experience Next-Gen Smartphones</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="images/s3.avif" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="images/sp1.avif" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="images/sp2.avif" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pt-5">

    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Categories</span>
    </h2>

    <div class="row px-xl-5 pb-3">

        @foreach($categories as $category)

        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">

            <a class="text-decoration-none"
                href="{{ url('shop') }}">

                <div class="cat-item img-zoom d-flex align-items-center mb-4">

                    <div class="overflow-hidden"
                        style="width: 100px; height: 100px;">

                        <img class="img-fluid"
                            src="{{ asset('images/'.$category->icon) }}"
                            alt="{{ $category->name }}">

                    </div>

                    <div class="flex-fill pl-3">

                        <h6>{{ $category->name }}</h6>

                        <small class="text-body">
                            {{ $category->products_count }} Products
                        </small>

                    </div>

                </div>

            </a>

        </div>

        @endforeach

    </div>

</div>

<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Featured Products</span>
    </h2>

    <div class="row px-xl-5">

        @foreach($products as $product)

        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">

            <div class="product-item bg-light mb-4">

                <div class="product-img position-relative overflow-hidden">

                    <img class="img-fluid w-1020"
                        src="{{ asset('images/'.$product->img) }}"
                        alt=""
                        style="height:400px; object-fit:cover;">

                    <div class="product-action">



                    </div>
                </div>



                <div class="text-center py-4">

                    <a class="h6 text-decoration-none text-truncate"
                        href="{{ url('shop_detail/'.$product->id) }}">
                        {{ $product->name }}
                    </a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>₹{{ $product->price }}</h5>
                        @if($product->old_price)
                        <h6 class="text-muted ml-2">
                            <del>₹{{ $product->old_price }}</del>
                        </h6>
                        @endif
                    </div>
                </div>

            </div>

        </div>

        @endforeach

    </div>
</div>
<div class="container-fluid pt-5 pb-3">
    <div class="row px-xl-5">
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="images/sp2.avif" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Limited Time Mobile Sale, Save More on Every Purchase</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="images/sp1.avif" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection