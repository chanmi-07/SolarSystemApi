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
        'planete_id',
    ];

    public function planete()
    {
        return $this->belongsTo(Planete::class);
    }
}
