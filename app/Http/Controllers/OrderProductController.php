<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderProductController extends Controller
{
    
    public function index(Order $order)
    {
        return $order->products()->withPivot('quantity')->get(); // Get products with quantity in the order
    }
}
