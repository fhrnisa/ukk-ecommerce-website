<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    // REGISTER
    public function signup(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:100',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:6|confirmed',
            'no_hp'     => 'nullable|string|max:20',
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'no_hp'    => $request->no_hp,
        ]);

        return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

     public function showLoginForm()
    {
        return view('auth.login');
    }

    // LOGIN
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Arah ke mode admin
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        // Arah ke mode user
        return redirect()->route('welcome');
    }

        return back()->withErrors([
        'email' => 'Email atau password salah.',
    ])->onlyInput('email');
}

    // LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome')->with('success', 'Anda telah logout.');
    }
}
