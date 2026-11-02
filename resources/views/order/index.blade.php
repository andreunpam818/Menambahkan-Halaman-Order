@extends('layouts.app')
@section('content')
<h1>Order Data</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Order Number</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Total Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $index => $order)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $order['order_number'] }}</td>
                <td>{{ $order['customer_name'] }}</td>
                <td>Rp {{ number_format($order['total_price'], 0, ',', '.') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
