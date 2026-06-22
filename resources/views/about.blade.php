@extends('layout')

@section('main-content')

<!-- Breadcrumb -->
<div class="container-fluid">

    <div class="row px-xl-5">

        <div class="col-12">

            <nav class="breadcrumb bg-light mb-30">

                <a class="breadcrumb-item text-dark"
                   href="#">

                    Home

                </a>

                <span class="breadcrumb-item active">

                    About

                </span>

            </nav>

        </div>

    </div>

</div>

<!-- About Start -->
<div class="container-fluid py-5">

    <div class="container py-5">

        <div class="row g-5 align-items-center">

            <!-- Image -->
            <div class="col-lg-6">

                <img src="{{ asset('images/about.jpg') }}"
                     class="img-fluid rounded shadow"
                     alt="Mobile Shop">

            </div>

            <!-- Content -->
            <div class="col-lg-6">

                <h5 class="text-primary">

                    About Us

                </h5>

                <h1 class="mb-4">

                    Welcome To Mobile Store

                </h1>

                <p class="mb-4">

                    Mobile Store is your trusted destination for the latest
                    smartphones, accessories, and gadgets at affordable prices.
                    We provide top mobile brands with genuine products and
                    excellent customer support.

                </p>

                <p class="mb-4">

                    Our mission is to give customers the best shopping experience
                    with high-quality products, secure payments, and fast delivery
                    services.

                </p>

            

            </div>

        </div>

    </div>

</div>
<!-- About End -->



<!-- Modal -->
<div class="modal fade"
     id="aboutModal">

    <div class="modal-dialog">

        <div class="modal-content p-4">

            <div class="modal-header">

                <h4 class="modal-title">

                    More About Mobile Store

                </h4>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

                <p>

                    Mobile Store offers a wide range of smartphones,
                    smartwatches, earbuds, chargers, covers, and
                    accessories from popular brands like Apple,
                    Samsung, Vivo, Oppo, Xiaomi, and Realme.

                </p>

                <p>

                    We focus on customer satisfaction by providing
                    original products, exciting offers, and fast
                    doorstep delivery services.

                </p>

            </div>

        </div>

    </div>

</div>



<!-- Features Start -->
<div class="container-fluid bg-light py-5">

    <div class="container py-5">

        <div class="row g-4 text-center">

            <!-- Feature 1 -->
            <div class="col-md-4">

                <div class="p-4 bg-white rounded shadow h-100">

                    <i class="fa fa-mobile-alt fa-2x text-primary mb-3"></i>

                    <h4>

                        Latest Smartphones

                    </h4>

                    <p>

                        Get the newest smartphones from top brands
                        at the best prices.

                    </p>

                </div>

            </div>

            <!-- Feature 2 -->
            <div class="col-md-4">

                <div class="p-4 bg-white rounded shadow h-100">

                    <i class="fa fa-shipping-fast fa-2x text-primary mb-3"></i>

                    <h4>

                        Fast Delivery

                    </h4>

                    <p>

                        Quick and secure delivery service
                        at your doorstep.

                    </p>

                </div>

            </div>

            <!-- Feature 3 -->
            <div class="col-md-4">

                <div class="p-4 bg-white rounded shadow h-100">

                    <i class="fa fa-thumbs-up fa-2x text-primary mb-3"></i>

                    <h4>

                        Trusted Quality

                    </h4>

                    <p>

                        100% genuine products with warranty
                        and customer satisfaction.

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- Features End -->

@endsection