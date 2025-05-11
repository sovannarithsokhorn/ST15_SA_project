<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class BMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = movie::all();
        return view('backend.setting.movie.index')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.setting.movie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'duration' => 'required',
            
        ]);

        $input = $request->all();
        //dd($input);
        movie::create($input,$validated);
        return redirect('/movie')->with('flash_message',' Your Movie Added! Successfully!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $movies = movie::find($id);
        return view('backend.setting.movie.edit')->with('movies', $movies);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'duration' => 'required|string|max:50',
            'picture' => 'nullable',
            'description' => 'nullable|string',
        ]);

        $movies = movie::find($id);
        $input = $request->input();
        $movies->update($validated);
        return redirect('/movie')->with('info',' Your Movie Updated! Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        movie::destroy($id);
        return redirect('/movie')->with('error',' Your Movie Deleted! Successfully!!');
    }
}
