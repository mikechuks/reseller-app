<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
                    ->latest()
                    ->get();

        return view('admin/view_product', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin/insert_product', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
        'category_id' => 'required',
        'name' => 'required|min:3|max:255',
        'description' => 'required',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'sku' => 'required|unique:products',
        'status' => 'required',
        ],[
        'category_id.required' => 'Please select a category.',
        'name.required' => 'Product name is required.',
        'name.min' => 'Product name must be at least 3 characters.',
        'name.max' => 'Product name cannot exceed 255 characters.',
        'description.required' => 'Product description is required.',
        'price.required' => 'Product price is required.',
        'price.numeric' => 'Product price must be a valid number.',
        'price.min' => 'Product price cannot be negative.',
        'stock.required' => 'Stock quantity is required.',
        'stock.integer' => 'Stock must be a whole number.',
        'stock.min' => 'Stock cannot be negative.',
        'sku.required' => 'SKU is required.',
        'sku.unique' => 'This SKU already exists.',
        'status.required' => 'Please select a product status.',
        ]);
        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'sku' => $request->sku,
            'status' => $request->status,
        ]);
        return redirect()
            ->route('product.create')
            ->with('success', 'Product created successfully');
    }

    public function show(Product $product)
    {
        $product->load('category');

        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.update_product', compact(
            'product',
            'categories'
        ));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'sku' => 'required|unique:products,sku,' . $product->id,
            'status' => 'required',
        ]);

        $product->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'sku' => $request->sku,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('products.edit',$product->id)
            ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('product.index')
            ->with('success', 'Product deleted successfully');
    }
}
