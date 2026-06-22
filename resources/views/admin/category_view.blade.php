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
                        <th>Icon</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catdata as $d )
                    <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->name }}</td>
                            <td><img src="{{ asset('images/'.$d->icon) }}" width="100" height="100"></td>
                            <td>{{ $d->status }}</td>
                            <td><a href="{{url('edit_category',$d->id) }}">Edit</a></td>
                            <td><a href="{{url('delete_category',$d->id) }}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection