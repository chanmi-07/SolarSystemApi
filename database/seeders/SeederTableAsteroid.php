<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTableAsteroid extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('asteroids')->insert
         ([
            [
                'name' => 'Ceres',
                'description' => 
                'Ceres es el cuerpo celeste más grande del cinturón y el único clasificado como planeta enano, desde la redefinición de planeta de 2006. Esta clasificación se debe a que su gravedad lo ha moldeado con una forma casi esférica. Con anterioridad a 2006 era considerado el asteroide más grande, pero en la actualidad es el planeta enano más pequeño, ya que los otros objetos que comparten esa misma clasificación, como Plutón o Eris, son mayores.',
                'diameter' => '940 km',
                'mass' => '9.393 x 10^20 kg',
                'webp' => 'asteroides/ceres/ceres.webp',
                'png' => 'asteroides/ceres/ceres.png',
            ],
            [
                'name' => 'Vesta',
                'description' => 'Vesta es el segundo asteroide de mayor masa, el tercero en tamaño, y el más brillante de todos. Esto se debe a que posee un albedo del 42 %, mayor incluso que el albedo de la Tierra (37 %). Constituye el 9 % de la masa total del cinturón. Orbita a una distancia del Sol muy similar a la de Ceres. Vesta posee un núcleo metálico bastante denso (de hierro y níquel), un manto compuesto de olivino, y una corteza muy fina de apenas unos kilómetros de grosor.',
                'diameter' => '530 km',
                'mass' => '2.590 x 10^20 kg',
                'webp' => 'asteroides/vesta/vesta.webp',
                'png' => 'asteroides/vesta/vesta.png',
            ],
            [
                'name' => 'Pallas',
                'description' => 
                'Palas es el segundo objeto de mayor tamaño del cinturón, aunque Vesta es más masivo. Representa un 7 % de la masa del cinturón y su albedo es del 12 %, ya que es de tipo-C. Posee la órbita más excéntrica de los cuatro, con un valor de 0,23, lo cual hace que su distancia más cercana al Sol diste mucho de la más alejada. También su inclinación orbital es superior, con 34° (las de los otros tres son menores que 10°). Se cree que un impacto sobre su superficie formó la familia Palas, aunque el número de miembros es escaso.',
                'diameter' => '550 km',
                'mass' => '2.11 x 10^20 kg',
                'webp' => 'asteroides/pallas/pallas.webp',
                'png' => 'asteroides/pallas/pallas.png',
            ],
            [
                'name' => 'Higia',
                'description' => 'Higia es el cuarto mayor objeto del cinturón de asteroides, aunque presenta una forma bastante alargada, y constituye un 3 % de la masa total del cinturón. Fue descubierto por Annibale de Gasparis en 1849. En cuanto a su composición, es un asteroide carbonáceo (tipo-C) con un albedo del 7 %. Es el miembro principal de la familia homónima a la que da nombre. Se trata, de los cuatro, del asteroide más externo, cuyo afelio alcanza las 3,5 UA, y tarda 5,5 años en completar su órbita.',
                'diameter' => '431 km',
                'mass' => '8.6 x 10^19 kg',
                'webp' => 'asteroides/higia/higia.webp',
                'png' => 'asteroides/higia/higia.png',
            ],
            [
                'name' => 'Juno',
                'description' => 'Juno es uno de los más grandes del cinturón principal de asteroides, siendo el segundo más pesado dentro de los de tipo S. Al principio fue considerado un planeta, como Ceres, Palas, y Vesta. Fue clasificado de nuevo como asteroide, junto con los otros tres, cuando muchos asteroides más fueron descubiertos. El pequeño tamaño de Juno y su forma irregular lo excluyeron de haber sido considerado planeta enano conforme a la clasificación de la Unión Astronómica Internacional.',
                'diameter' => '271.4 km',
                'mass' => '3.0 x 10^19 kg',
                'webp' => 'asteroides/juno/juno.webp',
                'png' => 'asteroides/juno/juno.png',
            ]
         ]);
    }
}
