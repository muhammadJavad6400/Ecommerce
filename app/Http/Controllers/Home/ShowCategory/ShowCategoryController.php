<?php

namespace App\Http\Controllers\Home\ShowCategory;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowCategoryController extends Controller
{
    public function show(Request $request, Category $category)
    {
        //dd($request->all());
        $attributesCategory = $category->attributes()->where('is_filter', 1)->with('attributeValues')->get();
        $variationCategory = $category->attributes()->where('is_variation', 1)->with('variationValues')->first();


        $productsCategory = $category->products()->filter()->search()->paginate(1);

        //dd($productsCategory);
        return view('home.categories.show', compact('category','attributesCategory', 'variationCategory', 'productsCategory'));

    }
}
