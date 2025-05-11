<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Celeb; 
use App\Models\Movie; 
class CelebsController extends Controller
{
    public function index()
    {
        $celebs = celeb::all(); 
        return view('frontend.celeb.index', ['celebs' => $celebs]); 
    }
}
