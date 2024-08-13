<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login', [
            'title' => 'Login Page'
        ]);
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            if (Auth::user()->role === 'admin') {
                return redirect()->route('dashboard');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        } else {
            return back()->with('error', 'Username or Password Invalid');
        }
    }
    public function register()
    {
        return view('register', [
            'title' => 'Register Page'
        ]);
    }

    public function registerPost(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|min:4',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required'

        ]);

        User::create($validator);

        return redirect()->back()->with('success', 'Create Register Succesfully');
    }
    public function logout(Request $request)
    {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect()->route('login');
    }

    public function profile()
    {
        return view('profile', [
            'title' => 'Edit Profile'
        ]);
    }
}
