<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <style>
            body {
                background: linear-gradient(to right, #fff7e6, #fdfdfd);
                font-family: 'Heebo', sans-serif;
            }

            .main {
                width: 650px;
                margin: 250px auto;
                background: #fff;
                padding: 40px 35px;
                border-radius: 15px;
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
                transition: 0.3s;
            }

            .main:hover {
                transform: translateY(-5px);
            }

            .login-title {
                font-size: 45px;
                font-weight: bold;
                color: #f1e506;
                margin-bottom: 30px;
                font-family: Century;
            }

            .input-icon {
                position: relative;
                margin-bottom: 20px;
            }

            .input-icon i {
                position: absolute;
                left: 15px;
                top: 50%;
                transform: translateY(-50%);
                color: #999;
                font-size: 16px;
            }

            .input-icon input {
                width: 100%;
                height: 50px;
                border-radius: 10px;
                border: 1px solid #ddd;
                padding-left: 45px;
                font-size: 15px;
                transition: 0.3s;
            }

            .input-icon input:focus {
                border-color: #f1e506;
                box-shadow: 0 0 8px rgba(237, 233, 42, 0.3);
                outline: none;
            }

            .login-btn {
                width: 100%;
                height: 50px;
                border: none;
                border-radius: 10px;
                background: linear-gradient(to right );
                color: white;
                font-size: 17px;
                font-weight: 600;
                transition: 0.3s;
            }

            .login-btn:hover {
                background: linear-gradient(to right);
                transform: scale(1.02);
            }

            .register-text {
                margin-top: 20px;
                font-size: 15px;
            }

            .register-text a {
                color: #f1e506;
                font-weight: 600;
                text-decoration: none;
            }

            .register-text a:hover {
                text-decoration: underline;
            }

            @media(max-width: 500px) {
                .main {
                    width: 90%;
                    padding: 30px 20px;
                }

                .login-title {
                    font-size: 35px;
                }
            }
        </style>

        <div class="content-wrapper">

            <div class="row pad-botm">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="main">
                            <center>
                                <h1 class="login-title">Login</h1>

                                <div class="panel-body">

                                    <form method="POST" action="{{ url('/login') }}">
                                        @csrf

                                        <div class="input-icon">
                                            <i class="fa fa-envelope"></i>
                                            <input type="email"
                                                name="email"
                                                class="form-control"
                                                placeholder="Enter your Email"
                                                required>
                                        </div>

                                        <div class="input-icon">
                                            <i class="fa fa-lock"></i>
                                            <input type="password"
                                                name="password"
                                                class="form-control"
                                                placeholder="Enter your Password"
                                                required>
                                        </div>

                                        <button type="submit" class="login-btn bg-primary">
                                            Login
                                        </button>

                                        <p class="register-text">
                                            Don't have an account?
                                            <a href="{{ url('register') }}">Register</a>
                                        </p>

                                    </form>

                                </div>

                            </center>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Footer Start -->
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>

            @if(session('deactive'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                window.onload = function() {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Account Deactivated!',
                        text: "{{ session('deactive') }}",
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#d33',
                    });
                }
            </script>
            @endif

            @if(session('error'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                window.onload = function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Failed!',
                        text: "{{ session('error') }}",
                        confirmButtonText: 'Try Again',
                        confirmButtonColor: '#0d6efd',
                    });
                }
            </script>
            @endif
</body>

</html>