<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $planets = Planet::with('planetType');
        $request->type && $planets->where('planet_type_id', $request->type);
        if ($request->page) 
        {
            $paginate = $request->n_elements ?? 6;
            $planets = $planets->paginate($paginate);
            $paginateInfo =
            [
                'current' => $planets->currentPage(),
                'previous' => $planets->previousPageUrl(),
                'next' => $planets->nextPageUrl(),
                'pages' => $planets->lastPage(),
            ];
        } 
        else 
        {
            $planets = $planets->get();
        }


        $planetsData = [];
        foreach ($planets as $planet) 
        {
            $planetsData[] = 
            [
                'id' => $planet->id,
                'name' => $planet->name,
                'planet_type' => 
                [
                    'id' => $planet->planetType->id,
                    'name' => $planet->planetType->name,
                ],
                'description' => $planet->description,
                'orbital_distance' => $planet->orbital_distance,
                'orbital_period' => $planet->orbital_period,
                'radius' => $planet->radius,
                'volume' => $planet->volume,
                'diameter' => $planet->diameter,
                'mass' => $planet->mass,
                'density' => $planet->density,
                'gravity' => $planet->gravity,
                'temperature' => $planet->temperature,
                'atmosphere' => $planet->atmosphere,
                'webp' => Storage::url($planet->webp),
                'png' => Storage::url($planet->png),
            ];
        }
        $response = 
        [
            'info' => 
            [
                'count' => $request->page ? $planets->total() : $planets->count(),
                ...($paginateInfo ?? []),
            ],
            'planets' => $planetsData,
        ];

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
    public function showMultiple($ids)
    {
        $planetId = explode(',', $ids);
        $planets = Planet::whereIn('id', $planetId)->with('planetType')->get();

        $planetsData = [];

        foreach ($planets as $planet) 
        {
            $planetsData[] = 
            [
                'id' => $planet->id,
                'name' => $planet->name,
                'planet_type' => 
                [
                    'id' => $planet->planetType->id,
                    'name' => $planet->planetType->name,
                    'link' => route('planet-types.show', $planet->planetType->id),
                ],
                'description' => $planet->description,
                'orbital_distance' => $planet->orbital_distance,
                'orbital_period' => $planet->orbital_period,
                'radius' => $planet->radius,
                'volume' => $planet->volume,
                'diameter' => $planet->diameter,
                'mass' => $planet->mass,
                'density' => $planet->density,
                'gravity' => $planet->gravity,
                'temperature' => $planet->temperature,
                'atmosphere' => $planet->atmosphere,
                'webp' => Storage::url($planet->webp),
                'png' => Storage::url($planet->png),
            ];
        }

        $response = count($planetsData) == 1 ? $planetsData[0] : $planetsData;
        
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planet $planet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planet $planet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planet $planet)
    {
        //
    }
}
