<?php

namespace App\Http\Controllers\Home\ShowSingleProduct;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowSingleProductController extends Controller
{
    public function show(Product $product)
    {
        return view('home.products.show', compact('product'));

    }
}
