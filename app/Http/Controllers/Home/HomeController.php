<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Slide & Banner
        $sliders = Banner::where('type' , 'slider')->where('is_active' , 1)->orderBy('priority')->get();
        $indexTopBanners = Banner::where('type' , 'index_top')->where('is_active' , 1)->orderBy('priority')->get();
        $indexButtonBanners = Banner::where('type' , 'index_button')->where('is_active' , 1)->orderBy('priority')->get();
        return view('home.index.index', compact('sliders', 'indexTopBanners', 'indexButtonBanners'));
    }
}
