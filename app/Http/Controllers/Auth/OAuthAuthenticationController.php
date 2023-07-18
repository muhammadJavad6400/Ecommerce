<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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


        $user = User::where('email', $socialiteUser->getEmail())->first();
        if(!$user){
            $user = User::create([
                'name' => $socialiteUser->getName(),
                'email' =>$socialiteUser->getEmail(),
                'avatar' => $socialiteUser->getAvatar(),
                'provider_name' => $provider,
                'password' => Hash::make($socialiteUser->getId()),
                'email_verified_at' => Carbon::now(),
            ]);
        }

        auth()->login($user, $remember = true);

        alert()->success('با تشکر', 'ورود شما با موفقیت انجام شد')->persistent('حله');

        return redirect()->route('home.index');
    }
}
