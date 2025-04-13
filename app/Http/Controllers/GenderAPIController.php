<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\Superheroe;

class GenderAPIController extends Controller
{
    public function index(){
        $genders = Gender::all();
        return response()->json($genders);
    }

    public function show($id){
        $genders = Gender::where('id', $id)->with('superheroes')->get();
        return response()->json($genders);
    }
}
