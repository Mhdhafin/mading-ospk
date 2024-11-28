<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function telusuri(Request $request, Post $post)
    {
        $query = $request->input('query');
        $result = Post::where('title', 'like', "%" . $query . "%")
            ->orWhere('content', 'like',  "%" . $query . "%")
            ->get();

        // $post = Post::where()->first();

        $recentPosts = Post::latest()->take(5)->get();

        return view('pages.details', compact('post', 'result', 'query', 'recentPosts'));
    }
}
