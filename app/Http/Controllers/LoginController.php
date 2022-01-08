<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password'=>$request->password
        ];

        if($request->remember)
        {
            Cookie::queue('myCookie', $request->email, 10080);
        }

        if(Auth::attempt($credentials)== true)
        {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Email or Password is not in our credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
