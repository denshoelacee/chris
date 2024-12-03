<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Inventory</title>
</head>
<body>
    <h1>Add New Inventory Item</h1>

    <form action="{{ route('inventory.store') }}" method="POST">
        @csrf
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name" required>
        <br>

        <label for="product_desc">Description:</label>
        <input type="text" name="product_desc" id="product_desc">
        <br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required>
        <br>

        <label for="unit_price">Unit Price:</label>
        <input type="text" name="unit_price" id="unit_price" required>
        <br>

        <button type="submit">Add Item</button>
    </form>
</body>
</html>
