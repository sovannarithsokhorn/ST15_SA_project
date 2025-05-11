<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Soon;
use Illuminate\Http\Request;

class SoonController extends Controller
{
    public function index(){
        $soons = Soon::all();
        return view('frontend.soon.index',['soons' => $soons]);
    }
}
