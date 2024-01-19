<?php

namespace Database\Seeders;

use App\Models\Satellite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederTableTierraSatellite extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Satellite::create
        ([
            'name' => 'Luna',
            'planet_id' => 3,
            'description' => 'La Luna es el único satélite natural de la Tierra. Se encuentra en relación síncrona con la Tierra, siempre mostrando la misma cara hacia el planeta. El hemisferio visible está marcado con oscuros mares lunares de origen volcánico entre las brillantes montañas antiguas y los destacados astroblemas.',
            'diameter' => '3474 km',
            'mass' => '7.3477 x 10^22 kg',
            'webp' => 'tierra/satelites/luna.webp',
            'png' => 'tierra/satelites/luna.png'
        ]);
    }
}
