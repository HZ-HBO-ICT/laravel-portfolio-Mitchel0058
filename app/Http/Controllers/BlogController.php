<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show()
    {
        $blogposts = \App\Models\Blogposts::latest('date_added')->get();

        return view('blog', [
            'blogposts' => $blogposts
        ]);
    }
}
