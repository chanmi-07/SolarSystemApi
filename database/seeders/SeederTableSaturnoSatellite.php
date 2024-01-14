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
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Titán',
                'description' => 'Titán es el mayor de los satélites de Saturno y el segundo del sistema solar tras Ganimedes. Además, es el único satélite conocido que posee una atmósfera importante, y el único objeto, aparte de la Tierra, en el que se ha encontrado evidencia clara de cuerpos líquidos estables en la superficie.',
                'diameter' => '5 150 km',
                'mass' => '1,345x10^23 kg',
                'webp' => 'saturno/satelites/titan.webp',
                'png' => 'saturno/satelites/titan.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Rea',
                'description' => 'Rea es un satélite del planeta Saturno. Con 1529 km de diámetro, es el segundo satélite más grande del planeta después de Titán, y seguido de cerca por Jápeto. El satélite ocupa la decimocuarta posición en cercanía al planeta, orbitando a una distancia de unos 527.000 km. Su órbita es casi circular y está ligeramente inclinada con respecto al ecuador de Saturno, y el satélite tarda unos 4,5 días terrestres en completarla.',
                'diameter' => '1 528 km',
                'mass' => '2,32x10^21 kg',
                'webp' => 'saturno/satelites/rea.webp',
                'png' => 'saturno/satelites/rea.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Jápeto',
                'description' => 'Es el octavo más distante al planeta y el tercero en tamaño, con un diámetro de alrededor de 1500 km, después de los satélites más grandes Titán y Rea. Fue descubierto por Giovanni Cassini en 1671. Tarda en completar una vuelta alrededor de Saturno 79,33 días terrestres, a una distancia media de 3 561 300 km.',
                'diameter' => '1 436 km',
                'mass' => '1,973x10^21 kg',
                'webp' => 'saturno/satelites/japeto.webp',
                'png' => 'saturno/satelites/japeto.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Dione',
                'description' => 'Dione está compuesto principalmente de agua congelada. Sin embargo, dado que Dione es la luna más densa de Saturno (aparte de Titán, cuya densidad es mayor por compresión gravitacional), seguramente debe tener materiales más densos en su interior, como por ejemplo rocas de silicio.',
                'diameter' => '1,123 km',
                'mass' => '1,096x10^21 kg',
                'webp' => 'saturno/satelites/dione.webp',
                'png' => 'saturno/satelites/dione.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Tetis',
                'description' => 'Tiene la densidad más baja entre los mayores satélites del sistema solar, lo que indica que está compuesto por hielo de agua con una muy pequeña fracción de roca. La confirmación vino de los resultados espectroscópicos que identificaron al hielo de agua como la sustancia dominante de la superficie.',
                'diameter' => '1,062 km',
                'mass' => '6,174x10^20 kg',
                'webp' => 'saturno/satelites/tetis.webp',
                'png' => 'saturno/satelites/tetis.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Encélado',
                'description' => 'Encélado es el sexto satélite más grande de Saturno con algo más de 500 km de diámetro, aproximadamente la décima parte del de Titán, el mayor satélite saturniano. Está cubierto por una capa de hielo que refleja casi toda la luz solar que incide sobre él, por lo que la temperatura superficial es muy baja: -198 °C a mediodía.',
                'diameter' => '504 km',
                'mass' => '1,08x10^20 kg',
                'webp' => 'saturno/satelites/encelado.webp',
                'png' => 'saturno/satelites/encelado.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Mimas',
                'description' => 'Mimas es un satélite de Saturno descubierto en 1789 por William Herschel y denominado en aquel momento como Saturno I por ser el satélite más interno de los descubiertos por Herschel (gira alrededor de Saturno en ~ 22,5 horas).',
                'diameter' => '396,2 km',
                'mass' => '3,749x10^19 kg',
                'webp' => 'saturno/satelites/mimas.webp',
                'png' => 'saturno/satelites/mimas.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Hipérion',
                'description' => 'Hiperión es un satélite de Saturno, el séptimo satélite clásico en orden de distancia desde el planeta. Se distingue por su forma irregular, su rotación caótica, y su apariencia inexplicable parecida a una esponja.',
                'diameter' => '360x280x225 km',
                'mass' => '5,686x10^18 kg',
                'webp' => 'saturno/satelites/hiperion.webp',
                'png' => 'saturno/satelites/hiperion.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Febe',
                'description' => 'Febe es el satélite irregular más grande de Saturno. Fue descubierto por el astrónomo estadounidense William Henry Pickering en 1898. Tiene un diámetro de 220 km. Su distancia a Saturno es de 12 954 000 km y su masa es de 4,0e+18 kg. Posee una inclinación de su órbita de 175,3º. Refleja solo el 6 % de la luz solar que recibe. Tarda nueve horas en completar una rotación sobre su eje.',
                'diameter' => '220 km',
                'mass' => '4,0x10^18 kg',
                'webp' => 'saturno/satelites/febe.webp',
                'png' => 'saturno/satelites/febe.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Pandora',
                'description' => 'Pandora es un satélite de Saturno descubierto en 1980 por la sonda Voyager 1. Físicamente es un cuerpo muy parecido al cercano Prometeo.',
                'diameter' => '83 km',
                'mass' => '1,94x10^17 kg',
                'webp' => 'saturno/satelites/pandora.webp',
                'png' => 'saturno/satelites/pandora.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Epimeteo',
                'description' => 'Epimeteo ocupa la misma órbita que la luna Jano. Los satélites de Saturno Epimeteo y Jano que distan en sus órbitas menos que la suma de sus diámetros son satélites coorbitales esto es satélites que giran en la misma órbita.',
                'diameter' => '116,2 km',
                'mass' => '525.607x10^15',
                'webp' => 'saturno/satelites/epimeteo.webp',
                'png' => 'saturno/satelites/epimeteo.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Jano',
                'description' => 'Jano ocupa la misma órbita que la luna Epimeteo. Los astrónomos asumieron que había sólo un cuerpo en esa órbita, y como es evidente, era imposible reconciliar las observaciones de dos objetos distintos interpretándolos como si fuesen uno solo.',
                'diameter' => '178 km',
                'mass' => '1,9x10^17 kg',
                'webp' => 'saturno/satelites/jano.webp',
                'png' => 'saturno/satelites/jano.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Helena',
                'description' => 'Helena, descubierto en 1980 por los astrónomos franceses Pierre Laques del Observatorio Pic du Midi y Jean Lecacheux del Observatorio de París. Se pudo observar por primera vez cuando los anillos de Saturno se veían desde la Tierra de perfil. Esta orientación de los anillos reduce mucho la luz que producen cuando contemplamos el planeta desde un telescopio y, por tanto, permiten la detección de débiles cuerpos en las proximidades de estos.',
                'diameter' => '43.4x38.2x26 km',
                'mass' => '11 hexagramos',
                'webp' => 'saturno/satelites/helena.webp',
                'png' => 'saturno/satelites/helena.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Telesto',
                'description' => 'Telesto es un satélite de Saturno. Descubierto por Smith, Reitsema, Larson y Fountain de la Universidad de Arizona en 1980 en observaciones desde la Tierra, fue llamado provisionalmente S/1980 S 13.',
                'diameter' => '24,8 km',
                'mass' => '4 exagramos',
                'webp' => 'saturno/satelites/telesto.webp',
                'png' => 'saturno/satelites/telesto.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Calipso',
                'description' => 'Calipso es un satélite de Saturno de forma irregular y dimensiones de 30x16x16 km.',
                'diameter' => '30x16x16 km',
                'mass' => '2,5 exagramos',
                'webp' => 'saturno/satelites/calipso.webp',
                'png' => 'saturno/satelites/calipso.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Atlas',
                'description' => 'Atlas parece ser un satélite pastor del anillo A. Además, en 2004 se descubrió un anillo débil y delgado, temporalmente llamado Anillo R/2004 S 1, en la órbita de Atlas. También tiene una rotacion sincrona con respecto a saturno.',
                'diameter' => '31 km',
                'mass' => '6,6x10^16 kg',
                'webp' => 'saturno/satelites/atlas.webp',
                'png' => 'saturno/satelites/atlas.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Prometeo',
                'description' => 'Esta luna presenta una forma muy alargada. Posee numerosas crestas y valles y algunos cráteres de unos 20 km de diámetro son visibles. La baja densidad y el elevado albedo hacen probable que Prometeo sea un cuerpo helado poroso.',
                'diameter' => '148x100x68 km',
                'mass' => '3,3x10^17 kg',
                'webp' => 'saturno/satelites/prometeo.webp',
                'png' => 'saturno/satelites/prometeo.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Pan',
                'description' => 'Es uno de los más internos satélites conocidos de este planeta, y se encuentra en la división Encke del anillo A de Saturno, de la que actúa como luna pastora, siendo responsable de mantenerla abierta. Fue descubierto por Mark R. Showalter en 1990 que provoca la separación de los anillos de Saturno mientras examinaba las viejas fotografías obtenidas nueve años antes por el Voyager en su encuentro con Saturno.',
                'diameter' => '14.1 km',
                'mass' => '2,7x10^15 kg',
                'webp' => 'saturno/satelites/pan.webp',
                'png' => 'saturno/satelites/pan.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Dafne',
                'description' => 'Dafne es un satélite de Saturno. Su descubrimiento lo anunció Carolyn Porco el 6 de mayo de 2005. Apareció en seis imágenes tomadas por la nave Cassini el 1 de mayo con una exposición de 16 minutos del borde exterior del anillo A. En las imágenes de alta resolución (3,54 km/pixel) se observa su disco de 7 km.',
                'diameter' => '8 km',
                'mass' => '0.068x10^15 kg',
                'webp' => 'saturno/satelites/dafne.webp',
                'png' => 'saturno/satelites/dafne.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Antea',
                'description' => 'Antea está visiblemente afectada por una resonancia de longitud media mucho mayor que Mimas. Esto provoca que su órbita varíe en el semieje mayor unos 20 km respecto a la que seguiría sin perturbaciones en un plazo de 2 años. La estrecha proximidad a las órbitas de Palene y Metone y el hecho de que tengan elementos orbitales similares sugiere que estas lunas puedan formar una familia dinámica.',
                'diameter' => '1 km',
                'mass' => '5x10^12 km',
                'webp' => 'saturno/satelites/antea.webp',
                'png' => 'saturno/satelites/antea.png'
            ],
            [
                'planete_id' => 7,
                'type' => 'Satélite natural',
                'name' => 'Palene',
                'description' => 'Palene, es un satélite natural de Saturno muy pequeño situado entre las órbitas de Mimas y Encélado. Fue visto por primera vez por la misión de la NASA Cassini-Huygens en agosto de 2004 y se le dio la designación provisional de S/2004 S 2.',
                'diameter' => '4 km',
                'mass' => '1,7-7x10^13',
                'webp' => 'saturno/satelites/palene.webp',
                'png' => 'saturno/satelites/palene.png'
            ]
        ]);
    }
}
