<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Celeb; 
use App\Models\Cooming;

class HomeController extends Controller
{
    public function index(){
        $coomings  = Cooming::all();
        $celebs = Celeb::all(); 
        return view('frontend.home.index', ['celebs' => $celebs],['coomings' => $coomings]); 
    }
}
