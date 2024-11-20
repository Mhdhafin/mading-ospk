<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
=======

>>>>>>> dd53dfd35a88b3d43fbdfd694066c6170dc7622e
        $profile = Profile::latest()->get();
        return view('admin.pages.profile', compact('profile'));
    }

    public function create()
    {
        //
    }


    public function store(StoreProfileRequest $request)
    {
        $data = $request->validated();

        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file ? $file->storeAs("image-profile/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        Profile::create($data);

        toast('Profile Added', 'success');

        return redirect()->back();
    }

    public function edit() {}

    public function update(UpdateProfileRequest $request, $id)
    {
        $data = $request->validated();

        $profile = Profile::where($id, 'id')->first();

        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file ? $file->storeAs("image-profile/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        $data->save();

        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $id = Profile::find($id);


        if ($id->image) {
            Storage::disk('public')->delete($id->image);
        } else {
            $id->delete();
        }

        toast('Profile Deleted', 'success');

        return redirect()->back();
    }
}
