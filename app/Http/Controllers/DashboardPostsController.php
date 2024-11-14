<?php

namespace App\Http\Controllers;


use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::all();

        return view('admin.pages.table', [
            'title' => 'Admin Page',
            'dash' => 'Dashboard',
            'post' => $posts
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
    public function store(TodoRequest $request)
    {

        $validator = $request->validated();



        $validator['author'] = $request->author;
        $validator['content'] = $request->content;
        $validator['slug'] = Str::slug($request->title);

        $file = $request->file('image');
        $year = Carbon::now()->format('Y');

        $validator['image'] = $file ? $file->storeAs("posts-image/$year", Uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        Post::create($validator);

        return redirect('/dashboard')->with('success', 'Berhasil Menambahkan Postingan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('posts.show', [
            'title' => 'Detail Post',
            'posts' => $post
        ]);
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
    public function update(TodoRequest $request, $id)
    {

        $validator = $request->validated();

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

        return redirect('/dashboard')->with('success', 'Update Postingan berhasil!');
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
