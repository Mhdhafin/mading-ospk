<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Authlayouts.login', [
            'title' => 'Login Page'
        ]);
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {


            $request->session()->regenerate();
            return redirect('/dashboard');
        } else {
            return back()->with('error', 'Username or Password Invalid');
        }
    }
    public function register()
    {
        return view('Authlayouts.register', [
            'title' => 'Register Page'
        ]);
    }

    public function registerPost(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:4',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required'

        ]);

        $validate['name'] = $request->name;
        $validate['username'] = $request->username;
        $validate['email'] = $request->email;
        $validate['password'] = bcrypt($validate['password']);


        User::create($validate);

        return redirect()->back()->with('success', 'Create Register Succesfully');
    }
    public function logout(Request $request)
    {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect()->route('login');
    }
}
