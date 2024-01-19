<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'planet_type_id',
        'description',
        'orbital_distance',
        'orbital_period',
        'radius',
        'volume',
        'diameter',
        'mass',
        'density',
        'gravity',
        'temperature',
        'atmosphere',
        'webp',
        'png'
    ];

    public function planetType()
    {
        return $this->belongsTo(PlanetType::class);
    }

    public function satellites()
    {
        return $this->hasMany(Satellite::class);
    }
}
