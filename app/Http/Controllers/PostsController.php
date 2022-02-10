<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('posts/' . $post->slug);
    }
}
