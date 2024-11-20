<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisiMisiRequest;
use App\Http\Requests\UpdateVisiMisiRequest;
use App\Models\VisiMisi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visimisi = VisiMisi::latest()->get();
        return view('admin.pages.visimisi', compact('visimisi'));
    }

    public function store(StoreVisiMisiRequest $request)
    {
        $data = $request->validated();

        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file ? $file->storeAs("image-VisiMisi/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        VisiMisi::create($data);

        toast('Visi Misi Added', 'success');

        return redirect()->back();
    }

    public function edit() {}

    public function update(UpdateVisiMisiRequest $request, VisiMisi $visimisi, $id)
    {
        $data = $request->validated();

        $data = $visimisi->$id;

        $data->save();

        return redirect()->back();
    }

    public function destroy(string $id)
    {

        $id = VisiMisi::find($id);


        $id->delete();

        toast('Visi Misi Deleted', 'success');

        return redirect()->back();
    }
}
