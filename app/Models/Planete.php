<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planete extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'planete_type_id',
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

    public function planeteType()
    {
        return $this->belongsTo(PlaneteType::class);
    }

    public function satellites()
    {
        return $this->hasMany(Satellite::class);
    }
}
