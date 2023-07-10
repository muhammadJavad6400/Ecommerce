<?php

namespace App\Http\Controllers\Home\ShowCategory;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowCategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('home.categories.show');

    }
}
