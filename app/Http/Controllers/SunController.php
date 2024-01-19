<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sun = 
        [
            'name' => 'Sol',
            'type' => 'Estrella enana',
            'description' => 'El Sol es una estrella enana, una esfera casi perfecta de plasma caliente que proporciona luz, calor y energía a todo el sistema solar. Su diámetro es aproximadamente 109 veces el de la Tierra y su masa representa alrededor del 99.86% de la masa total del sistema solar. Está compuesto principalmente por hidrógeno y helio, y su temperatura en su núcleo alcanza millones de grados Celsius, donde ocurren reacciones nucleares que generan la energía radiante que irradia al espacio.',
            'radius' => '695700 km',
            'volume' => '1413 x 10^18 km³',
            'diameter' => '1392684 km',
            'mass' => '1,9891 x 10^30 kg',
            'density' => '1411 g/cm³',
            'gravity' => '274 m/s²',
            'temperature' => '5500 °C',
            'atmosphere' => 'Hidrógeno, Helio',
            'webp' => Storage::url('sol/sol.webp'),
            'png' => Storage::url('sol/sol.png'),
        ];

        return response()->json($sun);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
