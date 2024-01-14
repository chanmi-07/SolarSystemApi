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
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Tritón',
                'description' => 'Tritón se compone de una corteza de nitrógeno congelado sobre un manto de hielo, el cual se cree cubre un núcleo sólido de roca y metal. Tritón tiene una densidad media de 2.061 g/cm³ y está compuesto por aproximadamente un 15-35 % de agua helada.',
                'diameter' => '2707 km',
                'mass' => '2.14x10^22 kg',
                'webp' => 'neptuno/satelites/triton.webp',
                'png' => 'neptuno/satelites/triton.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Proteo',
                'description' => 'Es uno de los cuerpos más oscuros del sistema solar ya que solo refleja el 6 % de la luz solar que recibe, por lo que no ha podido ser descubierto antes del paso de la Voyager 2. Lleva el nombre de Proteus, el dios marino cambiante de la mitología griega.',
                'diameter' => '420 km',
                'mass' => '0.5x10^20 kg',
                'webp' => 'neptuno/satelites/proteo.webp',
                'png' => 'neptuno/satelites/proteo.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Nereida',
                'description' => 'Nereida es similar en tamaño a Mimas, satélite de Saturno, aunque Nereida es más denso. Desde 1987, algunas observaciones fotométricas de Nereida han detectado grandes variaciones (de ~1 de magnitud) de su brillo, que pueden ocurrir a lo largo de años y meses, y en ocasiones hasta en unos pocos días.',
                'diameter' => '340 km',
                'mass' => '3.1x10^19 kg',
                'webp' => 'neptuno/satelites/nereida.webp',
                'png' => 'neptuno/satelites/nereida.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Larisa',
                'description' => 'Larisa presenta un aspecto notablemente irregular y no muestra signos de actividad geológica; su superficie muestra una gran densidad de cráteres.',
                'diameter' => '194 km',
                'mass' => '0.05x10^20 kg',
                'webp' => 'neptuno/satelites/larisa.webp',
                'png' => 'neptuno/satelites/larisa.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Galatea',
                'description' => 'Galatea tiene una forma irregular y no muestra signos de modificación geológica alguna. Es probable que se trate de un conjunto de escombros reacumulados a partir de fragmentos de los satélites originales de Neptuno.',
                'diameter' => '174.8 km',
                'mass' => '3.7x10^18 kg',
                'webp' => 'neptuno/satelites/galatea.webp',
                'png' => 'neptuno/satelites/galatea.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Náyade',
                'description' => 'Náyade tiene una forma irregular. Es probable que se trate de un conjunto de escombros reacumulados a partir de fragmentos de los satélites originales de Neptuno.',
                'diameter' => '58 km',
                'mass' => '190x10^15 kg',
                'webp' => 'neptuno/satelites/nayade.webp',
                'png' => 'neptuno/satelites/nayade.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Talasa',
                'description' => 'Talasa tiene una forma irregular. Es probable que se trate de un conjunto de escombros reacumulados a partir de fragmentos de los satélites originales de Neptuno.',
                'diameter' => '82 km',
                'mass' => '370x10^15 kg',
                'webp' => 'neptuno/satelites/talasa.webp',
                'png' => 'neptuno/satelites/talasa.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Despina',
                'description' => 'Despina posee una forma irregular y no muestra signos de actividad geológica. Se cree que se originó a raíz de fragmentos de los satélites primitivos de Neptuno.',
                'diameter' => '150 km',
                'mass' => '0.021x10^20',
                'webp' => 'neptuno/satelites/despina.webp',
                'png' => 'neptuno/satelites/despina.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Halimede',
                'description' => 'Halimede aparece gris ante el espectro visible. Dado el similar color de Halimede al de Nereida, junto con una alta probabilidad de colisión (41 %), se ha sugerido que Halimede podría ser un fragmento de Nereida.',
                'diameter' => '62 km',
                'mass' => '180 exagramos',
                'webp' => 'neptuno/satelites/halimede.webp',
                'png' => 'neptuno/satelites/halimede.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Sao',
                'description' => 'Sao orbita a Neptuno a una distancia cercana a los 22.2 millones de kilómetros. Además de tener una excepcional inclinación de 53.483° y una moderada excentricidad de 0.1365 en relación con otros satélites irregulares de Neptuno.',
                'diameter' => '44 km',
                'mass' => '67 exagramos',
                'webp' => 'neptuno/satelites/sao.webp',
                'png' => 'neptuno/satelites/sao.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Laomedeia',
                'description' => 'Laomedeia orbita a Neptuno a una distancia aproximada de 23.5 millones de kilómetros. Laomedeia tiene una inclinación de 37.874° respecto a la eclíptica y una excentricidad de 0.3969. Fue nombrado en honor a Laomedeia, una de las 50 ninfas Nereidas.',
                'diameter' => '42 km',
                'mass' => '58 exagramos',
                'webp' => 'neptuno/satelites/laomedeia.webp',
                'png' => 'neptuno/satelites/laomedeia.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Psámate',
                'description' => 'Psámate tiene unos 38 kilómetros de diámetro y orbita alrededor de Neptuno a una distancia media de entre 25.7 y 67.7 millones de kilómetros y requiere casi 25 años terrestres en completar su órbita. La órbita de Psámate está situada cerca de la teórica órbita estable de Neptuno para un cuerpo con movimiento retrógrado.',
                'diameter' => '38 km',
                'mass' => '0.0002x10^20',
                'webp' => 'neptuno/satelites/psamate.webp',
                'png' => 'neptuno/satelites/psamate.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Neso',
                'description' => 'Neso orbita a Neptuno a una distancia de más de 48 millones de kilómetros, lo que lo hace el satélite natural más distante conocido de cualquier planeta. Su afelio se encuentra a más de 72 millones de kilómetros de Neptuno.',
                'diameter' => '60 km',
                'mass' => '190x10^15 kg',
                'webp' => 'neptuno/satelites/neso.webp',
                'png' => 'neptuno/satelites/neso.png'
            ],
            [
                'planete_id' => 6,
                'type' => 'Satélite natural',
                'name' => 'Hipocampo',
                'description' => 'Hipocampo es tan tenue que no fue observado por la sonda espacial Voyager 2 cuando sobrevoló el sistema neptuniano en 1989. Tiene unos 35 kilómetros de diámetro y orbita a Neptuno en aproximadamente 22 horas y 48 minutos, poco menos de un día terrestre',
                'diameter' => '18 km',
                'mass' => '--',
                'webp' => 'neptuno/satelites/hipocampo.webp',
                'png' => 'neptuno/satelites/hipocampo.png'
            ]
        ]);
    }
}
