<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Celeb; 
use App\Models\Movie; 
class MovieController extends Controller
{
    
    public function index()
    {
        $movies = movie::all(); 
        return view('frontend.movie.index', ['movies' => $movies]); 
    }
    public function show(string $id)
    {
        $movies = Movie::find($id);
        return view('frontend.moviedetail.index', compact('movie'));

    }
}
