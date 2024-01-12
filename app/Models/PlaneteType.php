<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaneteType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'characteristics'
    ];

    public function planetes()
    {
        return $this->hasMany(Planete::class);
    }
}
