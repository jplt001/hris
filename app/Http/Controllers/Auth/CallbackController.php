<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class CallbackController extends Controller
{
    public function getRedirect(Request $request) {
        return Socialite::driver("google")->redirect();
    }

    public function getCallback(Request $request) {
        $user= Socialite::driver("google")->user();


    }
}
