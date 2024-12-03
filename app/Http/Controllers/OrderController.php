<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Inventory;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('inventory', 'user')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $users = User::all();
        $inventories = Inventory::all();
        return view('orders.create', compact('users', 'inventories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:inventory,product_id',
            'user_id' => 'required|exists:users,user_id',
            'order_date' => 'required|date',
            'quantity_order' => 'required|integer|min:1',
            'inventory_id' => 'required|exists:inventory,product_id',
        ]);

        Order::create($request->all());
        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function edit(Order $order)
    {
        $users = User::all();
        $inventories = Inventory::all();
        return view('orders.edit', compact('order', 'users', 'inventories'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'product_id' => 'required|exists:inventory,product_id',
            'user_id' => 'required|exists:users,user_id',
            'order_date' => 'required|date',
            'quantity_order' => 'required|integer|min:1',
            'inventory_id' => 'required|exists:inventory,product_id',
        ]);

        $order->update($request->all());
        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
