<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Slide & Banner
        $sliders = Banner::where('type' , 'slider')->where('is_active' , 1)->orderBy('priority')->get();
        $indexTopBanners = Banner::where('type' , 'index_top')->where('is_active' , 1)->orderBy('priority')->get();
        $indexButtonBanners = Banner::where('type' , 'index_button')->where('is_active' , 1)->orderBy('priority')->get();

        $parentCategories = Category::where('parent_id', 0)->get();

        // Products
        $products = Product::where('is_active', 1)->get();
        //dd($products);

        // $product = Product::find(4);
        // dd($product->quantity_check);

        return view('home.index.index', compact('sliders', 'indexTopBanners', 'indexButtonBanners', 'parentCategories', 'products',));
    }
}
