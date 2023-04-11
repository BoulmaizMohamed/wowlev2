<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderItem;


class OrderItemsController extends Controller
{
    public function index(Order $order)
    {
        $orderItems = $order->orderItems;
        return view('order_items.index', compact('orderItems', 'order'));
    }

    public function create(Order $order)
    {
        return view('order_items.create', compact('order'));
    }

    public function store(Request $request, Order $order)
    {
        // Add your validation rules here
        $validated = $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $orderItem = new OrderItem($validated);
        $order->orderItems()->save($orderItem);

        return redirect(url('/orders/' . $order->id . '/items'))->with('success', 'Order item created successfully.');
    }
}
