<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateTestimonalRequest;
use App\Models\Testimonal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonalController extends Controller
{
    public function index()
    {
        return view('admin.pages.testimonal');
    }

    public function store(StoreProfileRequest $request)
    {
        $data = $request->validated();

        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file ? $file->storeAs("image-Testimonal/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        Testimonal::create($data);

        return redirect()->back();
    }

    public function edit() {}

    public function update(UpdateTestimonalRequest $request, $id)
    {
        $data = $request->validated();

        $Testimonal = Testimonal::where($id, 'id')->first();

        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file ? $file->storeAs("image-Testimonal/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        $data->save();

        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $id = Testimonal::find($id);


        if ($id->image) {
            Storage::disk('public')->delete($id->image);
        } else {
            $id->delete();
        }

        return redirect()->back();
    }
}
