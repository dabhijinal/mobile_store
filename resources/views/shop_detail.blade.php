@extends('layout')

@section('main-content')

<!-- Breadcrumb -->
<div class="container-fluid">

    <div class="row px-xl-5">

        <div class="col-12">

            <nav class="breadcrumb bg-light mb-30">

                <a class="breadcrumb-item text-dark" href="{{ url('index') }}">
                    Home
                </a>

                <a class="breadcrumb-item text-dark" href="{{ url('shop') }}">
                    Shop
                </a>

                <span class="breadcrumb-item active">
                    Shop Detail
                </span>

            </nav>

        </div>

    </div>

</div>

<!-- Product Detail Start -->
<div class="container-fluid pb-5">

    <div class="row px-xl-5">

        <!-- Product Image -->
        <div class="col-lg-5 mb-30">

            <div class="bg-light p-3 rounded shadow-sm">

                <img class="w-100"
                    src="{{ asset('images/'.$proddata->img) }}"
                    style="height:500px; object-fit:cover;">

            </div>

        </div>

        <!-- Product Detail -->
        <div class="col-lg-7 h-auto mb-30">

            <div class="h-100 bg-light p-30 rounded shadow-sm">

                <!-- Product Name -->
                <h2 class="mb-3">
                    {{ $proddata->name }}
                </h2>

                <!-- Price -->
                <h3 class="font-weight-semi-bold mb-4 text-primary">
                    ₹{{ $proddata->price }}
                </h3>

                <!-- Description -->
                <p class="mb-4">
                    {{ $proddata->description }}
                </p>

                <!-- Available Qty -->
                <h5 class="mb-4">

                    Available Qty :

                    <span class="text-success">
                        {{ $proddata->qty }}
                    </span>

                </h5>

                <!-- Add To Cart Form -->
                <form action="{{ url('add_to_cart/'.$proddata->id) }}"
                    method="GET">

                    <!-- Quantity -->
                    <div class="d-flex align-items-center mb-3">

                        <strong class="mr-3">
                            Select Qty :
                        </strong>

                        <input type="number"
                            name="qty"
                            value="1"
                            min="1"
                            max="{{ $proddata->qty }}"
                            class="form-control"
                            style="width:120px;">

                    </div>

                    <!-- Buttons -->
                    <div class="d-flex align-items-center mb-4 pt-2">

                        <button type="submit"
                            class="btn btn-primary px-4 mr-3">

                            <i class="fa fa-shopping-cart mr-1"></i>

                            Add To Cart

                        </button>

                        <a href="{{ url('checkout/'.$proddata->id) }}"
                            class="btn btn-primary">

                            Buy Now

                        </a>
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<!-- Related Products -->
<div class="container-fluid py-5">

    <div class="row px-xl-5">

        <div class="col">

            <div class="section-title position-relative text-uppercase mb-4">

                <h3 class="bg-secondary pr-3">
                    Related Products
                </h3>

            </div>

        </div>

    </div>

    <div class="row px-xl-5">

        @foreach($related as $r)

        <div class="col-lg-3 col-md-4 col-sm-6 pb-4">

            <div class="product-item bg-light mb-4 shadow-sm rounded overflow-hidden">

                <!-- Image -->
                <div class="product-img position-relative overflow-hidden"
                    style="height:250px;">

                    <img class="w-100 h-100"
                        src="{{ asset('images/'.$r->img) }}"
                        style="object-fit:cover;">

                </div>

                <!-- Product Detail -->
                <div class="text-center py-4 px-2">

                    <a class="h6 text-decoration-none d-block mb-2"
                        href="{{ url('shop_detail/'.$r->id) }}"
                        style="font-weight:bold; color:orange;">

                        {{ $r->name }}

                    </a>

                    <div class="d-flex align-items-center justify-content-center mb-3">

                        <h5>
                            ₹{{ $r->price }}
                        </h5>

                    </div>

                    <!-- Add To Cart -->
                    <a href="{{ url('add_to_cart/'.$r->id) }}"
                        class="btn btn-primary">

                        <i class="fa fa-shopping-cart mr-1"></i>

                        Add To Cart

                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

<!-- Review Section -->
<div class="container-fluid pb-5">

    <div class="row px-xl-5">

        <div class="col">

            <div class="bg-light p-30 rounded shadow-sm">

                <!-- Success Message -->
                @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

                @endif

                <!-- Reviews Title -->
                <h4 class="mb-4">
                    Customer Reviews
                </h4>

                <!-- Dynamic Reviews -->
                @foreach($reviews as $rev)

                <div class="media mb-4">

                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                        width="60"
                        class="mr-3 rounded-circle">

                    <div class="media-body">

                        <h6>

                            {{ $rev->name }}

                            <small class="text-muted">

                                - {{ $rev->created_at->format('d M Y') }}

                            </small>

                        </h6>

                        <p>

                            {{ $rev->review }}

                        </p>

                    </div>

                </div>

                <hr>

                @endforeach

                <!-- Review Form -->
                <h4 class="mb-4 mt-5">
                    Leave a Review
                </h4>

                <form action="{{ url('store_review') }}"
                    method="POST">

                    @csrf

                    <!-- Product ID -->
                    <input type="hidden"
                        name="product_id"
                        value="{{ $proddata->id }}">

                    <!-- Name -->
                    <div class="form-group">

                        <label>
                            Your Name
                        </label>

                        <input type="text"
                            name="name"
                            class="form-control"
                            required>

                    </div>

                    <!-- Review -->
                    <div class="form-group">

                        <label>
                            Your Review
                        </label>

                        <textarea rows="5"
                            name="review"
                            class="form-control"
                            required></textarea>

                    </div>

                    <!-- Button -->
                    <button class="btn btn-primary px-4">

                        Submit Review

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection