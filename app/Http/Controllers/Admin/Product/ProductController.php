<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $tags =  Tag::all();
        $categories = Category::where('parent_id', '!=', 0)->get();
        return view('admin.products.create', compact('brands', 'tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'brand_id' => 'required',
            'tag_ids' => 'required',
            'tag_ids.*' => 'required',
            'is_active' => 'required',
            'description' => 'nullable|string',
            'primary_image' => 'required|mimes:jpg,jpeg,png,svg',
            'images' => 'required', // در ابتدا خود آرایه باید وجود داشته باشد
            'images.*' => 'mimes:jpg,jpeg,png,svg', // بعد هر کدام از فیلد های آن آرایه هم باید وجود داشته باشند
            'category_id' => 'required',
            'attribute_ids' => 'required',
            'attribute_ids.*' => 'required',
            'variation_values' => 'required', // در ابتدا باید خود آرایه وجود داشته باشد
            'variation_values.*.*' => 'required', // برای هر کدام از آرایه های متغییر و مقادیر درون آن آرایه ها
            'variation_values.price.*' => 'integer', // هر کدام از فیلد های آرایه ی قمیت که در آرایه ی متغیر قرار دارد باید از نوع عدد باشد
            'variation_values.quantity.*' => 'integer', // هر کدام از فیلد های آرایه ی تعداد که در آرایه ی متغیر قرار دارد باید از نوع عدد باشد
            'delivery_amount' => 'nullable|integer',
            'delivery_amount_per_product' => 'nullable|integer'
        ]);

        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
