<?php

namespace Database\Seeders;

use App\Models\Satellite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTableUranoSatellite extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satellites')->insert
        ([
            [
                'planet_id' => 7,
                'name' => 'Cordelia',
                'description' => 'Fue descubierto por Richard J. Terrile a partir de las imágenes tomadas por la Voyager 2 el 21 de enero de 1986, y recibió la designación temporal S/1986 U 7, también se designa Urano VI. No se volvió a detectar hasta que el telescopio espacial Hubble lo observó nuevamente en 1997.',
                'diameter' => '40,2 km',
                'mass' => '4,4x10^16 kg',
                'webp' => 'urano/satelites/cordelia.webp',
                'png' => 'urano/satelites/cordelia.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Ofelia',
                'description' => 'Fue descubierto por Richard J. Terrile a partir de las imágenes tomadas por la sonda espacial Voyager 2 el 21 de enero de 1986, y recibió la designación temporal S/1986 U 8. También se designa Urano VII. El satélite no fue detectado nuevamente hasta que el telescopio espacial Hubble lo observó nuevamente en 2003.',
                'diameter' => '21,4 km',
                'mass' => '5,3x10^16 kg',
                'webp' => 'urano/satelites/ofelia.webp',
                'png' => 'urano/satelites/ofelia.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Bianca',
                'description' => 'Bianca es un satélite natural de Urano. Fue descubierto a partir de imágenes tomadas por la sonda espacial Voyager 2 el 23 de enero de 1986, y le fue dada la designación temporal S/1986 U 9, aunque también se designa Urano VIII.',
                'diameter' => '44,4 km',
                'mass' => '9,2x10^16 kg',
                'webp' => 'urano/satelites/bianca.webp',
                'png' => 'urano/satelites/bianca.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Crésida',
                'description' => 'Crésida (en inglés: Cressida) es un satélite interior de Urano. Fue descubierto a partir de imágenes tomadas por la sonda espacial Voyager 2 el 9 de enero de 1986, y recibió la designación temporal S/1986 U 3.',
                'diameter' => '79.6 km',
                'mass' => '3x4^20 kg',
                'webp' => 'urano/satelites/cresida.webp',
                'png' => 'urano/satelites/cresida.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Desdémona',
                'description' => 'Desdémona es un satélite natural de Urano. Fue descubierto el 13 de enero de 1986 por la sonda espacial Voyager 2 y su designación provisional fue S/1986 U 6',
                'diameter' => '64 km',
                'mass' => '1x8^18 kg',
                'webp' => 'urano/satelites/desdemona.webp',
                'png' => 'urano/satelites/desdemona.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Julieta',
                'description' => 'Julieta es un satélite natural de Urano. Fue descubierto el 3 de enero de 1986 por la sonda espacial Voyager 2 y su designación provisional fue S/1986 U 2.',
                'diameter' => '94 km',
                'mass' => '5x6^18 km',
                'webp' => 'urano/satelites/julieta.webp',
                'png' => 'urano/satelites/julieta.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Porcia',
                'description' => 'Porcia es un satélite natural de Urano. Fue descubierto el 3 de enero de 1986 a través de las imágenes enviadas por la sonda espacial Voyager 2 y su designación provisional fue S/1986 U 1.',
                'diameter' => '135 km',
                'mass' => '1x7^18 kg',
                'webp' => 'urano/satelites/porcia.webp',
                'png' => 'urano/satelites/porcia.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Rosalinda',
                'description' => 'Rosalinda es un satélite natural de Urano. Fue descubierto el 13 de enero de 1986 por la sonda Voyager 2 y su designación provisional fue S/1986 U 4.',
                'diameter' => '72 km',
                'mass' => '2x5^18 kg',
                'webp' => 'urano/satelites/rosalinda.webp',
                'png' => 'urano/satelites/rosalinda.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Cupido',
                'description' => 'Es el más pequeño de los satélites interiores de Urano con sólo 18 km de diámetro. Esta superficie y su color oscuro hizo que fuera demasiado débil para ser detectado por la sonda Voyager 2 durante su paso por Urano en 1986.',
                'diameter' => '17,8 km',
                'mass' => '3,8x10^15 kg',
                'webp' => 'urano/satelites/cupido.webp',
                'png' => 'urano/satelites/cupido.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Belinda',
                'description' => 'Belinda es un satélite natural de Urano. Fue descubierto el 13 de enero de 1986 por la sonda Voyager 2 y su designación provisional fue S/1986 U 5.',
                'diameter' => '81 km',
                'mass' => '3x6^18 kg',
                'webp' => 'urano/satelites/belinda.webp',
                'png' => 'urano/satelites/belinda.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Perdita',
                'description' => 'Perdita orbita entre Belinda y Puck. Las observaciones del Hubble demuestran que no sigue directamente las Leyes de Kepler en su movimiento alrededor de Urano. En cambio, está claramente atrapado en una resonancia orbital de 43:44 con la cercana Belinda.',
                'diameter' => '20 km',
                'mass' => '--',
                'webp' => 'urano/satelites/perdita.webp',
                'png' => 'urano/satelites/perdita.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Puck',
                'description' => 'Puck estaba próximo a Miranda cuando fue descubierto, por lo que se pudo programar la sonda para que parte del tiempo de observación a este satélite se dedicara a aquel, siendo el único objeto descubierto por la Voyager 2 que se conoce con detalle.',
                'diameter' => '160 km',
                'mass' => '2,8939x10^18 kg',
                'webp' => 'urano/satelites/puck.webp',
                'png' => 'urano/satelites/puck.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Mab',
                'description' => 'Mab está fuertemente perturbado. El origen de esta perturbación todavía es confuso, pero se cree que es debido a alguno de los satélites que orbitan cerca de él. La órbita de Mab se encuentra a la misma distancia de Urano que R/2003 U 1, un anillo descubierto recientemente.',
                'diameter' => '24,8 km',
                'mass' => '1x10^16 kg',
                'webp' => 'urano/satelites/mab.webp',
                'png' => 'urano/satelites/mab.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Miranda',
                'description' => 'Miranda, también designado como Urano V, es el menor de los cinco satélites principales del planeta Urano y el último en ser descubierto hasta el sobrevuelo de Urano por la sonda espacial Voyager 2. Descubierto por Gerard Kuiper el 16 de febrero de 1948.',
                'diameter' => '472 km',
                'mass' => '6,59x10^19 kg',
                'webp' => 'urano/satelites/miranda.webp',
                'png' => 'urano/satelites/miranda.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Ariel',
                'description' => 'Ariel es el cuarto satélite más grande de Urano y el segundo en proximidad de los satélites principales. Se conoce el 35 % de la superficie del satélite por el sobrevuelo de la sonda Voyager 2 en 1986, el único acercamiento al sistema uraniano hasta la fecha. Es el decimocuarto satélite en tamaño del sistema solar.',
                'diameter' => '1157,8 km',
                'mass' => '1,35x10^21 kg',
                'webp' => 'urano/satelites/ariel.webp',
                'png' => 'urano/satelites/ariel.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Umbriel',
                'description' => 'Está constituido principalmente por hielo con una parte sustancial de roca y su interior puede estar diferenciado en un núcleo rocoso y un manto de hielo. La superficie es la más oscura de los satélites principales de Urano y parece haber sido esculpida básicamente por impactos. Sin embargo, la presencia de cañones sugiere que ha sufrido tempranos procesos endógenos que provocaron el rejuvenecimiento superficial y borraron los terrenos más antiguos.',
                'diameter' => '1172 km',
                'mass' => '11,72x10^20 kg',
                'webp' => 'urano/satelites/umbriel.webp',
                'png' => 'urano/satelites/umbriel.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Titania',
                'description' => 'Titania está compuesto de partes aproximadamente iguales de hielo y roca que están probablemente diferenciados en un núcleo rocoso y un manto de hielo. Una capa de agua líquida puede que esté presente en el límite entre el núcleo y el manto. La superficie de Titania, que es oscura y de color ligeramente rojizo, parece que ha sido modelada tanto por impactos como por procesos endógenos.',
                'diameter' => '1,578 km',
                'mass' => '3,49x10^21 kg',
                'webp' => 'urano/satelites/titania.webp',
                'png' => 'urano/satelites/titania.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Oberon',
                'description' => 'Oberón está compuesto de partes aproximadamente iguales de hielo y roca que están probablemente diferenciados en un núcleo rocoso y un manto de hielo. Una capa de agua líquida puede que esté presente en el límite entre el núcleo y el manto. La superficie de Oberón, que es oscura y de color ligeramente rojizo.',
                'diameter' => '1576,8 km',
                'mass' => '3,527x10^21 kg',
                'webp' => 'urano/satelites/oberon.webp',
                'png' => 'urano/satelites/oberon.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Francisco',
                'description' => 'Francisco, también denominado Urano XXII, es el más interior de los satélites irregulares de Urano.',
                'diameter' => '22 km',
                'mass' => '1,4x10^15 kg',
                'webp' => 'urano/satelites/francisco.webp',
                'png' => 'urano/satelites/francisco.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Calibán',
                'description' => 'Calibán es el segundo mayor satélite retrógrado irregular de Urano. Fue descubierto el 6 de septiembre de 1997 por Brett J. Gladman, Philip D. Nicholson, Joseph A. Burns, y John J. Kavelaars utilizando el telescopio Hale junto a Sicorax y su designación provisional fue S/1997 U 1.',
                'diameter' => '72 km',
                'mass' => '2x5^17 kg',
                'webp' => 'urano/satelites/caliban.webp',
                'png' => 'urano/satelites/caliban.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Stephano',
                'description' => 'Stefano es uno de los satélites retrógrados irregulares de Urano. Fue descubierto el 18 de julio de 1999 por Brett J. Gladman y su equipo, y su designación provisional fue S/1999 U 2.',
                'diameter' => '32 km',
                'mass' => '2x2^16 kg',
                'webp' => 'urano/satelites/stephano.webp',
                'png' => 'urano/satelites/stephano.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Trínculo',
                'description' => 'Trínculo es un satélite irregular retrógrado del planeta Urano. Fue descubierto el 13 de agosto de 2001 por Holman, et al, y recibió la designación provisional de S/2001 U 1',
                'diameter' => '18 km',
                'mass' => '1x10^15 kg',
                'webp' => 'urano/satelites/trinculo.webp',
                'png' => 'urano/satelites/trinculo.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Sycorax',
                'description' => 'Sicorax es el satélite natural irregular y retrógrado mayor de Urano. Fue descubierto el 6 de septiembre de 1997 por Brett J. Gladman, Philip D. Nicholson, Joseph A. Burns, y John J. Kavelaars conjuntamente con Caliban y se le asignó temporalmente la designación S/1997 U 2.',
                'diameter' => '150 km',
                'mass' => '2x3^18 kg',
                'webp' => 'urano/satelites/sycorax.webp',
                'png' => 'urano/satelites/sycorax.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Margarita',
                'description' => 'Margarita es el único satélite irregular no retrógrado de Urano. Fue descubierto el 29 de agosto de 2003 por Scott S. Sheppard y David C. Jewitt, y su designación provisional fue S/2003 U 3.',
                'diameter' => '20 km',
                'mass' => '5,4x10^15 kg',
                'webp' => 'urano/satelites/margarita.webp',
                'png' => 'urano/satelites/margarita.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Próspero',
                'description' => 'Próspero es uno de los satélites retrógrados irregulares de Urano. Fue descubierto el 18 de julio de 1999 por Matthew J. Holman con su equipo, y su designación provisional fue S/1999 U 3.',
                'diameter' => '50 km',
                'mass' => '8x5^16 kg',
                'webp' => 'urano/satelites/prospero.webp',
                'png' => 'urano/satelites/prospero.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Setebos',
                'description' => 'Setebos es uno de los satélites retrógrados irregulares de Urano. Fue descubierto el 18 de julio de 1999 por John J. Kavelaars con su equipo, y su designación provisional fue S/1999 U 1.',
                'diameter' => '48 km',
                'mass' => '7x5^16 kg',
                'webp' => 'urano/satelites/setebos.webp',
                'png' => 'urano/satelites/setebos.png'
            ],
            [
                'planet_id' => 7,
                'name' => 'Ferdinand',
                'description' => 'Ferdinando es el satélite más lejano de Urano, muestra una órbita retrógrada moderadamente inclinada y de alta excentricidad.',
                'diameter' => '21 km',
                'mass' => '5x4^18 kg',
                'webp' => 'urano/satelites/ferdinand.webp',
                'png' => 'urano/satelites/ferdinand.png'
            ]
        ]);
    }
}
