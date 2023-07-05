<?php

namespace App\Http\Controllers\Admin\Banner\BannerImage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerImageController extends Controller
{
    public function uploadBannerImage($bannerImage)
    {
        $fileNameBannerImage = generateFileName($bannerImage->getClientOriginalName());
        $bannerImage->move(public_path(env('BANNER_IMAGES_UPLOAD_PATH')), $fileNameBannerImage);
        
        return $fileNameBannerImage;

    }
}
