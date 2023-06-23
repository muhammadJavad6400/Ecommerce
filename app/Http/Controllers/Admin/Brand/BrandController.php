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
            'icon' => 'nullable|mimes:jpg,jpeg,png,svg',
            'description' => 'nullable|string'
        ]);


        $fileNameIcon = generateFileName($request->icon->getClientOriginalName());
        $iconName = $request->icon->move(public_path(env('BRAND_IMAGES_UPLOAD_PATH')) , $fileNameIcon);

        $brand =  Brand::create([
            'name' => $request->name,
            'is_active' => $request->is_active,
            'icon' => $iconName,
            'description' => $request->description
        ]);
        alert()->success('برند مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('admin.brands.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
