<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTableAsteroidType extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->string('name');
        // $table->json('description');

        DB::table('asteroid_types')->insert
        ([
            [
                'name' => 'C (condrita)',
                'description' => 
                '[
                    "Son los más comunes.",
                    "Probablemente se componen de rocas de arcilla y silicato, y tienen apariencia oscura. Se encuentran entre los objetos más antiguos del Sistema Solar."
                ]',
            ],
            [
                'name'=> 'S (silicato)',
                'description' =>
                '[
                    "Se componen de materiales de silicato y níquel-hierro"
                ]',
            ],
            [
                'name'=> 'M (metálico)',
                'description' =>
                '[
                    "Las diferencias en composición de los asteroides están relacionadas con cuán lejos del Sol se formaron.",
                    "Algunos experimentaron altas temperaturas después de formarse y derretirse parcialmente, con el hierro hundiéndose hacia el centro y forzando la lava basáltica (volcánica) a la superficie."
                ]',
            ],
        ]);
    }
}
