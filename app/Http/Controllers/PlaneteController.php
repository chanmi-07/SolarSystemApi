<?php

namespace App\Http\Controllers;

use App\Models\Planete;
use Illuminate\Http\Request;

class PlaneteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $planetes = Planete::with('planeteType');
        $request->type && $planetes->where('planete_type_id', $request->type);
        if ($request->page) 
        {
            $paginate = $request->n_elements ?? 6;
            $planetes = $planetes->paginate($paginate);
            $paginateInfo =
            [
                'current' => $planetes->currentPage(),
                'previous' => $planetes->previousPageUrl(),
                'next' => $planetes->nextPageUrl(),
                'pages' => $planetes->lastPage(),
            ];
        } 
        else 
        {
            $planetes = $planetes->get();
        }


        $planetesData = [];
        foreach ($planetes as $planete) 
        {
            $planetesData[] = 
            [
                'id' => $planete->id,
                'name' => $planete->name,
                'planete_type' => 
                [
                    'id' => $planete->planeteType->id,
                    'name' => $planete->planeteType->name,
                ],
                'description' => $planete->description,
                'orbital_distance' => $planete->orbital_distance,
                'orbital_period' => $planete->orbital_period,
                'radius' => $planete->radius,
                'volume' => $planete->volume,
                'diameter' => $planete->diameter,
                'mass' => $planete->mass,
                'density' => $planete->density,
                'gravity' => $planete->gravity,
                'temperature' => $planete->temperature,
                'atmosphere' => $planete->atmosphere,
                'webp' => $planete->webp,
                'png' => $planete->png,
            ];
        }
        $response = 
        [
            'info' => 
            [
                'count' => $request->page ? $planetes->total() : $planetes->count(),
                ...($paginateInfo ?? []),
            ],
            'planetes' => $planetesData,
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
        $planeteId = explode(',', $ids);
        $planetes = Planete::whereIn('id', $planeteId)->with('planeteType')->get();

        $planetesData = [];

        foreach ($planetes as $planete) 
        {
            $planetesData[] = 
            [
                'id' => $planete->id,
                'name' => $planete->name,
                'planete_type' => 
                [
                    'id' => $planete->planeteType->id,
                    'name' => $planete->planeteType->name,
                    'link' => route('planete-types.show', $planete->planeteType->id),
                ],
                'description' => $planete->description,
                'orbital_distance' => $planete->orbital_distance,
                'orbital_period' => $planete->orbital_period,
                'radius' => $planete->radius,
                'volume' => $planete->volume,
                'diameter' => $planete->diameter,
                'mass' => $planete->mass,
                'density' => $planete->density,
                'gravity' => $planete->gravity,
                'temperature' => $planete->temperature,
                'atmosphere' => $planete->atmosphere,
                'webp' => $planete->webp,
                'png' => $planete->png,
            ];
        }

        $response = count($planetesData) == 1 ? $planetesData[0] : $planetesData;
        
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planete $planete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planete $planete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planete $planete)
    {
        //
    }
}
