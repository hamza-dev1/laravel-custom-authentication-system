<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{

    /*
     * we could use create as a name for this function
    */
    public function login_page() {
        return view('auth.login');
    }

    /*
     * we could use store as a name for this function
    */
    public function login_user(Request $request) {
        $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required']
        ]);
    }

}
