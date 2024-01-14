<?php

namespace Database\Seeders;

use App\Models\Satellite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTableHaumeaSatellite extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satellites')->insert
        ([
            [
                'planete_id' => 11,
                'name' => 'Namaka',
                'description' => 'Namaka, también conocido como Haumea II, es el menor y más interior de los dos satélites conocidos del planeta enano Haumea.',
                'diameter' => '170 km',
                'mass' => '--',
                'webp' => 'haumea/satelites/namaka.webp',
                'png' => 'haumea/satelites/namaka.png'
            ],
            [
                'planete_id' => 11,
                'name' => "Hi'iaka",
                'description' => "Hi'iaka, también conocido como Haumea I, es el mayor y más exterior de los dos satélites conocidos del planeta enano Haumea.",
                'diameter' => '310 km',
                'mass' => '--',
                'webp' => "haumea/satelites/hiiaka'webp",
                'png' => "haumea/satelites/hi'iaka.png"
            ]
        ]);
    }
}
