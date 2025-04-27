<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    private $adminUsername = 'OmPrakash';
    private $adminPassword = 'EriK';

    public function showLoginForm()
    {
        return view('admin-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if ($credentials['username'] === $this->adminUsername && $credentials['password'] === $this->adminPassword) {
            Session::put('is_admin', true); 
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid username or password.');
    }

    public function dashboard()
{
    if (!Session::get('is_admin')) {
        return redirect()->route('admin.login')->with('error', 'Please login first.');
    }

    $reports = \App\Models\Report::all(); 

    return view('admin-dashboard', compact('reports')); 
}


    public function logout()
    {
        Session::forget('is_admin');
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }
}
