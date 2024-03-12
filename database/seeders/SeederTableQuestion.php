<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederTableQuestion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions =
        ([
            [
                'question' => '¿Cuál es la definición de un planeta según la NASA?',
                'options' => 
                [
                    [
                        'option' => 'Un objeto astronómico de pequeño tamaño.',
                        'is_correct' => false,
                    ],
                    [
                        'option' => 'Un objeto astronómico de gran tamaño que gira alrededor de una estrella.',
                        'is_correct' => true,
                    ],
                    [
                        'option' => 'Un satélite natural de un planeta.',
                        'is_correct' => false,
                    ],
                    [
                        'option' => 'Un objeto astronómico que no es visible a simple vista.',
                        'is_correct' => false,
                    ],
                ],
            ],
            [
                'question' => '¿Cómo se formaron los planetas?',
                'options' => 
                [
                    [
                        'option' => 'Por la colisión de asteroides.',
                        'is_correct' => false,
                    ],
                    [
                        'option' => 'Por la atracción gravitatoria de gas y polvo alrededor de estrellas jóvenes.',
                        'is_correct' => true,
                    ],
                    [
                        'option' => 'Por la fusión de estrellas.',
                        'is_correct' => false,
                    ],
                    [
                        'option' => 'Por la evaporación de gases en el espacio.',
                        'is_correct' => false,
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es la principal diferencia entre los planetas terrestres y los planetas gaseosos?',
                'options' => 
                [
                    [
                        'option' => 'Los terrestres tienen anillos y los gaseosos no.',
                        'is_correct' => false,
                    ],
                    [
                        'option' => 'Los terrestres tienen una superficie sólida, mientras que los gaseosos tienen una superficie gaseosa.',
                        'is_correct' => true,
                    ],
                    [
                        'option' => 'Los terrestres son más grandes que los gaseosos.',
                        'is_correct' => false,
                    ],
                    [
                        'option' => 'Los terrestres están más cerca del Sol que los gaseosos.',
                        'is_correct' => false,
                    ],
                ],
            ],
            [
                'question' => '¿Qué característica distingue a los planetas enanos de los planetas convencionales?',
                'options' => 
                [
                    [
                        'option' => 'Su tamaño más pequeño.',
                        'is_correct' => false,
                    ],
                    [
                        'option' => 'Su forma irregular.',
                        'is_correct' => false,
                    ],
                    [
                        'option' => 'No haber limpiado su órbita de otros cuerpos celestes.',
                        'is_correct' => true,
                    ],
                    [
                        'option' => 'Que no tienen satélites naturales.',
                        'is_correct' => false,
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es la composición principal de los planetas enanos más alejados del Sol?',
                'options' => 
                [
                    [
                        'option' => 'Roca y agua líquida.',
                        'is_correct' => false,
                    ],
                    [
                        'option' => 'Roca y hielo.',
                        'is_correct' => true,
                    ],
                    [
                        'option' => 'Gas y polvo.',
                        'is_correct' => false,
                    ],
                    [
                        'option' => 'Hielo casi en su totalidad.',
                        'is_correct' => false,
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el planeta con la atmósfera más caliente del sistema solar?',
                'options' => 
                [
                    [
                        'option' => 'Venus', 
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Marte', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Júpiter', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Mercurio', 
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el único planeta del sistema solar donde se conoce la existencia de vida?',
                'options' => 
                [
                    [
                        'option' => 'Marte', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Venus', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Tierra', 
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Júpiter', 
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el planeta conocido como el planeta rojo?',
                'options' => 
                [
                    [
                        'option' => 'Marte', 
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Júpiter', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Saturno', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Urano', 
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el planeta enano más grande del sistema solar?',
                'options' => 
                [
                    [
                        'option' => 'Plutón', 
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Ceres', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Haumea', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Eris', 
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Qué tipo de planetas son los más alejados del Sol y carecen de una superficie interior definida?',
                'options' => 
                [
                    [
                        'option' => 'Planetas Terrestres', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Planetas Gaseosos', 
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Planetas Exteriores', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Planetas Enanos', 
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es la característica más distintiva de Saturno?',
                'options' => 
                [
                    [
                        'option' => 'Su atmósfera caliente', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Sus anillos visibles desde la Tierra', 
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Su alta densidad', 
                        'is_correct' => false
                    ],
                    [

                        'option' => 'Su gran tamaño', 
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Qué tipo de planeta es Urano?',
                'options' => 
                [
                    [
                        'option' => 'Planeta Gaseoso', 
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Planeta Terrestre', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Planeta Enano', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Planeta Gigante', 
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el planeta enano ubicado en el cinturón de Kuiper, siendo el tercero en tamaño en el Sistema Solar?',
                'options' => 
                [
                    [
                        'option' => 'Makemake', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Haumea', 
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Eris', 
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Plutón', 
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Qué satélite de Marte recorre una órbita casi circular muy próxima al plano ecuatorial marciano?',
                'options' => 
                [
                    [
                        'option' => 'Fobos',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Deimos',
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Luna',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Titán',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el satélite de Júpiter más cercano al planeta?',
                'options' => 
                [
                    [
                        'option' => 'Metis',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Adrastea',
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Amaltea',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Tebe',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el satélite de Júpiter que tiene forma irregular y color rojizo, y está formado por hielo de agua poroso?',
                'options' => 
                [
                    [
                        'option' => 'Metis',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Adrastea',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Amaltea',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Tebe',
                        'is_correct' => true
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el satélite de Júpiter que está compuesto principalmente por silicatos y tiene una corteza de hielo de agua?',
                'options' => 
                [
                    [
                        'option' => 'Ío',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Europa',
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Ganímedes',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Calisto',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el satélite de Júpiter que tiene un núcleo fundido rico en hierro y un océano interno que puede poseer más agua que todos los océanos de la Tierra juntos?',
                'options' => 
                [
                    [
                        'option' => 'Ío',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Europa',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Ganímedes',
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Calisto',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál de los siguientes satélites de Júpiter es conocido por tener la superficie más lisa de cualquier objeto conocido en el sistema solar?',
                'options' => 
                [
                    [
                        'option' => 'Calisto',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Ganímedes',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Europa',
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Ío',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál de los siguientes satélites de Júpiter tiene una órbita anclada por las mareas de Júpiter?',
                'options' => 
                [
                    [
                        'option' => 'Metis',
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Adrastea',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Amaltea',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Tebe',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál de las siguientes afirmaciones sobre Fobos y Deimos es verdadera?',
                'options' => 
                [
                    [
                        'option' => 'Ambos satélites son más grandes que la Luna.',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Fobos es el satélite natural más grande de Marte.',
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Deimos tiene aproximadamente el mismo tamaño que Fobos.',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Fobos orbita a Marte en dirección directa.',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el satélite más grande de Júpiter?',
                'options' => 
                [
                    [
                        'option' => 'Ganímedes',
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Calisto',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Europa',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Ío',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el diámetro de la Luna, el satélite natural de la Tierra?',
                'options' => 
                [
                    [
                        'option' => '2,000 km',
                        'is_correct' => false
                    ],
                    [
                        'option' => '3,474 km',
                        'is_correct' => false
                    ],
                    [
                        'option' => '3,843 km',
                        'is_correct' => true
                    ],
                    [
                        'option' => '4,879 km',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el cuerpo celeste más grande del cinturón de asteroides y el único clasificado como planeta enano?',
                'options' => 
                [
                    [
                        'option' => 'Ceres',
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Vesta',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Pallas',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Higia',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Qué asteroide es el segundo en masa, el tercero en tamaño y el más brillante de todos?',
                'options' => 
                [
                    [
                        'option' => 'Ceres',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Vesta',
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Pallas',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Higia',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el segundo objeto de mayor tamaño del cinturón de asteroides, aunque Vesta es más masivo?',
                'options' => 
                [
                    [
                        'option' => 'Ceres',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Vesta',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Pallas',
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Higia',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el cuarto mayor objeto del cinturón de asteroides, presentando una forma bastante alargada?',
                'options' => 
                [
                    [
                        'option' => 'Ceres',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Vesta',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Pallas',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Higia',
                        'is_correct' => true
                    ],
                ],
            ],
            [
                'question' => '¿Cuál de los asteroides fue considerado inicialmente un planeta, al igual que Ceres, Palas y Vesta?',
                'options' => 
                [
                    [
                        'option' => 'Ceres',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Vesta',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Pallas',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Juno',
                        'is_correct' => true
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el satélite natural de Ceres?',
                'options' => 
                [
                    [
                        'option' => 'Juno',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Pallas',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Vesta',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'No tiene',
                        'is_correct' => true
                    ],
                ],
            ],
            [
                'question' => '¿Cuál es el mayor satélite natural del cinturón de asteroides?',
                'options' => 
                [
                    [
                        'option' => 'Higia',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Vesta',
                        'is_correct' => false
                    ],
                    [
                        'option' => 'Juno',
                        'is_correct' => true
                    ],
                    [
                        'option' => 'Pallas',
                        'is_correct' => false
                    ],
                ],
            ],
            
        ]);

        foreach ($questions as $question)
        {
            $questionId = Question::create(['question' => $question['question']])->id;

            foreach ($question['options'] as $option)
            {
                Option::create
                ([
                    'question_id' => $questionId,
                    'option' => $option['option'],
                    'is_correct' => $option['is_correct'],
                ]);
            }
        }
    }
}
