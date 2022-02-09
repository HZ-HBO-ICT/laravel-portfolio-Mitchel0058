<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    function show($post) {
        $posts = [
            'schoolsafari' => 'schoolsafari post',
            'student-maakt-website' => 'student maakt website',
            'studiekeuze-en-programmeerervaring' => 'studiekeuze en programmeerervaring',
        ];

        if(!array_key_exists($post, $posts)) {
            abort(404, 'Page not found AAAAAAAAAAAAAa');
        }

        return view('posts/' . $post);
    }
}
