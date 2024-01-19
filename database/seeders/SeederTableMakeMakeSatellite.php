<?php

namespace Database\Seeders;

use App\Models\Satellite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTableMakeMakeSatellite extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satellites')->insert
        ([
            [
                'planet_id' => 12,
                'name' => 'S/2015 (136472)',
                'description' => 'S/2015 (136472) 1, también designado MK2 es el satélite natural de Makemake. Al principio se creía que Makemake era un planeta enano, ubicado en el cinturón de Kuiper, que no tenía satélite.',
                'diameter' => '175 km',
                'mass' => '--',
                'webp' => 'makemake/satelites/s2015136472.webp',
                'png' => 'makemake/satelites/s2015136472.png'
            ]
        ]);
    }
}
