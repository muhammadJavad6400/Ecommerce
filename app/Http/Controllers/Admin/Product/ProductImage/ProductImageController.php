<?php

namespace App\Http\Controllers\Admin\Product\ProductImage;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductImageController extends Controller
{
    public function uploadProductImages($primaryImage, $images)
    {
        $fileNamePrimaryImage = generateFileName($primaryImage->getClientOriginalName());
        $primaryImage->move(public_path(env('PRODUCT_IMAGES_UPLOAD_PATH')), $fileNamePrimaryImage);


        // برای ذخیره ی تصاویر فرعی چون با یک ارایه از تصاویر طرف هستیم باید به روش زیر عمل کنیم
        $fileNameImages = [];
        foreach ($images as $image) {
            $fileNameImage = generateFileName($image->getClientOriginalName());
            $image->move(public_path(env('PRODUCT_IMAGES_UPLOAD_PATH')), $fileNameImage);

            array_push($fileNameImages, $fileNameImage);
        }

        return [
            'fileNamePrimaryImage' => $fileNamePrimaryImage,
            'fileNameImages' => $fileNameImages
        ];
    }


    public function updateproductImages(Product $product)
    {
        $productImages = $product->productImages;
        return view('admin.products.editProductImages', compact('product', 'productImages'));
    }

    public function destroyProductImages(Request $request)
    {
        //dd('Done!');
        $request->validate([
            'imageId' => 'required|exists:product_images,id',
        ]);
        // Delete Product Images
        ProductImage::destroy($request->imageId);

        alert()->success('تصویر محصول مورد نظر حذف شد', 'با تشکر');
        return redirect()->back();
    }

    public function setPrimaryProductImage(Request $request, Product $product)
    {
        $request->validate([
            'imageId' => 'required|exists:product_images,id',
        ]);

        $productImage = ProductImage::findOrFail($request->imageId);
        $product->update([
            'primary_image' => $productImage->image,
        ]);

        alert()->success('ویرایش تصویر اصلی محصول با موفیقت انجام شد', 'با تشکر');
        return redirect()->back();
    }

    public function addProductImages(Request $request, Product $product)
    {
        $request->validate([
            'primary_image' => 'nullable|mimes:jpg,jpeg,png,svg',
            'images.*' => 'nullable|mimes:jpg,jpeg,png,svg',
        ]);
        try {
            DB::beginTransaction();

            if ($request->has('primary_image')) {

                $fileNamePrimaryImage = generateFileName($request->primary_image->getClientOriginalName());
                $request->primary_image->move(public_path(env('PRODUCT_IMAGES_UPLOAD_PATH')), $fileNamePrimaryImage);

                $product->update([
                    'primary_image' => $fileNamePrimaryImage,
                ]);
            }

            if ($request->has('images')) {


                foreach ($request->images as $image) {
                    $fileNameImage = generateFileName($image->getClientOriginalName());
                    $image->move(public_path(env('PRODUCT_IMAGES_UPLOAD_PATH')), $fileNameImage);

                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => $fileNameImage,
                    ]);
                }
            }

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در تغییر تصاویر محصول', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('ویرایش تصویر اصلی محصول با موفقیت انجام شد', 'باتشکر');
        return redirect()->back();
    }
}
