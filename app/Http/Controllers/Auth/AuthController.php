<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\OTPSms;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // OAuth Authentication
    // public function redirectToProvider($provider)
    // {
    //     // Send Request To Google
    //     return Socialite::driver($provider)->stateless()->redirect();
    // }

    // public function handleProviderCallback($provider)
    // {
    //     try {
    //         $socialiteUser = Socialite::driver($provider)->stateless()->user();
    //     } catch (\Exception $ex) {
    //         return redirect()->route('login');
    //     }


    //     $user = User::where('email', $socialiteUser->getEmail())->first();
    //     if(!$user){
    //         $user = User::create([
    //             'name' => $socialiteUser->getName(),
    //             'email' =>$socialiteUser->getEmail(),
    //             'avatar' => $socialiteUser->getAvatar(),
    //             'provider_name' => $provider,
    //             'password' => Hash::make($socialiteUser->getId()),
    //             'email_verified_at' => Carbon::now(),
    //         ]);
    //     }

    //     auth()->login($user, $remember = true);

    //     alert()->success('با تشکر', 'ورود شما با موفقیت انجام شد')->persistent('حله');

    //     return redirect()->route('home.index');
    // }

    //OTP Authentication
    public function login(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('auth.otp.login');
        }

        $request->validate([
            'cellphone' => 'required|iran_mobile',
        ]);

        try {
            $user = User::where('cellphone', $request->cellphone)->first();

            $OTPCode = mt_rand(100000, 999999);
            $loginToken = Hash::make("CDATA671#*&&poi74)&%nnJuBOTPcOde");
            if ($user) {
                $user->update([
                    'otp' => $OTPCode,
                    'login_token' => $loginToken,
                ]);
            } else {
                $user = User::create([
                    'cellphone' => $request->cellphone,
                    'otp' => $OTPCode,
                    'login_token' => $loginToken
                ]);
            }

            $user->notify(new OTPSms($OTPCode));

            return response(['login_token' => $loginToken], 200);

        } catch (\Exception $ex) {
            return response(['errors' => $ex->getMessage()], 422);
        }
    }
}
