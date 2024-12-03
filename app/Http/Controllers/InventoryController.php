<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::all();
        return view('inventory.index', compact('inventory'));
    }

    public function create()    
    {
        return view('inventory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_desc' => 'nullable|string',
            'quantity' => 'required|integer',
            'unit_price' => 'required|numeric',
        ]);

        Inventory::create($request->all());

        return redirect()->route('inventory.index')->with('success', 'Inventory item created successfully.');
    }


    public function edit($id)
    {
        $inventory = Inventory::findOrFail($id);
        return view('inventory.edit', compact('inventory'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_desc' => 'nullable|string',
            'quantity' => 'required|integer',
            'unit_price' => 'required|numeric',
        ]);

        $inventory = Inventory::findOrFail($id);
        $inventory->update($request->all());

        return redirect()->route('inventory.index')->with('success', 'Inventory item updated successfully.');
    }


    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();

        return redirect()->route('inventory.index')->with('success', 'Inventory item deleted successfully.');
    }
}
