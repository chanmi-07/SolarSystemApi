<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTablePlanetTypes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('planet_types')->insert([
            [
                'name' => 'Planetas',
                'description' => 
                '["La NASA indica que un planeta es un objeto astronómico de gran tamaño que gira alrededor de una estrella.",
                "Antes de formarse, los planetas estaban compuestos por discos de gas y polvo que giraban en torno a las estrellas jóvenes. Por acción de la gravedad, fueron atrayendo más gas y polvo dando origen a sus estructuras actuales.",
                "Los planetas se clasifican en dos tipos: terrestres y gaseosos. Los planetas terrestres son aquellos que tienen una superficie sólida, como la Tierra. Los planetas gaseosos son aquellos que tienen una superficie gaseosa, como Júpiter."]',
                'characteristics' =>
                '["Orbitan alrededor del una estrella.", 
                "Son lo suficientemente grandes para tener la gravedad como para formar una estructura esférica.",
                "Su gravedad despeja los objetos de similar tamaño cercanos a su órbita alrededor del Sol."]'
            ],
            [
                'name' => 'Planetas Enanos',
                'description' => 
                '["Los planetas enanos son cuerpos celesten que mantenienen las características de un planeta, pero que no han limpiado su órbita de otros cuerpos celestes.",
                "Pueden encontrarse en el cinturón de asteroides.",
                "La composición de los planetas enanos epende de su lejanía a la estrella. Ceres es gélido y rocoso, podría contener algo de agua. Los planetas más alejados como Plutón son de hielo y roca, pero carecen de agua líquida. Otros más alejados son de hielo casi en su totalidad."]',
                'characteristics' =>
                '["Orbitan alrededor de una estrella.",
                "Son lo suficientemente grandes para tener la gravedad como para formar una estructura esférica.",
                "No es satélite de un planeta ni de otro cuerpo no estelar.",
                "Comparten su órbita con otros cuerpos."]'
            ]
        ]);
    }
}
