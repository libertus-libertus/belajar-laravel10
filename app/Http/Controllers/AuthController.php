<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // login
    public function login() {
        return view('auth.login');
    }

    // authenticate
    public function authenticated(Request $request) {
        // validasi
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // credentials
        $credentials = $request->only('email', 'password');

        // cek apakah ada user yang data terdaftar di database
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        // error
        return back()->withErrors([
            'loginError' => 'Email atau password salah!'
        ]);
    }

    // logout
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
