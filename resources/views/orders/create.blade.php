@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Order</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="product_id">Product</label>
            <select name="product_id" id="product_id" class="form-control">
                @foreach($inventories as $inventory)
                    <option value="{{ $inventory->product_id }}">{{ $inventory->product_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="user_id">User</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->user_id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="order_date">Order Date</label>
            <input type="date" name="order_date" id="order_date" class="form-control">
        </div>
        <div class="mb-3">
            <label for="quantity_order">Quantity</label>
            <input type="number" name="quantity_order" id="quantity_order" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
