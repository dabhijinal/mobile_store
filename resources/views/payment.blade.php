
@extends('layout')

@section('main-content')

<style>
    body {
        background: linear-gradient(to right, #fff7e6, #fdfdfd);
        font-family: 'Heebo', sans-serif;
    }

    .payment-wrapper {
        min-height: 85vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 15px;
    }

    .payment-card {
        width: 100%;
        max-width: 950px;
        background: #fff;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: 0.3s;
    }

    .payment-card:hover {
        transform: translateY(-5px);
    }

    .payment-title {
        text-align: center;
        font-size: 40px;
        font-weight: bold;
        color: #f39c12;
        margin-bottom: 35px;
    }

    .product-image {
        width: 100%;
        height: 350px;
        object-fit: cover;
        border-radius: 18px;
        border: 1px solid #eee;
        padding: 10px;
        background: #fff;
    }

    .product-name {
        font-size: 34px;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
    }

    .product-description {
        color: #777;
        font-size: 16px;
        line-height: 30px;
        margin-bottom: 25px;
    }

    .info-box {
        background: #fff8e1;
        padding: 14px 20px;
        border-radius: 12px;
        margin-bottom: 18px;
        border: 1px solid #f1c40f;
        font-size: 18px;
        font-weight: 600;
    }

    .info-box span {
        color: #f39c12;
        font-weight: bold;
        margin-left: 10px;
    }

    .pay-btn-box {
        text-align: center;
        margin-top: 40px;
    }

    .pay-btn {
        width: 300px;
        height: 58px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(to right, #f1c40f, #f39c12);
        color: white;
        font-size: 20px;
        font-weight: 600;
        transition: 0.3s;
    }

    .pay-btn:hover {
        transform: scale(1.03);
        background: linear-gradient(to right, #f39c12, #e67e22);
    }

    .secure-text {
        margin-top: 18px;
        color: #888;
        font-size: 14px;
    }

    @media(max-width:768px){

        .payment-card{
            padding:25px 20px;
        }

        .payment-title{
            font-size:30px;
        }

        .product-name{
            font-size:26px;
            margin-top:20px;
        }

        .product-image{
            height:250px;
        }

        .pay-btn{
            width:100%;
        }
    }
</style>

<div class="container payment-wrapper">

    <div class="payment-card">

        <h2 class="payment-title">
            Secure Payment
        </h2>

        <div class="row align-items-center">

            <!-- LEFT SIDE IMAGE -->
            <div class="col-md-5 text-center">

                <img src="{{ asset('images/'.$proddata->img) }}"
                    class="product-image">

            </div>

            <!-- RIGHT SIDE DETAILS -->
            <div class="col-md-7">

                <h3 class="product-name">
                    {{ $proddata->name }}
                </h3>

                <p class="product-description">
                    {{ $proddata->description }}
                </p>

                <div class="info-box">
                    Price :
                    <span>
                        ₹{{ $proddata->price }}
                    </span>
                </div>

            </div>

        </div>

        <!-- PAYMENT BUTTON CENTER -->
        <div class="pay-btn-box">

            <form id="payment-form"
                action="{{ url('razorpay-payment') }}"
                method="POST">

                @csrf

                <input type="hidden"
                    name="product_id"
                    value="{{ $proddata->id }}">

                <input type="hidden"
                    name="razorpay_payment_id"
                    id="razorpay_payment_id">

                <button type="button"
                    id="rzp-button1"
                    class="pay-btn">

                    Pay Now

                </button>

            </form>

            <div class="secure-text">
                <i class="fa fa-lock"></i>
                100% Secure Payment with Razorpay
            </div>

        </div>

    </div>

</div>

<!-- Razorpay -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>

    var options = {

        "key": "{{ config('services.razorpay.key') }}",

        "amount": "{{ $proddata->price * 100 }}",

        "currency": "INR",

        "name": "My Shop",

        "description": "Product Payment",

        "image": "https://cdn-icons-png.flaticon.com/512/3081/3081559.png",

        "handler": function (response) {

            document.getElementById(
                'razorpay_payment_id'
            ).value = response.razorpay_payment_id;

            document.getElementById(
                'payment-form'
            ).submit();
        },

        "prefill": {

            "name": "{{ Auth::user()->name }}",

            "email": "{{ Auth::user()->email }}"
        },

        "theme": {

            "color": "#f39c12"
        }
    };

    var rzp1 = new Razorpay(options);

    document.getElementById('rzp-button1')
        .onclick = function (e) {

            rzp1.open();

            e.preventDefault();
        }

</script>

@endsection
