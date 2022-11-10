<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\CustomUser as User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginUserController extends Controller
{

    /*
     * we could use create as a name for this function
    */
    public function login_page()
    {
        return view('auth.login');
    }

    /*
     * we could use store as a name for this function
    */
    public function login_user(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required']
        ]);
        $user = User::where('email', '=', $request->email)->first();
        $isPasswordCorrect = Hash::check($request->password, $user->password);

        if ($user && $isPasswordCorrect) {
            Auth::login($user);
            $request->session()->put('userId', $user->id);
            return redirect(RouteServiceProvider::HOME);
        } else {
            return back()->withErrors([
                'password-incorrect' => ['The provided password does not match our records.']
            ]);
        }
    }
}
