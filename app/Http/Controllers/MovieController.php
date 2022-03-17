<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    //Movies

    public function index()
    {
        $movies = Movie::all();
        dd($movies);

        return view('movies.index');
    }
}
