<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inventory</h1>

    <!-- Success message -->
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('inventory.create') }}">Add New Item</a>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Actions</th>
        </tr>
        @foreach($inventory as $item)
            <tr>
                <td>{{ $item->product_name }}</td>
                <td>{{ $item->product_desc }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->unit_price }}</td>
                <td>
                    <a href="{{ route('inventory.edit', $item->product_id) }}">Edit</a>
                    <form action="{{ route('inventory.destroy', $item->product_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
