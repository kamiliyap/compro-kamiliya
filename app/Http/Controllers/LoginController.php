<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // arahkan ke view login.blade.php
        return view('login');
    }

    public function action(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // jika email dan password benar
        if (Auth::attempt($validate)) {
            return redirect()->intended('admin/dashboard');
        } else {
            return back()->with('loginError', 'Login gagal! Silakan coba lagi.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
