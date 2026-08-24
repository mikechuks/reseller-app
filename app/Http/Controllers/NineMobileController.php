<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class NineMobileController extends Controller
{
    /**
     * Display 9mobile Airtime page
     */
    public function index()
    {
        $user = auth()->user();

        // Get Airtime category
        $category = Category::where('name', 'Airtime')->first();

        // Get 9mobile products
        $products = Product::where('category_id', $category?->id)
            ->where('name', 'like', '%9mobile%')
            ->where('status', 'active')
            ->latest()
            ->get();

        return view('user_dashboard.ninemobile', compact(
            'user',
            'products'
        ));
    }
}