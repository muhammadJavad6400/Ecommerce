<?php

use App\Http\Controllers\Admin\Attribute\AttributeController as AdminAttributeController;
use App\Http\Controllers\Admin\Banner\BannerController as AdminBannerController;
use App\Http\Controllers\Admin\Brand\BrandController as AdminBrandController;
use App\Http\Controllers\Admin\Category\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\Product\ProductController as AdminProductController;
use App\Http\Controllers\Admin\Product\ProductImage\ProductImageController as AdminProductImageController;
use App\Http\Controllers\Admin\Tag\TagController as AdminTagController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin-panel/dashboard', function () {
    return view('admin.dashboard.dashboard');
})->name('dashboard');


Route::prefix('admin-panel/management')->name('admin.')->group(function() {

    Route::resource('brands', AdminBrandController::class);
    Route::resource('attributes', AdminAttributeController::class);
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('tags', AdminTagController::class);
    Route::resource('products', AdminProductController::class);
    Route::resource('banners', AdminBannerController::class);

    // Get Category Attribute
    Route::get('/category-attributes-list/{category}', [AdminCategoryController::class, 'getCategoryAttributes']);

    // Edit Product Images
    Route::get('/products/{product}/images-edit', [AdminProductImageController::class, 'updateproductImages'])->name('products.images.edit');
    Route::delete('/products/{product}/images-destroy', [AdminProductImageController::class, 'destroyProductImages'])->name('products.images.destroy');
    Route::put('/products/{product}/images-set-primary', [AdminProductImageController::class, 'setPrimaryProductImage'])->name('products.images.set.primary');
    Route::post('/products/{product}/images-add' ,[AdminProductImageController::class , 'addProductImages'])->name('products.images.add');

    // Edit product Category
    Route::get('/products/{product}/edit-product-category', [AdminProductController::class, 'editProductCategory'])->name('products.category.edit');
    Route::put('/products/{product}/update-product-category', [AdminProductController::class, 'updateProductCategory'])->name('products.category.update');

});

Route::get('/' , [HomeController::class , 'index']);
