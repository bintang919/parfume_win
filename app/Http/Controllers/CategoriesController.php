<?php
namespace App\Http\Controllers;

use App\Models\Category; // Import model Category
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::active()->paginate(10);
        return view('categories.index', compact('categories'));
    }


    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'categories_name' => 'required|string|max:255',
            'categories_description' => 'required|string|max:255',
        ]);

        Category::create([
            'categories_name' => $request->categories_name,
            'categories_description' => $request->categories_description,
            'created_by' => Auth::user()->username,
        ]);
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function show($id)
    {
        // Tampilkan kategori spesifik
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id); // Ambil kategori untuk diedit
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all()); // Update kategori

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->update(['is_deleted' => true]);
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
