<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();

        return view('admin/view_category', compact('categories'));
    }

    public function create()
    {
        return view('admin/insert_category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
            'description' => 'nullable',
            'image' => 'nullable',
            'status' => 'required'
        ]);
        $imageName = null;

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('uploads/categories'), $imageName);

        }
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'image' =>  $imageName,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('category.create')
            ->with('success', 'Category created successfully');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.update_category', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'status' => 'required'
        ]);
            $imageName = $category->image;

            if ($request->hasFile('image')) {

                $imageName = time().'.'.$request->image->extension();

                $request->image->move(
                    public_path('uploads/categories'),
                    $imageName
                );
            }
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'image' => $imageName ,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('categories.edit', $category->id)
            ->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()
            ->route('category.index')
            ->with('success', 'Category deleted successfully');
    }
}
