@extends('admin.layout')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Orders
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>User Name</th>
                        <th>Product Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Order Date</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{$order->user->name }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->qty }}</td>
                        <td>₹{{ $order->price }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->created_at }}</td>

                       
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection