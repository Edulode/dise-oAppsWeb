<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;
use App\Models\Superheroe;

class UniverseAPIController extends Controller
{
    public function index()
    {
        $universes = Universe::all();
        return response()->json($universes);
    }

    public function show($id){
        $universes = Universe::where('id', $id)->with('superheroes')->get();
        return response()->json($universes);
    }


}
