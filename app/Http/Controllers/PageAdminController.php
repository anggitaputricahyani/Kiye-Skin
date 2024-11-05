<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageAdminController extends Controller
{
    // Method to display the admin page
    public function index()
    {
        return view('admin.pageadmin'); // Ensure the view file is located at resources/views/admin/pageadmin.blade.php
    }

    // Method to handle the form submission
    public function handleForm(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication was successful, redirect to admin page
            return redirect()->route('page.admin')->with('success', 'Login successful!');
        }

        // If authentication fails, redirect back with an error message
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
}
