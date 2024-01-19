<?php

namespace App\Http\Controllers;

use App\Models\PlanetType;
use Illuminate\Http\Request;

class PlanetTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planetTypes = PlanetType::with('planets')->get();
        $response = [];
        foreach ($planetTypes as $planetType) 
        {
            $response[] = 
            [
                'id' => $planetType->id,
                'name' => $planetType->name,
                'planets' => 
                $planetType->planets->map(function ($planet) 
                {
                    return 
                    [
                        'id' => $planet->id,
                        'name' => $planet->name,
                        'webp' => $planet->webp,
                        'link' => route('planets.show', $planet->id),
                    ];
                })
            ];
        }
        return response()->json($response);
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
    public function show(PlanetType $planetType)
    {
        $planetType->findOrfail($planetType->id);
        $response = 
        [
            'id' => $planetType->id,
            'name' => $planetType->name,
            'planets' => 
            $planetType->planets->map(function ($planet) 
            {
                return 
                [
                    'id' => $planet->id,
                    'name' => $planet->name,
                    'webp' => $planet->webp,
                    'link' => route('planets.show', $planet->id),
                ];
            })
        ];

        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlanetType $planetType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlanetType $planetType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlanetType $planetType)
    {
        //
    }
}
