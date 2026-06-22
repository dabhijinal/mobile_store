<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/style.min.css" rel="stylesheet">
</head>

<body>



    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-4">
        <div class="row px-xl-5">

            <div class="col-lg-12">

                <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 px-0">

                    <!-- Logo -->
                    <a href="{{ url('index') }}" class="navbar-brand text-decoration-none mr-4">
                        <span class="h1 text-uppercase text-dark bg-light px-2 rounded">
                            Mobile
                        </span>

                        <span class="h1 text-uppercase text-light bg-primary px-2 rounded ml-1">
                            Shop
                        </span>
                    </a>

                    <!-- Mobile Toggle -->
                    <button class="navbar-toggler border-0" type="button"
                        data-toggle="collapse"
                        data-target="#navbarCollapse">

                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar Content -->
                    <div class="collapse navbar-collapse justify-content-between"
                        id="navbarCollapse">

                        <!-- Left Menu -->
                        <div class="navbar-nav py-0">

                            <a href="{{ url('index') }}"
                                class="nav-item nav-link active px-3">
                                Home
                            </a>

                            <a href="{{ url('shop') }}"
                                class="nav-item nav-link px-3">
                                Shop
                            </a>

                            <a href="{{ url('about') }}"
                                class="nav-item nav-link px-3">
                                About
                            </a>


                            <a href="{{ url('contact') }}"
                                class="nav-item nav-link px-3">
                                Contact
                            </a>



                        </div>

                        <!-- Search Box -->
                        <div class="mx-lg-4 my-3 my-lg-0 w-100"
                            style="max-width: 550px;">

                            <form action="{{ url('shop') }}" method="GET">

                                <div class="input-group">

                                    <input type="text"
                                        name="search"
                                        class="form-control"
                                        placeholder="Search products">

                                    <div class="input-group-append">

                                        <button type="submit"
                                            class="input-group-text bg-light border-left-0">

                                            <i class="fa fa-search text-primary"></i>

                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>




                        <!-- Right Icons -->
                        <div class="d-flex align-items-center">


                            <a href="{{url('login')}}"
                                class="nav-item nav-link px-3 text-uppercase text-light bg-primary rounded " style="margin-right: 10px;">
                                Login
                            </a>
                            <a href="{{ url('register') }}"
                                class="nav-item nav-link px-3 text-uppercase text-light bg-primary rounded" style="margin-right: 40px;">
                                Register
                            </a>



                            <!-- Cart -->
                            <a href="{{ url('cart') }}"
                                class="btn px-2 ml-3 text-light position-relative">

                                <i class="fas fa-shopping-cart text-primary fa-lg"></i>

                            </a>

                            <!-- Profile -->
                            <a href="{{ url('profile') }}"
                                class="btn px-2 text-light position-relative">

                                <i class="fa fa-user text-primary fa-lg"></i>
                            </a>

                            <!-- My Order -->
                            <a href="{{ url('myorder') }}"
                                class="btn px-2 text-light position-relative">
                                <i class="fa fa-shopping-bag text-primary fa-lg"></i>
                                <span class="ml-1">My Order</span>

                            </a>


                        </div>

                    </div>

                </nav>

            </div>

        </div>
    </div>
    <!-- Navbar End -->



    @yield('main-content');







    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 pt-5">

        <div class="row px-xl-5 pt-5">

            <!-- Contact -->
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">

                <h5 class="text-uppercase text-primary mb-4">

                    Get In Touch

                </h5>

                <p class="mb-4">

                    Mobile Store provides the latest smartphones,
                    accessories, and gadgets with trusted quality
                    and fast delivery services.

                </p>

                <p class="mb-2">

                    <i class="fa fa-map-marker-alt text-primary mr-3"></i>

                    Ahmedabad, Gujarat, India

                </p>

                <p class="mb-2">

                    <i class="fa fa-envelope text-primary mr-3"></i>

                    mobilestore@gmail.com

                </p>

                <p class="mb-0">

                    <i class="fa fa-phone-alt text-primary mr-3"></i>

                    +91 9876543210

                </p>

            </div>

            <!-- Footer Links -->
            <div class="col-lg-8 col-md-12">

                <div class="row">

                    <!-- Quick Links -->
                    <div class="col-md-6 mb-5">

                        <h5 class="text-uppercase text-primary mb-4">

                            Quick Links

                        </h5>

                        <div class="d-flex flex-column justify-content-start">

                            <a class="text-light mb-2"
                                href="{{ url('/index') }}">

                                <i class="fa fa-angle-right mr-2"></i>

                                Home

                            </a>

                            <a class="text-light mb-2"
                                href="{{ url('/shop') }}">

                                <i class="fa fa-angle-right mr-2"></i>

                                Shop

                            </a>

                            <a class="text-light mb-2"
                                href="{{ url('/about') }}">

                                <i class="fa fa-angle-right mr-2"></i>

                                About Us

                            </a>

                            <a class="text-light mb-2"
                                href="{{ url('/cart') }}">

                                <i class="fa fa-angle-right mr-2"></i>

                                Cart

                            </a>

                            <a class="text-light"
                                href="{{ url('/contact') }}">

                                <i class="fa fa-angle-right mr-2"></i>

                                Contact Us

                            </a>

                        </div>

                    </div>

                    <!-- My Account -->
                    <div class="col-md-6 mb-5">

                        <h5 class="text-uppercase text-primary mb-4">

                            My Account

                        </h5>

                        <div class="d-flex flex-column justify-content-start">

                            <a class="text-light mb-2"
                                href="{{ url('/profile') }}">

                                <i class="fa fa-angle-right mr-2"></i>

                                My Profile

                            </a>

                            <a class="text-light mb-2"
                                href="{{ url('/cart') }}">

                                <i class="fa fa-angle-right mr-2"></i>

                                My Cart

                            </a>

                            <a class="text-light mb-2"
                                href="{{ url('/myorder') }}">

                                <i class="fa fa-angle-right mr-2"></i>

                                My Orders

                            </a>

                            <a class="text-light"
                                href="{{ url('/logout') }}">

                                <i class="fa fa-angle-right mr-2"></i>

                                Logout

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Bottom Footer -->
        <div class="row border-top mx-xl-5 py-4"
            style="border-color: rgba(255,255,255,.1) !important;">

            <div class="col-12 text-center">

                <p class="mb-0 text-light">

                    &copy; {{ date('Y') }}

                    <a class="text-primary"
                        href="#">

                        Mobile Store

                    </a>

                    . All Rights Reserved.

                </p>

            </div>

        </div>

    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="/js/main.js"></script>

</body>

</html>