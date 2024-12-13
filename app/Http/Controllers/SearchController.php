<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{


    public function index()
    {
        // $posts = Post::paginate(3);

        // return view('pages.search', compact('posts'));
    }
    public function telusuri(Request $request, Post $post)
    {
        $cari = $request->input('cari');
        $post = Post::where('title', 'LIKE', "%$cari%")
            ->orWhere('content', 'LIKE',  "%$cari%")
            ->get();

        // $post = Post::where()->first();

        $recentPosts = Post::latest()->take(5)->get();

        return view('pages.search', compact('post', 'recentPosts'));
    }
}
