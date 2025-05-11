<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Celeb; 
use App\Models\Movie; 
class MovieDetailController extends Controller
{
    

    public function index()
    {
        $movies = movie::all();
        return view('frontend.moviedetail.index')->with('movies', $movies);
    }
    public function show(string $id)
    {
        $movies = Movie::findOrFail($id);
        return view('frontend.moviedetail.index', compact('movies'));

    }
    public function edit(string $id)
    {
        $movies = movie::find($id);
        return view('frontend.moviedetail.index')->with('movies', $movies);
    }
}
