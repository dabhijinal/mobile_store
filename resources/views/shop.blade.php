@extends('layout')

@section('main-content')

<!-- Breadcrumb -->
<div class="container-fluid">
    <div class="row px-xl-5">

        <div class="col-12">

            <nav class="breadcrumb bg-light mb-30">

                <a class="breadcrumb-item text-dark" href="{{ url('/index') }}">
                    Home
                </a>

                <span class="breadcrumb-item active">
                    Shop List
                </span>

            </nav>

        </div>

    </div>
</div>

<!-- Product Start -->
<div class="container-fluid">

    <div class="row px-xl-5">

        <div class="col-12">

            <div class="row pb-3">

                @foreach($proddata as $p)

                <div class="col-lg-3 col-md-4 col-sm-6 pb-4">

                    <div class="product-item bg-light mb-4 shadow-sm rounded overflow-hidden">

                        <!-- Product Image -->
                        <div class="product-img position-relative overflow-hidden"
                             style="height:380px;">

                            <img class="w-120 h-100"
                                 src="{{ asset('images/'.$p->img) }}"
                                 alt="{{ $p->name }}"
                                 style="object-fit: cover;">

                        </div>

                        <!-- Product Details -->
                        <div class="text-center py-4 px-2">

                            <!-- Product Name -->
                            <a class="h5 text-decoration-none d-block mb-2"
                               href="{{ url('shop_detail/'.$p->id) }}"
                               style="color:orange; font-weight:bold;">

                                {{ $p->name }}

                            </a>

                            <!-- Product Price -->
                            <div class="d-flex align-items-center justify-content-center mb-3">

                                <h5 class="mb-0">
                                    ₹{{ $p->price }}
                                </h5>

                            </div>

                            <!-- Add To Cart Button -->
                            <a href="{{ url('add_to_cart/'.$p->id) }}"
                               class="btn btn-primary px-4">

                                <i class="fa fa-shopping-cart mr-2"></i>
                                Add To Cart

                            </a>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</div>

@endsection