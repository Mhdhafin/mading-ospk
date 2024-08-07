<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'title' => 'Postingan',
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create', [
            'title' => 'Create Post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = $request->validate([
            'title' => 'required|min:4|unique:posts,title',
            'author' => 'required|min:4',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:1048'
        ]);




        $image = null;
        if ($request->HashFile('image')) {
            $file = $request->file('image');
            $filename = Str::slug($request->title) . '.' . $file->getClientOriginalName();
            $path = $file->storeAs('posts-ospk/' . $filename);
            $image = $path;
        }

        $validator['image'] = $image;
        $validator['slug'] = Str::slug($request->title);

        dd($validator);

        Post::create($validator);

        return redirect('/dashboard')->with('success', 'Berhasil Menambahkan Postingan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
