<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonalController extends Controller
{
    public function index()
    {
        return view('admin.pages.testimonal');
    }
}
