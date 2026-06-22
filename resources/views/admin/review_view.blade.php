@extends('admin.layout')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Reviews
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Review ID</th>
                        <th>User ID</th>
                        <th>Product ID</th>
                        <th>Review</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($reviews as $review)
                    <tr>
                        <td>{{ $review->id }}</td>
                        <td>{{ $review->name }}</td>
                        <td>{{ $review->product->name }}</td>
                        <td>{{ $review->review }}</td>
                        <td>{{ $review->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection