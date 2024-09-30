<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{
    public function show()
    {
        return view('success-story');
    }
}
