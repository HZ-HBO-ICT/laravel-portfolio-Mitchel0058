<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsideController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {

        return view('aside');
    }
}
