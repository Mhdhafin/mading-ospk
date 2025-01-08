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
        $profile = Profile::get();

        return view('admin.pages.profile', compact('profile'));
    }

    public function create()
    {
        //
    }


    public function store(UpdateProfileRequest $request)
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

        $profile = Profile::first();

        $data = $request->validated();



        $year = Carbon::now()->format('Y');
        $file = $request->file(key: 'image');
        $data['image'] = $file?->storeAs("image/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public');

        // $year = Carbon::now()->format('Y');
        // $file = $request->file(key: 'hero_image');
        // $data['hero_image'] = $file?->storeAs("hero_image/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public');

        Profile::where('id', $profile->id)->update($data);

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
