@extends('admin.layout')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-info">

        <div class="panel-heading">
            ADD PRODUCT
        </div>

        <div class="panel-body">

            <form role="form" action="{{ url('product_save') }}" method="post" enctype="multipart/form-data">

                @csrf

                <!-- Category -->
                <div class="form-group">
                    <label>Select Category</label>

                    <select class="form-control" name="category_id">
                        <option value="">-- Select Category --</option>

                        @foreach($proddata as $c)

                        <option value="{{ $c->id }}">
                            {{ $c->name }}
                        </option>

                        @endforeach
                    </select>
                </div>

                <!-- Product Name -->
                <div class="form-group">
                    <label>Enter Product Name</label>

                    <input class="form-control" type="text" name="name">
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label>Enter Description</label>

                    <textarea class="form-control" name="description"></textarea>
                </div>

                <!-- Price -->
                <div class="form-group">
                    <label>Enter Price</label>

                    <input class="form-control" type="text" name="price">
                </div>

                <!-- Quantity -->
                <div class="form-group">
                    <label>Enter Quantity</label>

                    <input class="form-control" type="text" name="qty">
                </div>

                <!-- Image -->
                <div class="form-group">
                    <label>Upload Product Image</label>

                    <input class="form-control" type="file" name="img">
                </div>

                <!-- Status -->
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="Active">-- Select Status --</option>
                        <option value="Active">Active</option>
                        <option value="Deactive">Deactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-info">
                    Add Product
                </button>

            </form>

        </div>
    </div>
</div>

@endsection