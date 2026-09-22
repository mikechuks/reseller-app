<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TravelFlightController extends Controller
{
    /**
     * Display Travel and Flight services.
     */
    public function index()
    {
        // Get the Travel and Flight products
        $products = Product::where('service_type', 'travel_flight')->where('status', 'active')->latest()->get();

        return view('user_dashboard.travel', compact('products'));
    }


    /**
     * Show a selected travel/flight product.
     */
    public function show($id)
    {
        $product = Product::where('service_type', 'travel_flight')
            ->where('status', 'active')
            ->findOrFail($id);

        return view('user_dashboard.travel', compact('product'));
    }


    /**
     * Process travel/flight purchase or booking.
     */
    public function purchase(Request $request)
    {
        $validated = $request->validate([
            'product_id' => [
                'required',
                'exists:products,id',
            ],
        ]);

        $product = Product::where('service_type', 'travel_flight')
            ->where('status', 'active')
            ->findOrFail($validated['product_id']);

        // We will connect wallet/payment processing here later.
        //
        // Example future flow:
        //
        // 1. Check user's wallet
        // 2. Check product price
        // 3. Debit wallet
        // 4. Create service transaction
        // 5. Send booking request to flight/travel provider
        // 6. Update transaction status
        // 7. Return result to user

        return redirect()
            ->back()
            ->with('success', 'Travel and flight request submitted successfully.');
    }
}

