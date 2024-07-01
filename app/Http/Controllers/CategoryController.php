<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('Blog/Categories', compact('categories'));
    }

    public function create()
    {
        return view('Blog/AddCategory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('categories', 'public') : null;

        Category::create([
            'name' => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('Blog.EditCategory', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('categories', 'public');
        } else {
            $imagePath = $category->image;
        }

        $category->update([
            'name' => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

    public function massDestroy(Request $request)
    {
        $categoryIds = $request->input('category_ids');
    
        // Debugging to check if IDs are being received
        if (empty($categoryIds)) {
            return redirect()->route('categories.index')->with('error', 'No categories selected.');
        } else {
            // For debugging
            dd($categoryIds);
        }
    
        if (!empty($categoryIds)) {
            Category::whereIn('id', $categoryIds)->delete();
            return redirect()->route('categories.index')->with('success', 'Selected categories have been deleted.');
        }
    
        return redirect()->route('categories.index')->with('error', 'No categories selected.');
    }
    
}
