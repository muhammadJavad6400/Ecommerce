<?php

namespace App\Http\Controllers\Admin\Product\ProductVariation;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductVariations;
use Illuminate\Http\Request;

class ProductVariationController extends Controller
{
    public function storeProductVariation($variations, $attributeId, $product)
    {
        // دسترسی به تعداد آرایه ی مقدار در آرایه ی متغیر
        $counter = count($variations['value']);


        for ($i = 0; $i < $counter; $i++) {
            ProductVariations::create([
                'attribute_id' => $attributeId,
                'product_id' => $product->id,
                'value' => $variations['value'][$i],
                'price' => $variations['price'][$i],
                'quantity' => $variations['quantity'][$i],
                'sku' => $variations['sku'][$i],
            ]);
        }
    }
}
