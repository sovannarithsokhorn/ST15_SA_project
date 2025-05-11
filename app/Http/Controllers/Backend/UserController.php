<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = user::all();
        return view('backend.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->input();
        //dd($input);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'level' => 'required|in:Admin,User' // Ensure level is provided and valid
        ]);
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level ?? 'User', // Default to 'User' if not provided
            'language' => 'English',
        ]);
       
        return redirect('/user')->with('flash_message',' Your CS-Movie Added! Successfully!!');
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
        $users = user::find($id);
        return view('backend.user.edit')->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = user::find($id);
        $input = $request->input();
        //dd($input);
        $users->update($input);
        return redirect('/user')->with('info',' Your user Updated! Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        user::destroy($id);
        return redirect('/user')->with('error',' Your user Deleted! Successfully!!');
    }
}
