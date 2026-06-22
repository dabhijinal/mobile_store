@extends('layout')
@section('main-content')
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{ url('/index') }}">Home</a>
                <a class="breadcrumb-item text-dark" href="{{ url('/shop') }}">Shop</a>
                <span class="breadcrumb-item active">Shopping Cart</span>
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Item</span></h5>

            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">

                    @php
                    $subtotal = 0;
                    @endphp

                    @foreach($cartdata as $c)

                    @php
                    $subtotal += $c->price * $c->qty;
                    @endphp

                    <tr>

                        <td class="align-middle">

                            <img src="{{ asset('images/'.$c->img) }}"
                                style="width: 50px; height:50px;">
                            {{ $c->name }}
                        </td>

                        <td class="align-middle">
                            ₹{{ $c->price }}
                        </td>

                        <td class="align-middle">
                            {{ $c->qty }}
                        </td>

                        <td class="align-middle">

                            ₹{{ $c->price * $c->qty }}

                        </td>

                        <td class="align-middle">

                            <a href="{{ url('delete_cart/'.$c->id) }}"
                                class="btn btn-sm btn-danger">
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">

                        <h6>Subtotal</h6>

                        <h6>₹{{ $subtotal }}</h6>

                    </div>

                    <div class="d-flex justify-content-between">

                        <h6 class="font-weight-medium">
                            Delivery Charge
                        </h6>

                        <h6 class="font-weight-medium">
                            ₹50
                        </h6>

                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5>
                            ₹{{ $subtotal + 50 }}
                        </h5>
                    </div>
                    <a href="{{ url('payment/'.$c->id) }}"
                        class="btn btn-block btn-primary font-weight-bold my-3 py-3">
                        <i class="fa fa-bolt mr-1"></i>
                        Proceed To Checkout
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection