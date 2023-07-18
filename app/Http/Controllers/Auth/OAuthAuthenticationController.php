<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class OAuthAuthenticationController extends Controller
{
    public function redirectToProvider($provider)
    {
        // Send Request To Google
        return Socialite::driver($provider)->stateless()->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $socialiteUser = Socialite::driver($provider)->stateless()->user();
        } catch (\Exception $ex) {
            return redirect()->route('login');
        }

        
        dd($socialiteUser);
    }
}
