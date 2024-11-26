<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHeroRequest;
use App\Http\Requests\UpdateHeroRequest;
use App\Models\Hero;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        return view('admin.pages.hero', compact('hero'));
    }

    public function store(StoreHeroRequest $request, Hero $hero)
    {
        $hero = Hero::first();

        $data = $request->validated();

        $year = Carbon::now()->format('Y');
        $file = $request->file(key: 'hero_image');
        $data['hero_image'] = $file?->storeAs("hero_image/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public');

        Hero::where('id', $hero->id)->update($data);

        toast('Hero Edited', 'success');

        return redirect()->back();
    }

    public function edit() {}

    public function update(UpdateHeroRequest $request)
    {
        $data = $request->validated();

        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file ? $file->storeAs("image-Hero/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        $data->save();

        toast('Hero Edited', 'success');

        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $id = Hero::find($id);


        if ($id->image) {
            Storage::disk('public')->delete($id->image);
        }

        $id->delete();

        // toast('Hero Deleted', 'success');

        return redirect()->back();
    }
}
