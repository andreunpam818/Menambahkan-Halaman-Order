@extends('layouts.app')
@section('content')

<div class="class row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Tambah Customer</a>
    </div>
</div>

<div class="row">
<div class="col-lg-12">
<h1>Customer Data</h1>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">City</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
@php $no = 1; @endphp
@foreach($customers as $customer) 
<tr>
<td>{{ $no }}</td>
<td>{{ $customer["name"] }}</td>
<td>{{ $customer["email"] }}</td>
<td>{{ $customer["city"] }}</td>
<td>
    <a href="{{ route('customers.show', $customer['id']) }}" class="btn btn-primary">View Detail</a>
    <a href="{{ route('customers.edit', $customer['id']) }}" class="btn btn-warning">Edit Data</a>
        <form action="{{ route('customers.delete', $customer['id']) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
        
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" >Delete</button>
        </form>
</td>
</tr>
@php $no++; @endphp
@endforeach
</tbody>
</table>    
</div>

@endsection
           