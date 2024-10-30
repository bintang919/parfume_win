<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $product = Product::where('is_active',1)->get();
        $banner = Banner::all();
        $categories = Category::where('is_active', 1)
        ->orderBy('categories_name')
        ->get()
        ->groupBy(function($item) {
            return strtoupper(substr($item->categories_name, 0, 1));
        });
        // dd($product);
        return view('landing_page',['product' => $product,'categories' => $categories,'banner' => $banner]);
    }
}
