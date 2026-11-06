@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 d-flex justify-content-end">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>

    <h1>Input Product Data</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        @include('products.form')
    </form>
@endsection
