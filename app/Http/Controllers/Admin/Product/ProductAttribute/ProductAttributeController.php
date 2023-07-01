<?php

namespace App\Http\Controllers\Admin\Product\ProductAttribute;

use App\Http\Controllers\Controller;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    public function storeProductAttribute($attributes, $product)
    {
        foreach($attributes as $key => $value) {
            ProductAttribute::create([
                'product_id' => $product->id,
                'attribute_id' => $key, // چون آرایه انجمنی بود این میشه همون ایدی هر کدوم از ویژگی های ما
                'value' => $value,    // اینم میشه مقدار هر کدام از ویژگی های ما
            ]);
        }

    }
}
