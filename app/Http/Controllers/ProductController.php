<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->where('is_deleted', false)->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('is_deleted', false)->get(); // Ambil kategori yang aktif
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,categories_id',
            'product_description' => 'nullable|string',
            'product_price' => 'required|numeric',
            'product_image' => 'nullable|image|max:2048',
            'url_tiktok' => 'nullable|url',
            'url_shopee' => 'nullable|url',
            'url_tokopedia' => 'nullable|url',
            'is_active' => 'boolean',
        ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->product_description = $request->product_description;
        $product->product_price = $request->product_price;

        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->store('images/products', 'public');
            $product->product_image = $imagePath;
        }

        $product->url_tiktok = $request->url_tiktok;
        $product->url_shopee = $request->url_shopee;
        $product->url_tokopedia = $request->url_tokopedia;
        $product->is_active = $request->is_active ?? true; // Default to true if not provided
        $product->is_deleted = false; // Set is_deleted to false on create
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::where('is_deleted', false)->get(); // Ambil kategori yang aktif
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,categories_id',
            'product_description' => 'nullable|string',
            'product_price' => 'required|numeric',
            'product_image' => 'nullable|image|max:2048',
            'url_tiktok' => 'nullable|url',
            'url_shopee' => 'nullable|url',
            'url_tokopedia' => 'nullable|url',
            'is_active' => 'boolean',
        ]);

        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->product_description = $request->product_description;
        $product->product_price = $request->product_price;

        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->store('images/products', 'public');
            $product->product_image = $imagePath;
        }

        $product->url_tiktok = $request->url_tiktok;
        $product->url_shopee = $request->url_shopee;
        $product->url_tokopedia = $request->url_tokopedia;
        $product->is_active = $request->is_active ?? true; // Default to true if not provided
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->is_deleted = true; // Tandai produk sebagai dihapus
        $product->save();
        
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
