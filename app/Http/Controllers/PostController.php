<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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


        $image = $request->file('image');
        $filename = date('Y-m-d') . $image->getClientOriginalName();
        $path = 'image-posts/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($image));

        $post['title'] = $request->title;
        $post['author'] = $request->author;
        $post['content'] = $request->content;
        $post['image'] = $path;


        Post::create($post);

        return redirect('/dashboard')->with('success', 'Berhasil Menambahkan Postingan!');
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
    public function edit(Post $post)
    {

        return view('posts.edit', [
            'title' => 'Update Post',
            'posts' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:1048'
        ]);

        $post = Post::findOrFail($id);

        // Periksa apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = date('Y-m-d') . $image->getClientOriginalName();
            $path = 'image-posts/' . $filename;

            // Simpan gambar baru
            Storage::disk('public')->put($path, file_get_contents($image));

            // Hapus gambar lama jika ada
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }

            // Simpan path gambar baru di database
            $post->image = $path;
        }

        // Update field lainnya jika ada
        $post->title = $request->input('title'); // Misalnya, mengupdate title
        $post->author = $request->input('author'); // Misalnya, mengupdate author
        $post->content = $request->input('content'); // Misalnya, mengupdate content
        $post->save();

        return redirect()->route('dashboard')->with('success', 'Update Postingan berhasil!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = Post::findOrFail($id);

        Storage::delete($posts->image);

        $posts->delete();


        return redirect('dashboard')->with('status', 'Data Postingan Berhasil di hapus!');
    }
}
