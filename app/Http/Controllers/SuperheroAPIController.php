<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superheroe;
use App\Models\Gender;
use App\Models\Universe;

class SuperheroAPIController extends Controller
{
    public function index(){
        $superheroes = Superheroe::with(['gender', 'universe'])->get();
        return response()->json($superheroes);
    }

    public function show($id){
        $superheroe = Superheroe::where('id', $id)->get();
        return response()->json($superheroe);
    }
}
