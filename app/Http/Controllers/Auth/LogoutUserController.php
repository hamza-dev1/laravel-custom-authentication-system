<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

class LogoutUserController extends Controller
{

    public function logout(Request $request) {
        if ($request->session()->has('userId')) {
            $request->session()->forget('userId');
            return Redirect(RouteServiceProvider::HOME);
        }
    }

}
