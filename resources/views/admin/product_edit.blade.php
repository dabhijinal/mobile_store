@extends('admin.layout')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="panel panel-info">

        <div class="panel-heading">
            EDIT PRODUCT
        </div>

        <div class="panel-body">

            <form role="form" action="{{ url('productedit_save') }}" method="post" enctype="multipart/form-data">

                @csrf

                <input type="hidden" name="id" value="{{ $proddata->id }}">

                <!-- Category -->
                <div class="form-group">

                    <label>Select Category</label>

                    <select class="form-control" name="category_id">

                        <option value="">-- Select Category --</option>

                        @foreach($catdata as $p)

                        <option value="{{ $p->id }}"
                            {{ $proddata->category_id == $p->id ? 'selected' : '' }}>

                            {{ $p->name }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <!-- Product Name -->
                <div class="form-group">

                    <label>Enter Product Name</label>

                    <input class="form-control"
                        type="text"
                        name="name"
                        value="{{ $proddata->name }}">

                </div>

                <!-- Description -->
                <div class="form-group">

                    <label>Enter Description</label>

                    <textarea class="form-control"
                        name="description">{{ $proddata->description }}</textarea>

                </div>

                <!-- Price -->
                <div class="form-group">

                    <label>Enter Price</label>

                    <input class="form-control"
                        type="text"
                        name="price"
                        value="{{ $proddata->price }}">

                </div>

                <!-- Quantity -->
                <div class="form-group">

                    <label>Enter Quantity</label>

                    <input class="form-control"
                        type="text"
                        name="qty"
                        value="{{ $proddata->qty }}">

                </div>

                <!-- Image -->
                <div class="form-group">

                    <label>Upload Product Image</label>

                    <input class="form-control" type="file" name="img">

                    <br>

                    <img src="{{ asset('images/'.$proddata->img) }}"
                        width="100"
                        height="100">

                </div>

                <!-- Status -->
                <div class="form-group">

                    <label>Status</label>

                    <select class="form-control" name="status">

                        <option value="Active"
                            {{ $proddata->status == 'Active' ? 'selected' : '' }}>
                            Active
                        </option>

                        <option value="Deactive"
                            {{ $proddata->status == 'Deactive' ? 'selected' : '' }}>
                            Deactive
                        </option>

                    </select>

                </div>

                <button type="submit" class="btn btn-info">
                    UPDATE PRODUCT
                </button>

            </form>

        </div>

    </div>

</div>

@endsection