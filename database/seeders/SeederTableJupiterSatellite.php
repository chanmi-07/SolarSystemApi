<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeederTableJupiterSatellite extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satellites')->insert
        ([
            [
                'name' => 'Metis',
                'planet_id' => 5,
                'description' => 'Metis está en órbita anclada por las mareas de Júpiter, y su forma es muy asimétrica: su diámetro mayor es casi del doble de largo que el menor. Su órbita se encuentra dentro del anillo principal de Júpiter, y se cree que es un contribuyente importante al material de los anillos.',
                'diameter' => '43 km',
                'mass' => '3,6 x 10^16 kg (0,000005 Tierras)',
                'webp' => 'jupiter/satelites/metis.webp',
                'png' => 'jupiter/satelites/metis.png'
            ],
            [
                'name' => 'Adrastea',
                'planet_id' => 5,
                'description' => 'Adrastea es el segundo satélite de Júpiter en orden de distancia al planeta y es el más pequeño de los cuatro satélites interiores. Fue descubierto en las fotografías tomadas por la sonda espacial Voyager 2 en 1979, y posteriormente, en 1983, tomó oficialmente el nombre de la mítica Adrastea, hija de Meliseo y de Ananké.',
                'diameter' => '20 km',
                'mass' => '1,9 x 10^16 kg (0,0000003 Tierras)',
                'webp' => 'jupiter/satelites/adrastea.webp',
                'png' => 'jupiter/satelites/adrastea.png'
            ],
            [
                'name' => 'Amaltea',
                'planet_id' => 5,
                'description' => 'Amaltea es el tercer satélite de Júpiter en orden de distancia, y el miembro principal del Grupo de Amaltea. Fue descubierto el 9 de septiembre de 1892 por el astrónomo estadounidense E. E. Barnard desde el observatorio Lick de la Universidad de California.',
                'diameter' => '262 km',
                'mass' => '2,1 x 10^18 kg (0,0003 Tierras)',
                'webp' => 'jupiter/satelites/amaltea.webp',
                'png' => 'jupiter/satelites/amaltea.png'
            ],
            [
                'name' => 'Tebe',
                'planet_id' => 5,
                'description' => 'Tiene forma irregular y color rojizo. Los principales modelos geológicos indican que está formado por hielo de agua poroso con cantidades desconocidas de otras sustancias, al igual que Amaltea. Entre sus características superficiales se incluyen grandes cráteres y altas montañas.',
                'mass' => '1,5 zettagramos',
                'diameter' => '98,6 km',
                'webp' => 'jupiter/satelites/tebe.webp',
                'png' => 'jupiter/satelites/tebe.png'
            ],
            [
                'name' => 'Ío',
                'planet_id' => 5,
                'description' => 'Ío es el satélite galileano más cercano a Júpiter. Es el tercer satélite por su tamaño, tiene la más alta densidad entre todos los satélites y, en proporción, la menor cantidad de agua entre todos los objetos conocidos del sistema solar. Fue descubierto por Galileo Galilei en 1610.',
                'diameter' => '3 643,2 km',
                'mass' => '8.93 x 10^22 kg (0,015 Tierras)',
                'webp' => 'jupiter/satelites/io.webp',
                'png' => 'jupiter/satelites/io.png'
            ],
            [
                'name' => 'Europa',
                'planet_id' => 5,
                'description' => 'Europa está compuesto principalmente por silicatos, tiene una corteza de hielo de agua y un probable núcleo de hierro y níquel. Cuenta con una tenue atmósfera compuesta de oxígeno, entre otros gases. Su superficie está estriada por grietas y rayas, mientras que los cráteres son relativamente raros. Tiene la superficie más lisa de cualquier objeto conocido del sistema solar.',
                'diameter' => '3 121.6 km',
                'mass' => '4.8 x 10^22 kg (0,008 Tierras)',
                'webp' => 'jupiter/satelites/europa.webp',
                'png' => 'jupiter/satelites/europa.png'
            ],
            [
                'name' => 'Ganímedes',
                'planet_id' => 5,
                'description' => 'Ganímedes se compone de silicatos y hielo de agua en cantidades aproximadamente iguales. Tiene un núcleo fundido rico en hierro y un océano interno que puede poseer más agua que todos los océanos de la Tierra juntos. Su superficie está constituida por regiones oscuras y claras. Las regiones oscuras, saturadas de cráteres de impacto, cubren alrededor de un tercio del satélite. El resto de la superficie está ocupado por regiones claras, áreas cortadas por amplios surcos y crestas.',
                'diameter' => '5 262.4 km',
                'mass' => '1.4819 x 10^23 kg (0,025 Tierras)',
                'webp' => 'jupiter/satelites/ganimedes.webp',
                'png' => 'jupiter/satelites/ganimedes.png'
            ],
            [
                'name' => 'Calisto',
                'planet_id' => 5,
                'description' => 'Está compuesto aproximadamente por partes iguales de roca y hielo, con una densidad media de unos 1,83 g/cm³. Los componentes detectados mediante la firma espectral de la superficie incluyen hielo, dióxido de carbono, silicatos y compuestos orgánicos. La investigación de la sonda espacial Galileo reveló que Calisto tiene un núcleo, compuesto principalmente de silicatos y hierro, y un océano de agua salada bajo la superficie.',
                'diameter' => '4 821.6 km',
                'mass' => '1.0759 x 10^23 kg (0,018 Tierras)',
                'webp' => 'jupiter/satelites/calisto.webp',
                'png' => 'jupiter/satelites/calisto.png'
            ],
            [
                'name' => 'Temisto',
                'planet_id' => 5,
                'description' => 'Este satélite irregular parece ser un caso intermedio (y único) en distancia (más de 7.000.000 km) e inclinación (43°) entre las lunas galileanas y el Grupo de Himalia',
                'diameter' => '8 km',
                'mass' => '6,9x10^14 kg (0,0000001 Tierras)',
                'webp' => 'jupiter/satelites/temisto.webp',
                'png' => 'jupiter/satelites/temisto.png'
            ],
            [
                'name' => 'Leda',
                'planet_id' => 5,
                'description' => 'Leda es un pequeño satélite irregular de Júpiter, y orbita alrededor de este en una órbita prógrada en casi 239 días. Fue descubierto por Charles Thomas Kowal desde el observatorio de Monte Palomar en California el 14 de septiembre de 1974 después de tres noches de observaciones fotográficas.',
                'diameter' => '20 km',
                'mass' => '1,1x10^16 kg (0,0000003 Tierras)',
                'webp' => 'jupiter/satelites/leda.webp',
                'png' => 'jupiter/satelites/leda.png'
            ],
            [
                'name' => 'Himalia',
                'planet_id' => 5,
                'description' => 'Dado que su órbita es similar a la de otros satélites, se piensa que Himalia es el miembro mayor de una familia de satélites progrados e irregulares de Júpiter',
                'diameter' => '170 km',
                'mass' => '6,7x10^18 kg (0,0006 Tierras)',
                'webp' => 'jupiter/satelites/himalia.webp',
                'png' => 'jupiter/satelites/himalia.png'
            ],
            [
                'name' => 'Lisitea',
                'planet_id' => 5,
                'description' => 'El satélite Lisitea pertenece al grupo de Himalia, cinco lunas con órbitas programadas similares, todas con una inclinación alrededor de 27.5°.',
                'diameter' => '36 km',
                'mass' => '6,3x10^16 kg (0,0006 Tierras)',
                'webp' => 'jupiter/satelites/lisitea.webp',
                'png' => 'jupiter/satelites/lisitea.png'
            ],
            [
                'name' => 'Elara',
                'planet_id' => 5,
                'description' => 'Elara es un satélite natural de Júpiter. Fue descubierto por Charles Dillon Perrine desde el Observatorio Lick, en California, en 1905',
                'diameter' => '86 km',
                'mass' => '8,7x10^17 kg (0,0001 Tierras)',
                'webp' => 'jupiter/satelites/elara.webp',
                'png' => 'jupiter/satelites/elara.png'
            ],
            [
                'name' => 'Dia',
                'planet_id' => 5,
                'description' => 'Dia, conocido previamente como S/2000 J 11, es un satélite irregular de Júpiter, descubierto por un grupo de astrónomos de la Universidad de Hawái, encabezado por Scott Sheppard en el año 2000.',
                'diameter' => '4 km',
                'mass' => '6,3x10^14 kg (0,0000001 Tierras)',
                'webp' => 'jupiter/satelites/dia.webp',
                'png' => 'jupiter/satelites/dia.png'
            ],
            [
                'name' => 'Carpo',
                'planet_id' => 5,
                'description' => 'Carpo (también denominada J XLVI) es una luna de Júpiter descubierta en 2003 por un grupo de astrónomos de la Universidad de Hawái encabezados por Scott S. Sheppard, y denominada temporalmente S/2003 J 20.',
                'diameter' => '3 km',
                'mass' => '4,5x10^13 kg (0,00000001 Tierras)',
                'webp' => 'jupiter/satelites/carpo.webp',
                'png' => 'jupiter/satelites/carpo.png'
            ],
            [
                'name' => 'S/2003 J 12',
                'planet_id' => 5,
                'description' => 'Es el satélite más interior de los satélites retrógrados irregulares de Júpiter y no parece ser propia de los otros grupos.',
                'diameter' => '1 km',
                'mass' => '1,5x10^12 kg (0,00000001 Tierras)',
                'webp' => 'jupiter/satelites/s2003j12.webp',
                'png' => 'jupiter/satelites/s2003j12.png'
            ],
            [
                'name' => 'Euporia',
                'planet_id' => 5,
                'description' => 'Es el miembro más interior del grupo de Ananké, satélites pequeños e irregulares de Júpiter con una órbita retrógrada. Se hallan situados desde unos 19,3 a unos 22,7 millones de km de Júpiter, con inclinaciones que rondan los 150°.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/euporia.webp',
                'png' => 'jupiter/satelites/euporia.png'
            ],
            [
                'name' => 'S/2003 J 3',
                'planet_id' => 5,
                'description' => 'S/2003 J 3 es un satélite irregular retrógrado de Júpiter. Fue hallado por un grupo de astrónomos de la Universidad de Hawái liderado por Scott S. Sheppard el 4 de marzo de 2003.',
                'diameter' => '2 km',
                'mass' => '2600 kg',
                'webp' => 'jupiter/satelites/s2003j3.webp',
                'png' => 'jupiter/satelites/s2003j3.png'
            ],
            [
                'name' => 'S/2003 J 18',
                'planet_id' => 5,
                'description' => 'S/2003 J 18 es un satélite irregular retrógrado de Júpiter. Fue hallado por un grupo de astrónomos liderados por Brett J. Gladman el 11 de abril de 2003.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/s2003j18.webp',
                'png' => 'jupiter/satelites/s2003j18.png'
            ],
            [
                'name' => 'Ortosia',
                'planet_id' => 5,
                'description' => 'Ortosia o Júpiter XXXV es un satélite irregular de Júpiter. Fue descubierto por un grupo de astrónomos de la Universidad de Hawái dirigido por Scott S. Sheppard en 2001.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/ortosia.webp',
                'png' => 'jupiter/satelites/ortosia.png'
            ],
            [
                'name' => 'Euante',
                'planet_id' => 5,
                'description' => 'Euante o Júpiter XXXIII es un satélite irregular y retrógrado de Júpiter. Descubierto por un equipo de astrónomos de la Universidad de Hawái dirigido por Scott S. Sheppard en 2001.',
                'diameter' => '3 km',
                'mass' => '45 petagramos',
                'webp' => 'jupiter/satelites/euante.webp',
                'png' => 'jupiter/satelites/euante.png'
            ],
            [
                'name' => 'Harpálice',
                'planet_id' => 5,
                'description' => 'Pertenece al grupo de Ananké, asteroides que en un pasado fueron capturados por la gravedad de Júpiter y convertidas en satélites. Tiene cerca de 4 km de diámetro y una apariencia grisácea, similar a los asteroides de tipo C',
                'diameter' => '4 km',
                'mass' => '1.16x10^14 Kg',
                'webp' => 'jupiter/satelites/harpalice.webp',
                'png' => 'jupiter/satelites/harpalice.png'
            ],
            [
                'name' => 'Praxídice',
                'planet_id' => 5,
                'description' => 'Praxídice orbita alrededor del gigante gaseoso a una distancia media de 20,824 millones de km en 613,904 días, con una inclinación de 144° respecto de la eclíptica (143° del ecuador de Júpiter), en un movimiento retrógrado y con una excentricidad de 0,1840.',
                'diameter' => '14 km',
                'mass' => '430 petagramos',
                'webp' => 'jupiter/satelites/praxidice.webp',
                'png' => 'jupiter/satelites/praxidice.png'
            ],
            [
                'name' => 'Tione',
                'planet_id' => 5,
                'description' => 'Tione conocido como S/2000 J 2 es uno de los satélites más pequeños de Júpiter y tiene una órbita muy baja, lo que sugiere que puede ser un asteroide capturado.',
                'diameter' => '4 km',
                'mass' => '90 petagramos',
                'webp' => 'jupiter/satelites/tione.webp',
                'png' => 'jupiter/satelites/tione.png'
            ],
            [
                'name' => 'S/2003 J 16',
                'planet_id' => 5,
                'description' => 'S/2003 J 16 es un satélite irregular retrógrado de Júpiter. Fue descubierto por un grupo de astrónomos dirigidos por Brett J. Gladman en 2003.',
                'diameter' => '2 km',
                'mass' => '15 teragramos',
                'webp' => 'jupiter/satelites/s2003j16.webp',
                'png' => 'jupiter/satelites/s2003j16.png'
            ],
            [
                'name' => 'Yocasta',
                'planet_id' => 5,
                'description' => 'Yocasta orbita a Júpiter a una distancia media de 20,723 millones de km en 609,427 días, en una inclinación orbital de 147° respecto a la eclíptica del planeta, con una excentricidad de 0,2874.',
                'diameter' => '5,2 km',
                'mass' => '1,9x1014 kg',
                'webp' => 'jupiter/satelites/yocasta.webp',
                'png' => 'jupiter/satelites/yocasta.png'
            ],
            [
                'name' => 'Mnemea',
                'planet_id' => 5,
                'description' => 'Mnemea tiene aproximadamente 2 km de diámetro y orbita a Júpiter a una distancia media de 21,427 millones de km en 640,769 días, con una inclinación de 149° de la eclíptica (148° del ecuador de Júpiter) con una excentricidad de 0,2214.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/mnemea.webp',
                'png' => 'jupiter/satelites/mnemea.png'
            ],
            [
                'name' => 'Hermipe',
                'planet_id' => 5,
                'description' => 'Hermipé tiene unos 4 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 21,182 millones de km en 629,809 días, a una inclinación de 151° con respecto a la eclíptica (149° del ecuador de Júpiter), con una excentricidad de 0,2290.',
                'diameter' => '4 km',
                'mass' => '90 petagramos',
                'webp' => 'jupiter/satelites/hermipe.webp',
                'png' => 'jupiter/satelites/hermipe.png'
            ],
            [
                'name' => 'Telxínoe',
                'planet_id' => 5,
                'description' => 'Telxínoe tiene unos 4 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 20,454 millones de km en 597.607 días, a una inclinación de 151° con respecto a la eclíptica (153° al ecuador de Júpiter), con una excentricidad de 0,2685.',
                'diameter' => '4 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/telxinoe.webp',
                'png' => 'jupiter/satelites/telxinoe.png'
            ],
            [
                'name' => 'Heliké',
                'planet_id' => 5,
                'description' => 'Heliké',
                'diameter' => '4 km',
                'mass' => '90 petagramos',
                'webp' => 'jupiter/satelites/helike.webp',
                'png' => 'jupiter/satelites/helike.png'
            ],
            [
                'name' => 'Ananqué',
                'planet_id' => 5,
                'description' => 'En el espectro visible, Ananqué aparece neutral a la luz roja, sus índices de color son B-V=0,90 V-R=0,38. Mientras que su espectro infrarrojo es similar al de los asteroides de tipo-P pero con una posible indicación de agua.',
                'diameter' => '28 km',
                'mass' => '30 hexagramos',
                'webp' => 'jupiter/satelites/ananque.webp',
                'png' => 'jupiter/satelites/ananque.png'
            ],
            [
                'name' => 'S/2003 J 15',
                'planet_id' => 5,
                'description' => 'S/2003 J 15 tiene sobre 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 22,721 millones de km en 699,676 días terrestres, con una inclinación de 142° con respecto al la eclíptica (142° del ecuador de Júpiter), en un sentido retrógrado y con una excentricidad orbital de 0,0932.',
                'diameter' => '2 km',
                'mass' => '--',
                'webp' => 'jupiter/satelites/s2003_j_15.webp',
                'png' => 'jupiter/satelites/s2003_j_15.png'
            ],
            [
                'name' => 'Arce',
                'planet_id' => 5,
                'description' => 'Arce tiene unos 3 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,717 millones de km en 746,185 días, a una inclinación de 165º con respecto a la eclíptica (162° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,3678.',
                'diameter' => '3 km',
                'mass' => '45 petagramos',
                'webp' => 'jupiter/satelites/arce.webp',
                'png' => 'jupiter/satelites/arce.png'
            ],
            [
                'name' => 'Herse',
                'planet_id' => 5,
                'description' => 'S/2003 J 17 tiene cerca de 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 22,134 millones de km en 672,752 días, con una inclinación de 162° respecto de la eclíptica (161° del ecuador de Júpiter), en dirección retrógrada y excentricidad orbital de 0,2379.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/herse.webp',
                'png' => 'jupiter/satelites/herse.png'
            ],
            [
                'name' => 'Pasítea',
                'planet_id' => 5,
                'description' => 'Pasítea tiene unos 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,307 Millones de km en 726,933 días, a una inclinación de 166° a la eclíptica (164° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,3289.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/pasitea.webp',
                'png' => 'jupiter/satelites/pasitea.png'
            ],
            [
                'name' => 'S/2003 J 10',
                'planet_id' => 5,
                'description' => 'S/2003 J 10 tiene cerca de 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,307 millones de km en 726,933 días, con una inclinación de 166° respecto de la eclíptica (164° del ecuador de Júpiter), en dirección retrógrada y excentricidad orbital de 0,3289.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/s2003_j_10.webp',
                'png' => 'jupiter/satelites/s2003_j_10.png'
            ],
            [
                'name' => 'Caldona',
                'planet_id' => 5,
                'description' => 'Caldona tiene unos 4 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 22,713 millones de km. en 699,327 días, a una inclinación de 164° con respecto a la eclíptica (162° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,3678.',
                'diameter' => '4 km',
                'mass' => '75 petagramos',
                'webp' => 'jupiter/satelites/caldona.webp',
                'png' => 'jupiter/satelites/caldona.png'
            ],
            [
                'name' => 'Isonoé',
                'planet_id' => 5,
                'description' => 'Isonoé tiene unos 3,8 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,833 Millones de km en 751.647 días, a una inclinación de 166 º a la eclíptica (169 ° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0.166.',
                'diameter' => '3,8 km',
                'mass' => '7,5x10^13 kg',
                'webp' => 'jupiter/satelites/isonoe.webp',
                'png' => 'jupiter/satelites/isonoe.png'
            ],
            [
                'name' => 'Erinome',
                'planet_id' => 5,
                'description' => 'Erínome tiene unos 3,2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 22,986 Millones de km en 711.965 días, a una inclinación de 164° respecto a la eclíptica (162° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,3678.',
                'diameter' => '3,2 km',
                'mass' => '45 petagramos',
                'webp' => 'jupiter/satelites/erinome.webp',
                'png' => 'jupiter/satelites/erinome.png'
            ],
            [
                'name' => 'Calé',
                'planet_id' => 5,
                'description' => 'Calé tiene unos 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 22,409 Millones de km en 685.324 días, a una inclinación de 165° a la eclíptica (166° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,2011.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/cale.webp',
                'png' => 'jupiter/satelites/cale.png'
            ],
            [
                'name' => 'Aitné',
                'planet_id' => 5,
                'description' => 'Aitné tiene unos 3 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 22,285 Millones de km en 679.641 días, a una inclinación de 166° a la eclíptica (164° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,393.',
                'diameter' => '3 km',
                'mass' => '45 petagramos',
                'webp' => 'jupiter/satelites/aitne.webp',
                'png' => 'jupiter/satelites/aitne.png'
            ],
            [
                'name' => 'Táigete',
                'planet_id' => 5,
                'description' => 'Táigete tiene unos 5 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 22,439 Millones de km en 686,675 días, a una inclinación de 165° a la eclíptica (163° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,3678.',
                'diameter' => '5 km',
                'mass' => '160 petagramos',
                'webp' => 'jupiter/satelites/taigete.webp',
                'png' => 'jupiter/satelites/taigete.png'
            ],
            [
                'name' => 'S/2003 J 9',
                'planet_id' => 5,
                'description' => 'S/2003 J 9 tiene alrededor de 1 kilómetro de diámetro, y órbita a Júpiter a una distancia media de 23,858 millones de km en 752.839 días, a una inclinación de 165° a la eclíptica (165° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,276.',
                'diameter' => '1 km',
                'mass' => '--',
                'webp' => 'jupiter/satelites/s2003_j_9.webp',
                'png' => 'jupiter/satelites/s2003_j_9.png'
            ],
            [
                'name' => 'S/2003 J 5',
                'planet_id' => 5,
                'description' => 'S/2003 J 5 tiene unos 4 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,974 Millones de km en 758.341 días, a una inclinación de 166° a la eclíptica (167° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,307.',
                'diameter' => '4 km',
                'mass' => '--',
                'webp' => 'jupiter/satelites/s2003_j_5.webp',
                'png' => 'jupiter/satelites/s2003_j_5.png'
            ],
            [
                'name' => 'S/2003 J 19',
                'planet_id' => 5,
                'description' => 'S/2003 J 19 tiene unos 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 22,709 Millones de km en 699.125 días, a una inclinación de 166° a la eclíptica (167° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,1961.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/s2003_j_19.webp',
                'png' => 'jupiter/satelites/s2003_j_19.png'
            ],
            [
                'name' => 'Eukélade',
                'planet_id' => 5,
                'description' => 'Eukélade tiene unos 4 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,484 millones de km. en 735,200 días, a una inclinación de 164° con respecto a la eclíptica (165° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,2829.',
                'diameter' => '4 km',
                'mass' => '90 petagramos',
                'webp' => 'jupiter/satelites/eukelade.webp',
                'png' => 'jupiter/satelites/eukelade.png'
            ],
            [
                'name' => 'Carme',
                'planet_id' => 5,
                'description' => 'Con sus 40 kilómetros medios de radio, tarda 692 días terrestres en dar una vuelta al planeta gaseoso, del cual dista a unos 22,6 millones de kilómetros aproximadamente. La composición en su superficie es mayoritariamente de tierra rica en carbono y hielo.',
                'diameter' => '48 km',
                'mass' => '1.3x10^17 kg',
                'webp' => 'jupiter/satelites/carme.webp',
                'png' => 'jupiter/satelites/carme.png'
            ],
            [
                'name' => 'Espondé',
                'planet_id' => 5,
                'description' => 'Espondé tiene unos 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 24,253 millones de km. en 771.604 días, a una inclinación de 154° con respecto a la eclíptica (156° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,443.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/esponde.webp',
                'png' => 'jupiter/satelites/esponde.png'
            ],
            [
                'name' => 'Eurídome',
                'planet_id' => 5,
                'description' => 'Eurídome tiene unos 3 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,231 Millones de km en 723.359 días, a una inclinación de 149 º a la eclíptica (147 ° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0.3770.',
                'diameter' => '3 km',
                'mass' => '4,5x1013 kg',
                'webp' => 'jupiter/satelites/euridome.webp',
                'png' => 'jupiter/satelites/euridome.png'
            ],
            [
                'name' => 'Megaclite',
                'planet_id' => 5,
                'description' => 'Megaclite tiene cerca de 5,4 kilómetros de diámetro, y se mueve en órbita alrededor de Júpiter en un promedio de 23.806.000 kilómetros. Tiene una inclinación de 150° con respecto a la elíptica (148° del ecuador de Júpiter), con una excentricidad de 0,308.',
                'diameter' => '5,4 km',
                'mass' => '2,1x10^14 kg',
                'webp' => 'jupiter/satelites/megaclite.webp',
                'png' => 'jupiter/satelites/megaclite.png'
            ],
            [
                'name' => 'S/2003 J 23',
                'planet_id' => 5,
                'description' => 'S/2003 J 23 tiene unos 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 22,740 millones de km en 700.538 días, a una inclinación de 149° a la eclíptica (149° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,3931.',
                'diameter' => '2 km',
                'mass' => '2600 kg',
                'webp' => 'jupiter/satelites/s2003j23.webp',
                'png' => 'jupiter/satelites/s2003j23.png'
            ],
            [
                'name' => 'Cálice',
                'planet_id' => 5,
                'description' => 'Cálice tiene unos 5,2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,181 millones de km en 721,021 días, con una inclinación de 166 ° a la eclíptica (165 ° al ecuador de Júpiter), con una dirección retrógrada y excentricidad de 0,2140.',
                'diameter' => '5,2 km',
                'mass' => '190 petagramos',
                'webp' => 'jupiter/satelites/calice.webp',
                'png' => 'jupiter/satelites/calice.png'
            ],
            [
                'name' => 'Pasífae',
                'planet_id' => 5,
                'description' => 'Fue descubierto en una placa tomada en el Real Observatorio de Greenwich en la noche del 28 de febrero de 1908, pero se encuentra ya en una inspección de placas de la entidad del 27 de enero.',
                'diameter' => '58 km',
                'mass' => '300 hexagramos',
                'webp' => 'jupiter/satelites/pasiphae.webp',
                'png' => 'jupiter/satelites/pasiphae.png'
            ],
            [
                'name' => 'S/2003 J 4',
                'planet_id' => 5,
                'description' => 'S/2003 J 4 tiene unos 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,571 millones de km en 739.294 días, a una inclinación de 147° a la eclíptica (149° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,3931.',
                'diameter' => '2 km',
                'mass' => '--',
                'webp' => 'jupiter/satelites/s2003j4.webp',
                'png' => 'jupiter/satelites/s2003j4.png'
            ],
            [
                'name' => 'Sinope',
                'planet_id' => 5,
                'description' => 'Sinope era el satélite más ultraperiférico conocido de Júpiter, hasta el descubrimiento de Megaclite en 2000.',
                'diameter' => '19 km',
                'mass' => '7,5x10^16kg',
                'webp' => 'jupiter/satelites/sinope.webp',
                'png' => 'jupiter/satelites/sinope.png'
            ],
            [
                'name' => 'Hegémone',
                'planet_id' => 5,
                'description' => 'Hegémone tiene unos 3 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,703 Millones de km en 745.500 días, a una inclinación de 153° a la eclíptica (151° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,4077.',
                'diameter' => '3 km',
                'mass' => '45 petagramos',
                'webp' => 'jupiter/satelites/hegemone.webp',
                'png' => 'jupiter/satelites/hegemone.png'
            ],
            [
                'name' => 'Cilene',
                'planet_id' => 5,
                'description' => 'Cilene tiene unos 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,396 millones de km. en 731,099 días, a una inclinación de 140° con respecto a la eclíptica (140° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,4116.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/cilene.webp',
                'png' => 'jupiter/satelites/cilene.png'
            ],
            [
                'name' => 'Aedea',
                'planet_id' => 5,
                'description' => 'Aedea tiene unos 4 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,044 millones de km en 714,657 días, a una inclinación de 160º con respecto a la eclíptica (162° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0.4311.',
                'diameter' => '4 km',
                'mass' => '8,7x10^13 kg',
                'webp' => 'jupiter/satelites/aedea.webp',
                'png' => 'jupiter/satelites/aedea.png'
            ],
            [
                'name' => 'Kore',
                'planet_id' => 5,
                'description' => 'Kore tiene unos 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,239 millones de km en 723.720 días, con una inclinación de 141° a la eclíptica (139° al ecuador de Júpiter), en dirección retrógrada y con una excentricidad de 0,2462.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/kore.webp',
                'png' => 'jupiter/satelites/kore.png'
            ],
            [
                'name' => 'Kallichore',
                'planet_id' => 5,
                'description' => 'Kallichore tiene unos 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 23,112 Millones de km en 717.806 días, a una inclinación de 165° a la eclíptica (164° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,2042.',
                'diameter' => '2 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/kallichore.webp',
                'png' => 'jupiter/satelites/kallichore.png'
            ],
            [
                'name' => 'Autónoe',
                'planet_id' => 5,
                'description' => 'Autónoe tiene unos 4 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 24,264 millones de km en 772,168 días, a una inclinación de 150° con respecto a la eclíptica (151° al ecuador de Júpiter), en una dirección retrógrada y con una excentricidad de 0,369.',
                'diameter' => '4 km',
                'mass' => '90 petagramos',
                'webp' => 'jupiter/satelites/autonoe.webp',
                'png' => 'jupiter/satelites/autonoe.png'
            ],
            [
                'name' => 'Calírroe',
                'planet_id' => 5,
                'description' => 'Calírroe tiene alrededor de 8,6 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 24,3560 millones de kilómetros, tomándole una rotación 776,5430 días, con una inclinación de 141 ° a la eclíptica (140 ° del ecuador de Júpiter), En una dirección retrógrada y con una excentricidad de 0.264.',
                'diameter' => '5 km',
                'mass' => '8,7^1014 kg',
                'webp' => 'jupiter/satelites/calirroe.webp',
                'png' => 'jupiter/satelites/calirroe.png'
            ],
            [
                'name' => 'S/2003 J 2',
                'planet_id' => 5,
                'description' => 'S/2003 J 2 tiene unos 2 kilómetros de diámetro, y orbita a Júpiter a una distancia media de 29,54 millones de kilómetros en 980 días, a una inclinación de 154° a la eclíptica (152 ° al ecuador de Júpiter) y con una excentricidad de 0,2255.',
                'diameter' => '2 km',
                'mass' => '--',
                'webp' => 'jupiter/satelites/s2003j2.webp',
                'png' => 'jupiter/satelites/s2003j2.png'
            ],
            [
                'name' => 'S/2010 J 1',
                'planet_id' => 5,
                'description' => 'S/2010 J 1 orbita a Júpiter a una distancia media de 14 570 000 millas (23.45 millones de km), tardando 2,02 años para completar una vuelta alrededor de Júpiter. S/2010 J 1 tiene un diámetro de aproximadamente 1,8 millas (3 kilómetros) de ancho.',
                'diameter' => '2 km',
                'mass' => '--',
                'webp' => 'jupiter/satelites/s2010j1.webp',
                'png' => 'jupiter/satelites/s2010j1.png'
            ],
            [
                'name' => 'S/2010 J 2',
                'planet_id' => 5,
                'description' => 'S/2010 J 2 tarda 1,69 años en orbitar alrededor de Júpiter, y su distancia media es de 13 060 000 millas (21,01 millones de kilómetros). S/2010 J 2 tiene un diámetro de aproximadamente 1 kilómetro, siendo etiquetado como el satélite natural más pequeño conocido en el sistema solar que se descubrió desde la Tierra.',
                'diameter' => '1 km',
                'mass' => '69 petagramos',
                'webp' => 'jupiter/satelites/s2010j2.webp',
                'png' => 'jupiter/satelites/s2010j2.png'
            ],
            [
                'name' => 'S/2011 J 1',
                'planet_id' => 5,
                'description' => 'S/2011 J 1 es un satélite irregular retrógrado de Júpiter. Fue hallado por Scott S. Sheppard el 27 de septiembre de 2011.',
                'diameter' => '1 km',
                'mass' => '--',
                'webp' => 'jupiter/satelites/s2011j1.webp',
                'png' => 'jupiter/satelites/s2011j1.png'
            ],
            [
                'name' => 'S/2011 J 2',
                'planet_id' => 5,
                'description' => 'S/2011 J 2 es un satélite irregular retrógrado de Júpiter. Fue hallado por Scott S. Sheppard el 27 de septiembre de 2011.',
                'diameter' => '0,5 km',
                'mass' => '15 petagramos',
                'webp' => 'jupiter/satelites/s2011j2.webp',
                'png' => 'jupiter/satelites/s2011j2.png'
            ],
            [
                'name' => 'S/2016 J 1',
                'planet_id' => 5,
                'description' => 'S/2016 J1, es un satélite natural externo de Júpiter. Fue descubierto por Scott S. Sheppard en 2016, pero no fue anunciado hasta el 2 de junio de 2017 a través del Centro de Planetas Menores. Tiene aproximadamente 1 kilómetro de diámetro.',
                'diameter' => '1 km',
                'mass' => '--',
                'webp' => 'jupiter/satelites/s2016j1.webp',
                'png' => 'jupiter/satelites/s2016j1.png'
            ],
            [
                'name' => 'S/2017 J 1',
                'planet_id' => 5,
                'description' => 'S/2017 J 1 es un satélite natural externo de Júpiter. Se informó el 5 de junio de 2017 a través del Centro de Planetas Menores. Se cree que tiene unos 2 km de diámetro.',
                'diameter' => '2 km',
                'mass' => '--',
                'webp' => 'jupiter/satelites/s2017j1.webp',
                'png' => 'jupiter/satelites/s2017j1.png'
            ]
        ]);
    }
}
