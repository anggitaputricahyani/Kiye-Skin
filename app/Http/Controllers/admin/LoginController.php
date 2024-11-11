<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('page.admin');
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['email' => 'Access denied.']);
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function showLoginForm()
    {
        return view('admin.loginadmin');
    }


}