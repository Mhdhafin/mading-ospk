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

    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        $data = $request->validated();

        // $profile = Profile::find($id);
        $profile->id;

        if ($data->hasFile('image')) {
            if ($data->oldImage) {
                Storage::disk('public')->delete($data->oldImage);
            }
            $year = Carbon::now()->format('Y');
            $file = $request->file('image');
            $data['image'] = $file ? $file->storeAs("image-profile/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;
        }

        $profile->update($data);

        toast('Profile Edited', 'success');

        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $id = Profile::find($id);


        if ($id->image) {
            Storage::disk('public')->delete($id->image);
        }
        $id->delete();


        toast('Profile Deleted', 'success');

        return redirect()->back();
    }
}
