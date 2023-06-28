<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Attribute as ModelsAttribute;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.categories.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parentCategories = Category::where('parent_id', 0)->get();
        $attributes = ModelsAttribute::all();
        return view('admin.categories.create', compact('parentCategories', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'parent_id' => 'required',
            'name' => 'required|string',
            'slug' => 'required|unique:categories,slug',
            'attribute_ids' => 'required',
            'attribute_is_filter_ids' => 'required',
            'variation_id' => 'required',
            'is_active' => 'required',
            'icon' => 'nullable',
            'description' => 'nullable|string'

        ]);

        try {

            DB::beginTransaction();

            $category = Category::create([
                'parent_id' => $request->parent_id,
                'name' => $request->name,
                'slug' => $request->slug,
                'description' => $request->description,
                'icon' => $request->icon
            ]);

            //پر کردن جدول میانی بین دسته بندی و ویزگی بر اساس آیدی ویژگی
            foreach ($request->attribute_ids as $attributeId) {
                $attribute = ModelsAttribute::findOrFail($attributeId);
                $attribute->categories()->attach($category->id, [
                    'is_filter' => in_array($attributeId, $request->attribute_is_filter_ids) ? 1 : 0,
                    'is_variation' => $request->variation_id == $attributeId ? 1 : 0,
                ]);
            }

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();

            alert()->error('مشکل در ایجاد دسته بندی', $ex->getMessage());
            redirect()->route('admin.categories.create');
        }


        alert()->success('دسته بندی مورد نظر ایجاد شد' , 'با تشکر');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

        return view('admin.categories.show' , compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $parentCategories = Category::where('parent_id', 0)->get();
        $attributes = ModelsAttribute::all();
        return view('admin.categories.edit' , compact('category', 'parentCategories', 'attributes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
