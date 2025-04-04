<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Superheroe;

class Gender extends Model
{
    protected $table = "genders";
    protected $fillable = ['name'];
    
    public function superheroes(){
    return $this->hasMany(Superheroe::class);
    }
}