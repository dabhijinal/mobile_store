<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Address</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
            background: #f5f5f5;
        }

        .checkout-box {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
        }

        .title {
            color: #f1e506;
            font-weight: bold;
        }

        .form-control {
            height: 50px;
            border-radius: 10px;
        }

        textarea.form-control {
            height: 100px;
        }

        .btn-order {
            background: #f1e506;
            color: white;
            border: none;
            height: 50px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-order:hover {
            background: #f1e506;
            color: white;
        }

        .icon-box {
            position: relative;
        }

        .icon-box i {
            position: absolute;
            top: 17px;
            left: 15px;
            color: #888;
        }

        .icon-box input,
        .icon-box textarea {
            padding-left: 40px;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="checkout-box">

                    <h2 class="text-center mb-4 title">
                        <i class="fa fa-location-dot"></i>
                        Delivery Address
                    </h2>

                    <form action="{{ url('save-address/'.$product->id) }}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <div class="icon-box">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="fullname" class="form-control"
                                        placeholder="Full Name" required>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                                    <input type="text" name="mobile" class="form-control"
                                        placeholder="Mobile Number" required>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="icon-box">
                                    <i class="fa fa-home"></i>
                                    <textarea name="address" class="form-control"
                                        placeholder="Full Address" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <div class="icon-box">
                                    <i class="fa fa-city"></i>
                                    <input type="text" name="city" class="form-control"
                                        placeholder="City" required>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <div class="icon-box">
                                    <i class="fa fa-map"></i>
                                    <input type="text" name="state" class="form-control"
                                        placeholder="State" required>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <div class="icon-box">
                                    <i class="fa fa-location-pin"></i>
                                    <input type="text" name="pincode" class="form-control"
                                        placeholder="Pincode" required>
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <div class="icon-box">
                                    <i class="fa fa-landmark"></i>
                                    <input type="text" name="landmark" class="form-control"
                                        placeholder="Landmark (Optional)">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-order w-100">
                                    Continue To Payment
                                </button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>

</html>

