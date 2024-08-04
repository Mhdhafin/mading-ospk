<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'title' => 'Admin Page'
        ]);
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:4',
            'username' => 'required|min:5',
            'password' => 'required|numeric',
            'email' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:1048'
        ]);

        $user = User::findOrFail($id);

         //check if image is uploaded
         if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('user/profile', $image->hashName());

            //delete old image
            Storage::delete('user/profile/'.$user->image);

            //update product with new image
            $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'image' => $image->hashName()
            ]);

        }

        return redirect()->route('edit')->with('status', 'Profile berhasil di edit');

    }
}
