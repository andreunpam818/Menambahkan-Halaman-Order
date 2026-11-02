@extends('layouts.app')
@section('content')
<h1>Customer Data</h1>
<table class="table">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">City</th>
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
        </tr>
            @php $no++; @endphp
    @endforeach
</tbody>
</table>
@endsection
           