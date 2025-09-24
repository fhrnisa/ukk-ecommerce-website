<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {
        // proses simpan user
    }

     public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // proses simpan user
    }
}
