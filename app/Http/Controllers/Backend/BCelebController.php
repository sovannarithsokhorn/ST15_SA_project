<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Celeb;
use App\Models\Movie;
class BCelebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $celebs = celeb::all();
        return view('backend.setting.celebs.index')->with('celebs', $celebs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.setting.celebs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            
        ]);

        $input = $request->all();
        //dd($input);
        celeb::create($input,$validated);
        return redirect('/bceleb')->with('flash_message',' Your Celeb Added! Successfully!!');
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
        $celebs = celeb::find($id);
        return view('backend.setting.celebs.edit')->with('celebs', $celebs);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'picture' => 'nullable'  
        ]);

        $celebs = celeb::find($id);
        $input = $request->input();
        //dd($input);
        $celebs->update($input,$validated);
        return redirect('/bceleb')->with('info',' Your Celeb Updated! Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        celeb::destroy($id);
        return redirect('/bceleb')->with('error',' Your Celeb Deleted! Successfully!!');
    }
}
