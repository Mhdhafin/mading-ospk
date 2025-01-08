<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChangeRoleRequest;
use App\Http\Requests\UpdateChangeRoleRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChangeRoleController extends Controller
{
    public function index()
    {

        $users = User::latest()->get();

        return view('admin.pages.changerole', compact('users'));
    }

    public function store(StoreChangeRoleRequest $request)
    {
        $data = $request->validated();

        User::Create($data);

        toast('Role Created', 'success');

        return back();
    }

    public function update(UpdateChangeRoleRequest $request, $id)
    {

        $data = $request->validated();

        User::where('id', $id)->update($data);

        toast('Role Updated', 'success');

        return redirect()->back();
    }
    public function destroy(string $id)
    {
        $id = User::find($id);

        $id->delete();

        toast('Admin Deleted', 'success');

        return redirect()->back();
    }
}
