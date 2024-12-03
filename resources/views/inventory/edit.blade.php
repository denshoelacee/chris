<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inventory Item</title>
</head>
<body>
    <h1>Edit Inventory Item</h1>

    <form action="{{ route('inventory.update', $inventory->product_id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name" value="{{ $inventory->product_name }}" required>
        <br>

        <label for="product_desc">Description:</label>
        <input type="text" name="product_desc" id="product_desc" value="{{ $inventory->product_desc }}">
        <br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" value="{{ $inventory->quantity }}" required>
        <br>

        <label for="unit_price">Unit Price:</label>
        <input type="text" name="unit_price" id="unit_price" value="{{ $inventory->unit_price }}" required>
        <br>

        <button type="submit">Update Item</button>
    </form>
</body>
</html>
