<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        return view('posts.index', [
            'title' => 'Postingan',
            'post' => $posts
        ]);
    }

    public function show(Post $post)
    {

        return view('posts.show', [
            'title' => 'Details Posts',
            'post' => $post
        ]);
    }
}
