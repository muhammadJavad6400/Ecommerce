<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index.index');

    }
}
