@extends('admin.layout')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="panel panel-info">

        <div class="panel-heading">
            EDIT CATEGORY
        </div>

        <div class="panel-body">

            <form role="form" action="{{ url('categoryedit_save') }}" method="post" enctype="multipart/form-data">

                @csrf

                <input type="hidden"
                    name="id"
                    value="{{ $catdata->id }}">

                <div class="form-group">

                    <label>Enter Name</label>

                    <input class="form-control" type="text" name="name" value="{{ $catdata->name }}">

                </div>

                <div class="form-group">

                    <label>Enter Icon</label>

                    <input class="form-control" type="file" name="icon">

                    <br>

                    <img src="{{ asset('images/'.$catdata->icon) }}" width="100">

                </div>

                <div class="form-group">

                    <label>Status</label>

                    <select class="form-control" name="status">

                        <option value="Active"
                            {{ $catdata->status == 'Active' ? 'selected' : '' }}>
                            Active
                        </option>

                        <option value="Deactive"
                            {{ $catdata->status == 'Deactive' ? 'selected' : '' }}>
                            Deactive
                        </option>

                    </select>

                </div>

                <button type="submit" class="btn btn-info">
                    EDIT
                </button>

            </form>

        </div>

    </div>

</div>

@endsection