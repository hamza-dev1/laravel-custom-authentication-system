<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\CustomUser;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{

    public function register_page() {
        return view('auth.register');
    }

    public function register_user(Request $request) {
        $request->validate([
            'firstname' => ['required', 'string', 'max:50'],
            'lastname' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:200', 'unique:custom_users'], // check also for uniqueness of email
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user = CustomUser::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $request->session()->flash('message', 'You account created successfully.');
        Auth::login($user); // perform login for every new user

        return redirect(RouteServiceProvider::HOME);
    }
}
