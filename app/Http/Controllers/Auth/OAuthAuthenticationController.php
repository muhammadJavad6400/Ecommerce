<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OAuthAuthenticationController extends Controller
{
    public function redirectToProvider($provider)
    {
        dd($provider);

    }
}
