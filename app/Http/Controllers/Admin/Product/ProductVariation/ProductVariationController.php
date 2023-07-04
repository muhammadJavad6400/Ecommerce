<?php

namespace App\Http\Controllers\Admin\Product\ProductVariation;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductVariations;
use Hekmatinasser\Verta\Facades\Verta;
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

    public function updateProductVariation($variationIds)
    {
        foreach ($variationIds as $key => $value) {
            $productVariation = ProductVariations::findOrFail($key);
            $productVariation->update([
                'price' => $value['price'],
                'quantity' => $value['quantity'],
                'sku' => $value['sku'],
                'sale_price' => $value['sale_price'],
                'date_on_sale_from' => convertJalaliDateToGregorian($value['date_on_sale_from']),
                'date_on_sale_to' => convertJalaliDateToGregorian($value['date_on_sale_to']),

            ]);
        }
    }


    public function changeProductVariation($variations, $attributeId, $product)
    {
        ProductVariations::where('product_id', $product->id)->delete();


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
