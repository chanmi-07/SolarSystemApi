<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satellite extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'name',
        'description',
        'diameter',
        'mass',
        'webp',
        'png',
        'planet_id',
    ];

    public function planet()
    {
        return $this->belongsTo(Planet::class);
    }
}
