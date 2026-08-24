<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class TvSubscriptionController extends Controller
{
    /**
     * Display DStv subscription page
     */
    public function dstv()
    {
        $user = auth()->user();

        // Get TV Subscription category
        $category = Category::where('name', 'TV Subscription')->first();

        // Get DStv products
        $products = Product::where('category_id', $category?->id)
            ->where('name', 'like', '%DStv%')
            ->where('status', 'active')
            ->latest()
            ->get();

        return view(
            'user_dashboard.tv_subscription_dstv',
            compact('user', 'products')
        );
    }

    /**
     * Display GOtv subscription page
     */
    public function gotv()
    {
        $user = auth()->user();

        // Get TV Subscription category
        $category = Category::where('name', 'TV Subscription')->first();

        // Get GOtv products
        $products = Product::where('category_id', $category?->id)
            ->where('name', 'like', '%GOtv%')
            ->where('status', 'active')
            ->latest()
            ->get();

        return view(
            'user_dashboard.tv_subscription_gotv',
            compact('user', 'products')
        );
    }

    /**
     * Display Startimes subscription page
     */
    public function startimes()
    {
        $user = auth()->user();

        // Get TV Subscription category
        $category = Category::where('name', 'TV Subscription')->first();

        // Get Startimes products
        $products = Product::where('category_id', $category?->id)
            ->where('name', 'like', '%Startimes%')
            ->where('status', 'active')
            ->latest()
            ->get();

        return view(
            'user_dashboard.tv_subscription_startimes',
            compact('user', 'products')
        );
    }
}