<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStructureRequest;
use App\Http\Requests\UpdateStructureRequest;
use App\Models\Structure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StructureController extends Controller
{
    public function index()
    {
        return view('admin.pages.structure');
    }


    public function store(StoreStructureRequest $request)
    {
        $data = $request->validated();

        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file ? $file->storeAs("image-Structure/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        Structure::create($data);

        return redirect()->back();
    }

    public function edit() {}

    public function update(UpdateStructureRequest $request, Structure $structure, $id)
    {
        $data = $request->validated();

        $data = $structure->$id;

        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file ? $file->storeAs("image-Structure/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        $data->save();

        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $id = Structure::find($id);


        if ($id->image) {
            Storage::disk('public')->delete($id->image);
        } else {
            $id->delete();
        }

        return redirect()->back();
    }
}
