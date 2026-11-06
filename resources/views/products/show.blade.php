@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 d-flex justify-content-end">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>

    <h1>Product Details Data</h1>

    <dl class="row">
        <dt class="col-sm-3">Product Code</dt>
        <dd class="col-sm-9">{{ $product->product_code }}</dd>
        <dt class="col-sm-3">Product Name</dt>
        <dd class="col-sm-9">{{ $product->product_name }}</dd>
        <dt class="col-sm-3">Product Price</dt>
        <dd class="col-sm-9">{{ $product->product_price }}</dd>
        <dt class="col-sm-3">Current Stock</dt>
        <dd class="col-sm-9">{{ $product->current_stock }}</dd>
        <dt class="col-sm-3">Price</dt>
        <dd class="col-sm-9">{{ $product->price }}</dd>
    </dl>
@endsection
