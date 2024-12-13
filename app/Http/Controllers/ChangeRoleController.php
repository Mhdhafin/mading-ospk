<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChangeRoleController extends Controller
{
    public function index()
    {

        $users = User::latest()->get();

        return view('admin.pages.changerole', compact('users'));
    }
}
