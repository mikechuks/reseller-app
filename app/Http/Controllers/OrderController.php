<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')
                    ->latest()
                    ->paginate(10);

        return view('admin/view_order', compact('orders'));
    }

    public function create()
    {
        $users = User::all();

        return view('admin/insert_order', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id'       => 'required|exists:users,id',
            'order_number'  => 'required|unique:orders,order_number',
            'total_amount'  => 'required|numeric|min:0',
            'status'        => 'required|in:pending,processing,shipped,delivered,cancelled',
        ]);

        Order::create($validated);

        return redirect()
            ->route('order.create')
            ->with('success', 'Order created successfully.');
    }

    public function show(Order $order)
    {
        $order->load([
            'user',
            'orderItems.product',
            'payment'
        ]);

        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $users = User::all();

        return view('admin.update_order', compact('order', 'users'));
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'user_id'      => 'required|exists:users,id',
            'order_number' => 'required|unique:orders,order_number,' . $order->id,
            'total_amount' => 'required|numeric|min:0',
            'status'       => 'required|in:pending,processing,shipped,delivered,cancelled',
        ]);

        $order->update($validated);

        return redirect()
            ->route('order.edit', $order->id)
            ->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        
        return redirect()
            ->route('order.index')
            ->with('success', 'Order deleted successfully.');
    }
}