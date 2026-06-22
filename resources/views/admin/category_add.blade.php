@extends('admin.layout')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="panel panel-info">

        <div class="panel-heading">
            BASIC FORM
        </div>

        <div class="panel-body">

            <form role="form" action="{{ url('category_save') }}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label>Enter Name</label>

                    <input class="form-control" type="text" name="name">
                </div>

                <div class="form-group">
                    <label>Enter Icon</label>

                    <input class="form-control" type="file" name="icon">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="Active">-- Select Status --</option>
                        <option value="Active">Active</option>
                        <option value="Deactive">Deactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-info">
                    Add
                </button>

            </form>

        </div>
    </div>
</div>

@endsection