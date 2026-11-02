
@extends('layouts.app')
@section('content')           
 
<h1>Product Data</h1>
<table class="table">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Price</th>
        <th scope="col">Stock</th>
    </tr>
</thead>
<tbody>
    @php $no = 1; @endphp
    @foreach($products as $product) 
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $product["name"] }}</td>
            <td>{{ $product["price"] }}</td>
            <td>{{ $product["stock"] }}</td>
        </tr>
            @php $no++; @endphp
    @endforeach
</tbody>
</table>
@endsection
          