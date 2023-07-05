<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Admin\Banner\BannerImage\BannerImageController;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::latest()->paginate(10);
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bannerImage' => 'required|mimes:jpg,jpeg,png,svg',
            'title' => 'required|string',
            'text' => 'required|string',
            'is_active' => 'required',
            'priority' => 'required|integer',
            'type' => 'required'
        ]);

        $bannerImageController = new BannerImageController();
        $bannerNameImage = $bannerImageController->uploadBannerImage($request->bannerImage);

        Banner::create([
            'image' => $bannerNameImage,
            'title' => $request->title,
            'text' => $request->text,
            'priority' => $request->priority,
            'is_active' => $request->is_active,
            'type' => $request->type,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'button_icon' => $request->button_icon,
        ]);


        alert()->success('بنر مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('admin.banners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        return view('admin.banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'bannerImage' => 'nullable|mimes:jpg,jpeg,png,svg',
            'title' => 'required|string',
            'text' => 'required|string',
            'is_active' => 'required',
            'priority' => 'required|integer',
            'type' => 'required'
        ]);

        if($request->has('bannerImage')) {
            $bannerImageController = new BannerImageController();
            $bannerNameImage = $bannerImageController->uploadBannerImage($request->bannerImage);
        }


        $banner->update([
            'image' => $request->has('bannerImage') ? $bannerNameImage : $banner->image,
            'title' => $request->title,
            'text' => $request->text,
            'priority' => $request->priority,
            'is_active' => $request->is_active,
            'type' => $request->type,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'button_icon' => $request->button_icon,
        ]);


        alert()->success('بنر مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('admin.banners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        alert()->error('بنر مورد نظر حذف شد', ' !توجه توجه');
        return redirect()->route('admin.banners.index');
    }
}
