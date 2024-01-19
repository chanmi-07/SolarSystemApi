<?php

namespace Database\Seeders;

use App\Models\Satellite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTableMarteSatellite extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satellites')->insert
        ([
            [
                'name' => 'Fobos',
                'planet_id' => 4,
                'description' => 'Fobos es un pequeño satélite, de forma irregular, cuyo radio medio es de once kilómetros. Siempre presenta la misma cara a Marte, debido al anclaje por marea ejercido por el planeta. Orbita a unos 6000 kilómetros de la superficie marciana, lo que le convierte en el satélite más próximo a su planeta del sistema solar. Estas fuerzas de marea crean una desaceleración en Fobos, perdiendo este velocidad orbital, lo que ocasionará su colisión con Marte dentro de unos 50 a 100 millones de años, o bien su desintegración y formación de un anillo alrededor del planeta.',
                'diameter' => '22,2 km',
                'mass' => '1,08 x 10^16 kg',
                'webp' => 'marte/satelites/fobos.webp',
                'png' => 'marte/satelites/fobos.png'
            ],
            [
                'name' => 'Deimos',
                'planet_id' => 4,
                'description' => 'Deimos es el más pequeño y externo de los dos satélites de Marte. En rotación síncrona con el planeta, recorre una órbita casi circular, muy próxima al plano ecuatorial marciano, en 30,3 horas: un periodo ligeramente superior a la rotación del planeta rojo. Es de forma irregular. Tiene un diámetro medio de 12,4 km, una masa estimada de 1,4762x1015 kg y una densidad media de 1471 kg/m³. Su composición, supuesta similar a la de los asteroides de tipo D3 y los núcleos cometarios extintos.',
                'diameter' => '12,4 km',
                'mass' => '1,8 x 10^15 kg',
                'webp' => 'marte/satelites/deimos.webp',
                'png' => 'marte/satelites/deimos.png'
            ]
        ]);
    }
}
