@extends('layouts.app')
@section('content')

<div class="class row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('customers') }}" class="btn btn-primary">Back</a>
    </div>
</div>

    <div class="row">
        <div class="col-lg-12">
            <h1>Input Customer Data</h1>

        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id="name" name= "name" value="{{ $customer->name }}" placeholder="Budi">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email"  name= "email" value="{{ $customer->email }}" placeholder="email">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">city</label>
                    <textarea class="form-control" id="city" name= "city" row=" 3" placeholder="Bandung" >{{ $customer->city }}</textarea>

                <div class="mb-3 mt-5">
                    <button type="submit" class="btn btn-primary">Update Customer Data</button>
                </div>
        </form>  
        </div>
    </div>

@endsection
           