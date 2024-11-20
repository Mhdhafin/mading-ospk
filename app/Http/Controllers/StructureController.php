<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStructureRequest;
use App\Http\Requests\UpdateStructureRequest;
use App\Models\Structure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Block\Heading;

class StructureController extends Controller
{
    public function index()
    {
        $structure = Structure::with('employees')->get();

        return view('admin.pages.structure', compact('structure'));
    }


    public function store(StoreStructureRequest $request)
    {

        $data = $request->validated();

        $data = Structure::create([
            'title' =>  $request->title
        ]);

        foreach ($request->employees as $employee) {
            $data->employees()->create($employee);
        }

        toast('Structure Added', 'success');

        return redirect()->back();
    }

    public function edit() {}

    public function update(UpdateStructureRequest $request, Structure $structure, $id)
    {
        $data = $request->validated();

        $data->update([
            'title' =>  $request->title
        ]);

        $data->employees()->delete();
        foreach ($request->employees as $employee) {
            $data->employees()->create($employee);
        }

        toast('Structure Edited', 'success');

        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $id = Structure::find($id);


        if ($id->image) {
            Storage::disk('public')->delete($id->image);
        }

        $id->delete();



        toast('Structure Deleted', 'success');

        return redirect()->back();
    }
}
