<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;



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
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {


            $request->session()->regenerate();

            // Alert()->success('SuccessAlert', 'Selamat Datang ' . $user->auth()->name);
            // Alert::success('Selamat Datang', $user);


            return redirect('/dashboard');
        }

        // toast('Login Failed', 'error');

        return redirect()->back();
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
    public function logout(Request $request, $id)
    {

        $user = User::findOrFail($id);
        Auth::logout($user);

        $request->session()->invalidate();

        return redirect()->route('login');
    }
}
