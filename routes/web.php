<?php

use App\Http\Controllers\Admin\Attribute\AttributeController as AdminAttributeController;
use App\Http\Controllers\Admin\Brand\BrandController as AdminBrandController;
use App\Http\Controllers\Admin\Category\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\Product\ProductController as AdminProductController;
use App\Http\Controllers\Admin\Tag\TagController as AdminTagController;
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

    // Get Category Attribute
    Route::get('/category-attributes-list/{category}', [AdminCategoryController::class, 'getCategoryAttributes']);
});
