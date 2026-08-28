<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class AirtelController extends Controller
{
    /**
     * Display Airtel Airtime page
     */
    public function index()
    {
        $user = auth()->user();

        // Get Airtime category
        $category = Category::where('name', 'Airtime')->first();

        // Get Airtel products
        $products = Product::where('category_id', $category?->id)
            ->where('name', 'like', '%Airtel%')
            ->where('status', 'active')
            ->latest()
            ->get();

        return view('user_dashboard.airtel', compact(
            'user',
            'products'
        ));
    }


}
