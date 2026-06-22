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
    <style>
        body {
            background: linear-gradient(to right, #fff7e6, #fdfdfd);
            font-family: 'Heebo', sans-serif;

            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .register-box {
            width: 700px;
            background: #fff;
            padding: 45px 40px;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .register-box:hover {
            transform: translateY(-5px);
        }

        .register-title {
            text-align: center;
            font-size: 50px;
            font-weight: bold;
            color: #f1e506;
            margin-bottom: 35px;
            font-family: Century;
        }

        .input-icon {
            position: relative;
            margin-bottom: 22px;
        }

        .input-icon i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 15px;
        }

        .input-icon input {
            width: 100%;
            height: 55px;
            border-radius: 10px;
            border: 1px solid #ddd;
            padding-left: 50px;
            font-size: 15px;
            transition: 0.3s;
        }

        .input-icon input:focus {
            border-color: #f1e506;
            box-shadow: 0 0 8px rgba(241, 196, 15, 0.4);
            outline: none;
        }

        .register-btn {
            width: 100%;
            height: 55px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(to right, #f1e506, #f1e506);
            color: white;
            font-size: 18px;
            font-weight: 600;
            transition: 0.3s;
        }

        .register-btn:hover {
            background: linear-gradient(to right, #f1e506, #f1e506);
            transform: scale(1.02);
        }

        .login-text {
            text-align: center;
            margin-top: 22px;
            font-size: 15px;
        }

        .login-text a {
            color: #f1e506;
            font-weight: 600;
            text-decoration: none;
        }

        .login-text a:hover {
            text-decoration: underline;
        }

        @media(max-width: 768px) {
            .register-box {
                width: 92%;
                padding: 30px 20px;
            }

            .register-title {
                font-size: 38px;
            }
        }
    </style>




    <div class="register-box">

        <h1 class="register-title">Register</h1>

        <form action="{{ url('register') }}" method="POST">
            @csrf

            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input type="text"
                    name="name"
                    class="form-control"
                    placeholder="Enter Your Name"
                    required>
            </div>

            <div class="input-icon">
                <i class="fa fa-phone"></i>
                <input type="text"
                    name="mobile"
                    class="form-control"
                    placeholder="Enter Mobile Number"
                    required>
            </div>

            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter Email Address"
                    required>
            </div>

            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input type="password"
                    name="password"
                    class="form-control"
                    placeholder="Create Password"
                    required>
            </div>

            <button type="submit" class="register-btn">
                Create Account
            </button>

            <p class="login-text">
                Already have an account?
                <a href="{{ url('login') }}">Login</a>
            </p>

        </form>

    </div>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>