@extends('layout')

@section('main-content')

<!-- Breadcrumb -->
<div class="container-fluid">

    <div class="row px-xl-5">

        <div class="col-12">

            <nav class="breadcrumb bg-light mb-30">

                <a class="breadcrumb-item text-dark"
                   href="{{ url('/index') }}">

                    Home

                </a>

                <span class="breadcrumb-item active">

                    My Orders

                </span>

            </nav>

        </div>

    </div>

</div>

<!-- Orders Start -->
<div class="container-fluid py-5">

    <div class="container">

        <div class="bg-light p-4 rounded shadow-sm">

            <h3 class="mb-4">

                My Orders

            </h3>

            @if($orders && count($orders) > 0)

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="bg-dark text-light">

                        <tr>

                            <th>#</th>

                            <th>Product</th>

                            <th>Image</th>

                            <th>Price</th>

                            <th>Status</th>

                            <th>Date</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($orders as $key => $o)

                        <tr>

                            <td>

                                {{ $key + 1 }}

                            </td>

                            <td>

                                {{ $o->product_name }}

                            </td>

                            <td>

                                <img src="{{ asset('images/'.$o->product_img) }}"
                                     width="70">

                            </td>

                            <td>

                                ₹{{ $o->price }}

                            </td>

                            <td>

                                <span class="badge bg-success">

                                    {{ $o->status }}

                                </span>

                            </td>

                            <td>

                                {{ date('d M Y', strtotime($o->created_at)) }}

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

            @else

            <div class="alert alert-danger">

                No Orders Found

            </div>

            @endif

        </div>

    </div>

</div>

@endsection