<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        return view('dashboard', [
            'title' => 'Admin Page',
            'dash' => 'Dashboard',
            'post' => $posts
        ]);
    }

    public function edit(User $user)
    {

        $user = Auth::user();

        return view('profile2', [
            'title' => 'User Edit',
            'users' => $user
        ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|min:4',
            'username' => 'required|min:5',
            'password' => 'required|numeric',
            'email' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:1048'
        ]);
        dd($request);
        $user = User::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = date('Y-m-d') . $image->getClientOriginalName();
            $path = 'user-profile/' . $filename;

            Storage::disk('public')->put($path, file_get_contents($image));

            // Hapus image jika ada
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }

            // simpan path gambar di database
            $user->image = $path;
        }

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('edit')->with('status', 'Profile berhasil di edit');
    }
}
