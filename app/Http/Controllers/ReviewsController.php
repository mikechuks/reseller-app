<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['user', 'product'])
            ->latest()
            ->paginate(10);

        return view('admin.view_reviews', compact('reviews'));
    }

    public function create()
    {
        $users = User::all();
        $products = Product::all();

        return view('admin.insert_reviews', compact('users', 'products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id'    => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'rating'     => 'required|integer|min:1|max:5',
            'comment'    => 'required|string',
            'status'     => 'required|in:pending,approved,rejected',
        ]);

        Review::create($validated);

        return redirect()
            ->route('review.create')
            ->with('success', 'Review created successfully.');
    }

    public function show(Review $review)
    {
        $review->load(['user', 'product']);

        return view('reviews.show', compact('review'));
    }

    public function edit(Review $review)
    {
        $users = User::all();
        $products = Product::all();

        return view('admin.update_reviews', compact(
            'review',
            'users',
            'products'
        ));
    }

    public function update(Request $request, Review $review)
    {
        $validated = $request->validate([
            'user_id'    => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'rating'     => 'required|integer|min:1|max:5',
            'comment'    => 'required|string',
            'status'     => 'required|in:pending,approved,rejected',
        ]);

        $review->update($validated);

        return redirect()
            ->route('review.edit', $review->id)
            ->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()
            ->route('review.index')
            ->with('success', 'Review deleted successfully.');
    }
}
