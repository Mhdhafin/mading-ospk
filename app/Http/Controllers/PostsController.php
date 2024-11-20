<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.pages.posts', compact('posts'));
    }


    public function store(StorePostsRequest $request)
    {

        $data = $request->validated();

        $data['slug'] = Str::slug($data['title']);

        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file ? $file->storeAs("image-posts/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;


        Post::create($data);

        toast('Posts Added', 'success');

        return redirect()->back();
    }

    public function show(Post $post)
    {
        return view('pages.details', compact('post'));
    }

    public function edit() {}


    public function update(UpdatePostsRequest $request, Post $post, $id)
    {
        $data = $request->validated();

        $data = $post->$id;


        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file ? $file->storeAs("image-Posts/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        $data->save();

        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $id = Post::find($id);


        if ($id->image) {
            Storage::disk('public')->delete($id->image);
        }

        $id->delete();

        toast('Posts Deleted', 'success');

        return redirect()->back();
    }
}
