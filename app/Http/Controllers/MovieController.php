<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //Movies

    public function index()
    {
        return view('movies.index');
    }
}
