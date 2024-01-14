<?php

namespace Database\Seeders;

use App\Models\Satellite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTableErisSatellite extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satellites')->insert
        ([
            [
                'planete_id' => 13,
                'name' => 'Disnomia',
                'description' => 'El satélite parece cerca de sesenta veces menos luminoso que el propio planeta enano al que orbita, y hasta 500 veces más débil en el espectro visible.',
                'diameter' => '815 km',
                'mass' => '--',
                'webp' => 'eris/satelites/disnomia.webp',
                'png' => 'eris/satelites/disnomia.png'
            ]
        ]);
    }
}
