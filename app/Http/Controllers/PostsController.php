<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    function show($post)
    {
        $posts = [
            'schoolsafari' => 'schoolsafari post',
            'student-maakt-website' => 'student maakt website',
            'studiekeuze-en-programmeerervaring' => 'studiekeuze en programmeerervaring',
        ];

        // This does not work atm ↓
        if (!array_key_exists($post, $posts)) {
            abort(404, 'Page not found AAAAAAAAAAAAAa');
        }
        // You get the basic 404 page

        return view('posts/' . $post);
    }
}
