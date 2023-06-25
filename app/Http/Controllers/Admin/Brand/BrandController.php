<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::latest()->paginate(10);
        return view('admin.brands.index' , compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:50',
            'is_active' => 'required',
            'description' => 'nullable|string'
        ]);

        Brand::create([
            'name' => $request->name,
            'is_active' => $request->is_active,
            'description' => $request->description
        ]);
        alert()->success('برند مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('admin.brands.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('admin.brands.show' , compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit' , compact('brand'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:50',
            'is_active' => 'required',
            'description' => 'nullable|string'
        ]);

        // برای اینکه متناسب با اسم جدید برند تغییر کند
        $brand->slug = null;

        $brand->update([
            'name' => $request->name,
            'is_active' => $request->is_active,
            'description' => $request->description
        ]);

        alert()->success('برند مورد نظر ویرایش شد' , 'با تشکر');
        return redirect()->route('admin.brands.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();

        alert()->error('برند مورد نظر حذف شد' , ' !توجه توجه');
        return redirect()->route('admin.brands.index');
    }
}
