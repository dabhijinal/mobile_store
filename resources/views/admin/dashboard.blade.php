@extends('admin.layout')

@section('content')

<div class="container-fluid">

    <!-- Dashboard Heading -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 style="margin:0;">
                        <i class="fa fa-dashboard"></i> Admin Dashboard
                    </h2>
                </div>

                <div class="panel-body">
                    <h4>Welcome, Admin 👋</h4>
                    <p>
                        Manage Users, Products, Categories, Reviews and monitor
                        your Mobile Shop Management System from one place.
                    </p>

                    <p class="text-muted">
                        <strong>Date :</strong> {{ date('d M Y') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics -->
    <div class="row">

        <div class="col-md-2">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h4>Total Users</h4>
                </div>

                <div class="panel-body text-center">
                    <h1>{{ $totalUsers }}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    <h4>Total Admins</h4>
                </div>

                <div class="panel-body text-center">
                    <h1>{{ $totalAdmins }}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <h4>Products</h4>
                </div>

                <div class="panel-body text-center">
                    <h1>{{ $totalProducts }}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-warning">
                <div class="panel-heading text-center">
                    <h4>Categories</h4>
                </div>

                <div class="panel-body text-center">
                    <h1>{{ $totalCategories }}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-danger">
                <div class="panel-heading text-center">
                    <h4>Total Reviews</h4>
                </div>

                <div class="panel-body text-center">
                    <h1>{{ $totalReviews }}</h1>
                </div>
            </div>
        </div>

    </div>

    <!-- Recent Data -->
    <div class="row">

        <!-- Recent Users -->
        <div class="col-md-6">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Recent Users</strong>
                </div>

                <div class="panel-body table-responsive">

                    <table class="table table-striped table-bordered">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($recentUsers as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>
            </div>

        </div>

        <!-- Recent Reviews -->
        <div class="col-md-6">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Recent Reviews</strong>
                </div>

                <div class="panel-body table-responsive">

                    <table class="table table-striped table-bordered">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Review</th>
                                <th>Date</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($recentReviews as $review)
                            <tr>
                                <td>{{ $review->id }}</td>
                                <td>{{ $review->name }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($review->review,40) }}</td>
                                <td>{{ date('d-m-Y',strtotime($review->created_at)) }}</td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>
            </div>

        </div>

    </div>

</div>

@endsection