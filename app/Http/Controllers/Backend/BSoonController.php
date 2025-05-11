<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Soon;

class BSoonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soons = soon::all();
        return view('backend.setting.soon.index')->with('soons', $soons);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.setting.soon.create');
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
        soon::create($input,$validated);
        return redirect('/bsoon')->with('flash_message',' Your CS-Movie Added! Successfully!!');
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
        $soons = soon::find($id);
        return view('backend.setting.soon.edit')->with('soons', $soons);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $soons = soon::find($id);
        $input = $request->input();
        //dd($input);
        $soons->update($input);
        return redirect('/bsoon')->with('info',' Your soon Updated! Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        soon::destroy($id);
        return redirect('/bsoon')->with('error',' Your soon Deleted! Successfully!!');
    }
}
