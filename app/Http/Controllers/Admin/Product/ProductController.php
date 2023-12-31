<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\Product\ProductAttribute\ProductAttributeController;
use App\Http\Controllers\Admin\Product\ProductImage\ProductImageController;
use App\Http\Controllers\Admin\Product\ProductVariation\ProductVariationController;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Tag;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
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
            'attribute_ids.*' => 'required|string',
            'variation_values' => 'required', // در ابتدا باید خود آرایه وجود داشته باشد
            'variation_values.*.*' => 'required', // برای هر کدام از آرایه های متغییر و مقادیر درون آن آرایه ها
            'variation_values.price.*' => 'integer', // هر کدام از فیلد های آرایه ی قمیت که در آرایه ی متغیر قرار دارد باید از نوع عدد باشد
            'variation_values.quantity.*' => 'integer', // هر کدام از فیلد های آرایه ی تعداد که در آرایه ی متغیر قرار دارد باید از نوع عدد باشد
            'delivery_amount' => 'nullable|integer',
            'delivery_amount_per_product' => 'nullable|integer'
        ]);

        try {
            DB::beginTransaction();

            $productImageController = new ProductImageController();
            $fileNameImages = $productImageController->uploadProductImages($request->primary_image, $request->images);

            $product = Product::create([
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'name' => $request->name,
                'description' => $request->description,
                'primary_image' => $fileNameImages['fileNamePrimaryImage'],
                'is_active' => $request->is_active,
                'delivery_amount' => $request->delivery_amount,
                'delivery_amount_per_product' => $request->delivery_amount_per_product,
            ]);

            foreach ($fileNameImages['fileNameImages'] as $fileNameImage) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $fileNameImage,
                ]);
            }

            $productAttributeController = new ProductAttributeController();
            $productAttributeController->storeProductAttribute($request->attribute_ids, $product);


            // دسترسی به آیدی دسته بندی مورد نظر
            $category = Category::find($request->category_id);
            // دسترسی به آیدی متغیر
            $attributeId =  $category->attributes()->wherePivot('is_variation', 1)->first()->id;

            $productVariationController = new ProductVariationController();
            $productVariationController->storeProductVariation($request->variation_values, $attributeId, $product);

            // ذخیره ی تگ های هر محصول در جدول میانی محصول-تگ
            $product->tags()->attach($request->tag_ids);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد محصول', $ex->getMessage());
            return redirect()->route('admin.products.create');
        }

        alert()->success('محصول مورد نظر ایجاد شد', 'با تشکر');
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // Eager Loading To Solve N+1 Query
        $productAttributes = $product->productAttributes()->with('attribute')->get();
        $productVariations = $product->productVariations;
        $productImages = $product->productImages;
        $productTags = $product->tags;
        return view('admin.products.show', compact('product', 'productAttributes', 'productVariations', 'productImages', 'productTags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brands = Brand::all();
        $tags = Tag::all();
        $productAttributes = $product->productAttributes()->with('attribute')->get();
        $productVariations = $product->productVariations;
        $categories = Category::where('parent_id', '!=', 0)->get();
        return view('admin.products.edit', compact('product', 'brands', 'categories', 'tags', 'productAttributes', 'productVariations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name' => 'required',
            'brand_id' => 'required|exists:brands,id',
            'is_active' => 'required',
            'tag_ids' => 'required',
            'tag_ids.*' => 'exists:tags,id',
            'description' => 'required',
            'attribute_values' => 'required',
            'variation_values' => 'required',
            'variation_values.*.price' => 'required|integer',
            'variation_values.*.quantity' => 'required|integer',
            'variation_values.*.sale_price' => 'nullable|integer',
            'variation_values.*.date_on_sale_from' => 'nullable|date',
            'variation_values.*.date_on_sale_to' => 'nullable|date',
            'delivery_amount' => 'required|integer',
            'delivery_amount_per_product' => 'nullable|integer',
        ]);

        try {
            DB::beginTransaction();

            $product->update([
                'name' => $request->name,
                'brand_id' => $request->brand_id,
                'description' => $request->description,
                'is_active' => $request->is_active,
                'delivery_amount' => $request->delivery_amount,
                'delivery_amount_per_product' => $request->delivery_amount_per_product,
            ]);


            $productAttributeController = new ProductAttributeController();
            $productAttributeController->updateProductAttribute($request->attribute_values);


            $productVariationController = new ProductVariationController();
            $productVariationController->updateProductVariation($request->variation_values);

            $product->tags()->sync($request->tag_ids);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ویرایش محصول', $ex->getMessage());
            return redirect()->back();
        }

        alert()->success('محصول مورد نظر ویرایش شد', 'با تشکر');
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        alert()->error('محصول مورد نظر حذف شد', ' !توجه توجه');
        return redirect()->route('admin.products.index');
    }

    public function editProductCategory(Request $request, Product $product)
    {
        $categories = Category::where('parent_id', '!=', 0)->get();
        return view('admin.products.editProductCategory', compact('product', 'categories'));
    }

    public function updateProductCategory(Request $request, Product $product)
    {
        //dd($request->all());
        $request->validate([
            'category_id' => 'required',
            'attribute_ids' => 'required',
            'attribute_ids.*' => 'required|string',
            'variation_values' => 'required',
            'variation_values.*.*' => 'required',
            'variation_values.price.*' => 'integer',
            'variation_values.quantity.*' => 'integer',
        ]);

        try {
            DB::beginTransaction();


            $product->update([
                'category_id' => $request->category_id,
            ]);



            $productAttributeController = new ProductAttributeController();
            $productAttributeController->changeProductAttribute($request->attribute_ids, $product);


            // دسترسی به آیدی دسته بندی مورد نظر
            $category = Category::find($request->category_id);
            // دسترسی به آیدی متغیر
            $attributeId =  $category->attributes()->wherePivot('is_variation', 1)->first()->id;

            $productVariationController = new ProductVariationController();
            $productVariationController->changeProductVariation($request->variation_values, $attributeId, $product);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد محصول', $ex->getMessage());
            return redirect()->route('admin.products.create');
        }

        alert()->success('محصول مورد نظر ایجاد شد', 'با تشکر');
        return redirect()->route('admin.products.index');
    }
}
