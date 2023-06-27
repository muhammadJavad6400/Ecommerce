<?php

use App\Http\Controllers\Admin\Attribute\AttributeController as AdminAttributeController;
use App\Http\Controllers\Admin\Brand\BrandController as AdminBrandController;
use App\Http\Controllers\Admin\Category\CategoryController as AdminCategoryController;
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
    Route::resource('/brands' , AdminBrandController::class);
    Route::resource('/attributes' , AdminAttributeController::class);
    Route::resource('/categories' , AdminCategoryController::class);

});
