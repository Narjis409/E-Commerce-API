<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function index()
    {
        return Order::with('products')->get(); // Include related products
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'status' => 'required|string|in:pending,completed,cancelled',
            'total_amount' => 'required|numeric',
        ]);

        return Order::create($validated);
    }

    
    public function show(Order $order)
    {
        return $order->load('products'); // Include related products
    }

    
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'customer_id' => 'sometimes|required|exists:customers,id',
            'status' => 'sometimes|required|string|in:pending,completed,cancelled',
            'total_amount' => 'sometimes|required|numeric',
        ]);

        $order->update($validated);

        return $order;
    }

    
    public function destroy(Order $order)
    {
        $order->delete();

        return response()->noContent();
    }
}
