<?php

namespace Database\Seeders;

use App\Models\Satellite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTablePlutonSatellite extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satellites')->insert
        ([
            [
                'planete_id' => 12,
                'type' => 'Satélite natural',
                'name' => 'Caronte',
                'description' => 'La superficie de Caronte parece estar dominada por el hielo de agua. Asimismo parece no tener atmósfera. En 2007, las observaciones llevadas a cabo por el Observatorio Gemini de hidratos de amoníaco y cristales de agua en la superficie de Caronte sugirieron la presencia de criogéiseres activos.',
                'diameter' => '1208 km',
                'mass' => '(1,52±0,06)x10^21 kg',
                'webp' => 'pluto/satelites/caronte.webp',
                'png' => 'pluto/satelites/caronte.png'
            ],
            [
                'planete_id' => 12,
                'type' => 'Satélite natural',
                'name' => 'Nix',
                'description' => 'Nix es un satélite del sistema binario constituido por Plutón y Caronte. Fue descubierto a finales de 2005 junto con Hidra y el telescopio espacial Hubble confirmó su presencia en febrero de 2006.',
                'diameter' => '42x36 km',
                'mass' => '5x10^16 - 2x10^18 kg',
                'webp' => 'pluto/satelites/nix.webp',
                'png' => 'pluto/satelites/nix.png'
            ],
            [
                'planete_id' => 12,
                'type' => 'Satélite natural',
                'name' => 'Estigia',
                'description' => 'Estigia (fue denominado provisionalmente S/2012 P 1 y también como S/2012 (134340) 1 o P5) es un pequeño satélite natural del planeta enano Plutón, cuyo descubrimiento fue anunciado el 11 de julio de 2012 por Mark R. Showalter.',
                'diameter' => '10 - 25 km',
                'mass' => '7 500 000 000 000 000 kilogramos',
                'webp' => 'pluto/satelites/estigia.webp',
                'png' => 'pluto/satelites/estigia.png'
            ],
            [
                'planete_id' => 12,
                'type' => 'Satélite natural',
                'name' => 'Cerbero',
                'description' => 'El satélite orbita en la región entre Nix e Hydra y efectúa una órbita completa de Plutón cada casi 31 días terrestres.',
                'diameter' => '13-34 km',
                'mass' => '1,65x10^16 kg',
                'webp' => 'pluto/satelites/cerbero.webp',
                'png' => 'pluto/satelites/cerbero.png'
            ],
            [
                'planete_id' => 12,
                'type' => 'Satélite natural',
                'name' => 'Hidra',
                'description' => 'Se encuentra en el plano orbital de Caronte y su forma es altamente irregular y tiene un tamaño de 55x40 km.',
                'diameter' => '5x10^16 - 2x10^18 kg',
                'mass' => '55x40 km',
                'webp' => 'pluto/satelites/hidra.webp',
                'png' => 'pluto/satelites/hidra.png'
            ]
        ]);
    }
}
