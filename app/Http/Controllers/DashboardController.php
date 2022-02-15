<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $grades = Grade::all();

        return view('dashboard', [
            'grades' => $grades
        ]);
    }
}

