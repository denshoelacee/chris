@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Orders</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Create Order</a>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Product</th>
                <th>User</th>
                <th>Order Date</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->order_id }}</td>
                    <td>{{ $order->inventory->product_name }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->quantity_order }}</td>
                    <td>
                        <a href="{{ route('orders.edit', $order->order_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('orders.destroy', $order->order_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
