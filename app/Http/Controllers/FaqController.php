<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function show()
    {

        $posts = Faq::all();

        return view('faq', [
            'posts' => $posts
        ]);
    }
}
