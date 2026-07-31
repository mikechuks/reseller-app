<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    public function index()
    {
        $images = ProductImage::with('product')->latest()->get();

        return view('admin/view_productImage', compact('images'));
    }

    public function create()
    {
        $products = Product::all();

        return view('admin/insert_productImage', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $path = $request->file('image')->store('products', 'public');

        ProductImage::create([
            'product_id' => $request->product_id,
            'image' => $path,
        ]);

        return redirect()
            ->route('productImg.create')
            ->with('success', 'Image uploaded successfully');
    }

    public function show(ProductImage $productImage)
    {
        return view('product_images.show', compact('productImage'));
    }

    public function edit(ProductImage $productImage)
    {
        $products = Product::all();

        return view('admin/update_productImage', compact(
            'productImage',
            'products'
        ));
    }

    public function update(Request $request, ProductImage $productImage)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'product_id' => $request->product_id,
        ];

        if ($request->hasFile('image')) {

            Storage::disk('public')
                ->delete($productImage->image);

            $data['image'] = $request
                ->file('image')
                ->store('products', 'public');
        }

        $productImage->update($data);

        return redirect()
            ->route('productImg.edit', $productImage->id)
            ->with('success', 'Image updated successfully');
    }

    public function destroy(ProductImage $productImage)
    {
        Storage::disk('public')
            ->delete($productImage->image);

        $productImage->delete();

        return redirect()
            ->route('productImg.index')
            ->with('success', 'Image deleted successfully');
    }
}
