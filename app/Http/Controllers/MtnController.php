<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class MtnController extends Controller{
    /**
     * Display MTN Airtime page
     */
    public function userDashboard()
    {
        $user = auth()->user();

        // Find Airtime category
        $category = Category::where('name', 'Airtime')->first();

        // Get MTN products under Airtime category
        $products = Product::where('category_id', $category?->id)
            ->where('name', 'like', '%MTN%')
            ->where('status', 'active')
            ->latest()
            ->get();

        return view('user_dashboard.mtn', compact(
            'user',
            'products'
        ));
    }
}
