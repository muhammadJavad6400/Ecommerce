<?php

namespace App\Http\Controllers\Home\ShowCategory;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowCategoryController extends Controller
{
    public function show(Category $category)
    {
        $attirbutesCategory = $category->attributes()->where('is_filter', 1)->with('attributeValues')->get();
        $variationsCategory = $category->attributes()->where('is_variation', 1)->with('variationValues')->first();

        //dd($variationsCategory);
        return view('home.categories.show', compact('category','attirbutesCategory', 'variationsCategory'));

    }
}
