<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function fbAuth()
    {
        return Socialite::with('facebook')->redirect();
    }

    public function fbAuthCallback()
    {
        $user = Socialite::driver('facebook')->user();
        dd($user);
    }
}
