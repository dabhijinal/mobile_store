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
                        <th>Phone no</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d )
                    <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->mobile }}</td>
                            <td>{{ $d->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection