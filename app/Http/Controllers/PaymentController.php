<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of payments.
     */
    public function index()
    {
        $payments = Payment::with('order')
            ->latest()
            ->paginate(10);

        return view('admin.view_payment', compact('payments'));
    }

    /**
     * Show the form for creating a payment.
     */
    public function create()
    {
        $orders = Order::all();

        return view('admin.insert_payment', compact('orders'));
    }

    /**
     * Store a newly created payment.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'transaction_id' => 'required|unique:payments,transaction_id',
            'payment_method' => 'required|in:paystack,flutterwave,stripe,bank_transfer,cash_on_delivery',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|in:pending,paid,failed,refunded',
            'paid_at' => 'nullable|date',
        ]);

        Payment::create($validated);

        return redirect()
            ->route('payment.create')
            ->with('success', 'Payment created successfully.');
    }

    /**
     * Display the specified payment.
     */
    public function show(Payment $payment)
    {
        $payment->load('order.user');

        return view('payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified payment.
     */
    public function edit(Payment $payment)
    {
        $orders = Order::all();

        return view('admin.update_payment', compact('payment', 'orders'));
    }

    /**
     * Update the specified payment.
     */
    public function update(Request $request, Payment $payment)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'transaction_id' => 'required|unique:payments,transaction_id,' . $payment->id,
            'payment_method' => 'required|in:paystack,flutterwave,stripe,bank_transfer,cash_on_delivery',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|in:pending,paid,failed,refunded',
            'paid_at' => 'nullable|date',
        ]);

        $payment->update($validated);

        return redirect()
            ->route('payment.edit', $payment->id)
            ->with('success', 'Payment updated successfully.');
    }

    /**
     * Remove the specified payment.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()
            ->route('payment.index')
            ->with('success', 'Payment deleted successfully.');
    }
}