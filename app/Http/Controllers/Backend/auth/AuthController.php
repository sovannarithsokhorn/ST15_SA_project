<?php

namespace App\Http\Controllers\backend\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function index()
    {
        return view('backend.auth.login');
    }

    public function register()
    {
        return view('backend.auth.register');
    }

    public function saveRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'User',
            'language' => 'English',
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            
            // Set persistent login success flag
            $request->session()->put('login_success', true);
            $request->session()->put('login_user_name', Auth::user()->name);

            if (auth()->user()->level === 'Admin') {
                return redirect()->intended('/dashboard');
            }

            return redirect()->intended('/');
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    public function clearLoginAlert(Request $request)
    {
        $request->session()->forget('login_success');
        return response()->noContent();
    }

    public function logout(Request $request)
    {
        // Clear all login notification flags
        $request->session()->forget('login_success');
        $request->session()->forget('login_user_name');

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}