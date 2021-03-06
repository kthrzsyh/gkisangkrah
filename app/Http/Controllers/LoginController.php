<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        // dd(Auth());
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin');
        }
        return redirect()->back()->with(['Failed' => 'Username tidak ada / Password Salah!']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
