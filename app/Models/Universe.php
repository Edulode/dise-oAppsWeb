<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Superheroe;

class Universe extends Model
{
    protected $fillable = ['name'];

    public function superheroes(){
    return $this->hasMany(Superheroe::class);
    }
}