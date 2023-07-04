<?php

namespace App\Http\Controllers\Admin\Product\ProductImage;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function upload($primaryImage, $images)
    {
        $fileNamePrimaryImage = generateFileName($primaryImage->getClientOriginalName());
        $primaryImage->move(public_path(env('PRODUCT_IMAGES_UPLOAD_PATH')), $fileNamePrimaryImage);


        // برای ذخیره ی تصاویر فرعی چون با یک ارایه از تصاویر طرف هستیم باید به روش زیر عمل کنیم
        $fileNameImages = [];
        foreach($images as $image) {
            $fileNameImage = generateFileName($image->getClientOriginalName());
            $image->move(public_path(env('PRODUCT_IMAGES_UPLOAD_PATH')), $fileNameImage);

            array_push($fileNameImages , $fileNameImage);
        }

        return [
            'fileNamePrimaryImage' => $fileNamePrimaryImage,
            'fileNameImages' => $fileNameImages
        ];

    }


    public function productImagesEdit(Product $product)
    {
        $productImages = $product->productImages;
        return view('admin.products.editProductImages', compact('product', 'productImages'));

    }
}
