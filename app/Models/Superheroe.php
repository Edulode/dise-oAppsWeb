<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gender;
use App\Models\Universe;

class Superheroe extends Model
{
    use HasFactory;
    protected $table = "superheroes";
    protected $fillable = [
        'name',
        'real_name',
        'universe_id',
        'gender_id',
        'picture',
    ];
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function universe()
    {
        return $this->belongsTo(Universe::class);
    }

}
