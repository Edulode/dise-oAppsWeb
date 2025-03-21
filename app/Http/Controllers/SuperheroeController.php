<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superheroe;
use App\Models\Gender;
use App\Models\Universe;


class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superheroe::all();
        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::select('id', 'name')->get();
        $universes = Universe::select('id', 'name')->get();
        
        return view('superheroes.create', compact('genders', 'universes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Superheroe::create([
            'name' => $request->name,
            'real_name' => $request->real_name,
            'universe_id' => $request->universe_id,
            'gender_id' =>  $request->gender_id,
            'picture' => $request->picture,
        ]);
        return redirect()->route('superheroes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superheroe = Superheroe::with('gender','universe')->findOrFail($id);
        return view('superheroes.show', compact('superheroe'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $superheroe = Superheroe::find($id);
        $genders = Gender::select('id', 'name')->get();
        $universes = Universe::select('id', 'name')->get();
        return view('superheroes.edit', compact('superheroe','genders','universes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $superheroe = Superheroe::find($id);
        $superheroe->update([
            'name' => $request->name,
            'real_name' => $request->real_name,
            'universe_id' => $request->universe_id,
            'gender_id' =>  $request->gender_id,
            'picture' => $request->picture,
        ]);
        return redirect()->route('superheroes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $superheroe = Superheroe::find($id);
        $superheroe->delete();
        return redirect()->route('superheroes.index');
    }
}
