@extends('layouts.app')
@section('content')

<div class="class row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('customers') }}" class="btn btn-primary">Back</a>
    </div>
</div>

    <div class="row">
        <div class="col-lg-12">
            <h1>Customer Details Data</h1>

            <div class="mb-3 d-flex">
                <label class="form-label">Name : </label>
                <div class="fw-bold" id="name">{{ $customer->name }}</div>
            </div>
            <div class="mb-3 d-flex">
                <label class="form-label">Email : </label>
                <div class="fw-bold" id="email">{{ $customer->email }}</div>
            </div>
            <div class="mb-3 d-flex">
                <label class="form-label">City : </label>
                <div class="fw-bold" id="city">{{ $customer->city }}</div>
            </div>
        </div>
    </div>

@endsection
           