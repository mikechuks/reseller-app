<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class GloController extends Controller
{
    /**
     * Display Glo Airtime page
     */
    public function index()
    {
        $user = auth()->user();

        // Get Airtime category
        $category = Category::where('name', 'Airtime')->first();

        // Get Glo Airtime products
        $products = Product::where('category_id', $category?->id)
            ->where('name', 'like', '%Glo%')
            ->where('status', 'active')
            ->latest()
            ->get();

        return view('user_dashboard.glo', compact(
            'user',
            'products'
        ));
    }
}