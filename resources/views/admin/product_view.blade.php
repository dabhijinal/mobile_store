@extends('admin.layout')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Users
    </div>
    <div class="panel-body">
        <div class="table-responsive" >
            <table class="table table-striped table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Quentity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proddata as $d )
                    <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->category->name }}</td>
                            <td style="max-width:300px; white-space:normal;">{{ $d->description }}</td>
                            <td>{{ $d->price }}</td>
                            <td>{{ $d->qty }}</td>
                            <td><img src="{{ asset('images/'.$d->img) }}" width="100" height="100"></td>
                            <td>{{ $d->status }}</td>
                            <td><a href="{{url('edit_product',$d->id) }}">Edit</a></td>
                            <td><a href="{{url('delete_product',$d->id) }}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection