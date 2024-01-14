<?php

namespace App\Http\Controllers;

use App\Models\PlaneteType;
use Illuminate\Http\Request;

class PlaneteTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planeteTypes = PlaneteType::with('planetes')->get();
        $response = [];
        foreach ($planeteTypes as $planeteType) 
        {
            $response[] = 
            [
                'id' => $planeteType->id,
                'name' => $planeteType->name,
                'planetes' => 
                $planeteType->planetes->map(function ($planete) 
                {
                    return 
                    [
                        'id' => $planete->id,
                        'name' => $planete->name,
                        'webp' => $planete->webp,
                        'link' => route('planetes.show', $planete->id),
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
    public function show(PlaneteType $planeteType)
    {
        $planeteType->findOrfail($planeteType->id);
        $response = 
        [
            'id' => $planeteType->id,
            'name' => $planeteType->name,
            'planetes' => 
            $planeteType->planetes->map(function ($planete) 
            {
                return 
                [
                    'id' => $planete->id,
                    'name' => $planete->name,
                    'webp' => $planete->webp,
                    'link' => route('planetes.show', $planete->id),
                ];
            })
        ];

        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlaneteType $planeteType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlaneteType $planeteType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlaneteType $planeteType)
    {
        //
    }
}
