<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AdminAuthController extends Controller
{
 public function showLoginForm()
    {
        return view('auth.admin.login');
    }


    public function login(Request $request)
    {
        
        // Validate request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to find admin user
        $user = User::where('email', $request->email)
                    ->where('role', 'admin')
                    ->first();

        // Check if user exists and password matches
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('admin.dashboard'); // Redirect to admin dashboard view
        }

        return back()->withErrors([
            'email' => 'Invalid credentials or not an admin.',
        ])->withInput();
    }

    public function logout(Request $request)
{
    Auth::logout();

    // Invalidate the session and regenerate CSRF token
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('admin.login.view')->with('status', 'Logged out successfully.');
}
}
