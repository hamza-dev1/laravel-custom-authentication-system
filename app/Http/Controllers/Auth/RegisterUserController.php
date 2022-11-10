<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{

    public function register_page() {
        return view('auth.register');
    }

    public function register_user(Request $request) {
        $request->validate([
            'firstname' => ['required', 'string', 'max:50'],
            'lastname' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:200'],
            'password' => ['required', 'string'],
        ]);
    }
}
