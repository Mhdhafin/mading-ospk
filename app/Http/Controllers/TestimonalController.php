<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\StoreTestimonalRequest;
use App\Http\Requests\UpdateTestimonalRequest;
use App\Models\Testimonal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonalController extends Controller
{
    public function index()
    {

        $testimonal = Testimonal::latest()->get();
        return view('admin.pages.testimonal', compact('testimonal'));
    }

    public function store(StoreTestimonalRequest $request)
    {
        $data = $request->validated();

        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file ? $file->storeAs("image-Testimonal/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        if (!$data['image']) {
            $data['image'] =  './assets/img/profile.jpeg';
        }

        Testimonal::create($data);

        toast('Testimonal Created', 'success');

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
        }

        $id->delete();

        toast('Testimonal Deleted', 'success');

        return redirect()->back();
    }
}
