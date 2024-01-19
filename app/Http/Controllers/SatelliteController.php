<?php

namespace App\Http\Controllers;

use App\Models\Satellite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SatelliteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $satellites = Satellite::with('planet');
        $request->planet && $satellites->where('planet_id', $request->planet);
        if($request->page)
        {
            $paginate = $request->n_elements ?? 6;
            $satellites = $satellites->paginate($paginate);
            $paginateInfo =
            [
                'current' => $satellites->currentPage(),
                'previous' => $satellites->previousPageUrl(),
                'next' => $satellites->nextPageUrl(),
                'pages' => $satellites->lastPage(),
            ];
        }
        else
        {
            $satellites = $satellites->get();
        }

        $satelliteData = [];

        foreach ($satellites as $satellite) 
        {
            $satelliteData[] = 
            [
                'id' => $satellite->id,
                'name' => $satellite->name,
                'planet' => $satellite->planet->name,
                'description' => $satellite->description,
                'diameter' => $satellite->diameter,
                'mass' => $satellite->mass,
                'webp' => Storage::url('planetas/'.$satellite->webp),
                'png' => Storage::url('planetas/'.$satellite->png),
            ];
        }

        $response = 
        [
            'info' =>
            [
                'count' => $request->page ? $satellites->total() : $satellites->count(),
                ...($paginateInfo ?? []),
            ],
            'satellites' => $satelliteData,
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
        $ids = explode(',', $ids);
        $satellites = Satellite::whereIn('id', $ids)->get();
        $satelliteData = [];
        foreach ($satellites as $satellite) 
        {
            $satelliteData[] = 
            [
                'id' => $satellite->id,
                'name' => $satellite->name,
                'planet' => $satellite->planet->name,
                'description' => $satellite->description,
                'diameter' => $satellite->diameter,
                'mass' => $satellite->mass,
                'webp' => Storage::url('planetas/'.$satellite->webp),
                'png' => Storage::url('planetas/'.$satellite->png),
            ];
        }
        $response = count($satelliteData) > 1 ? $satelliteData : $satelliteData[0];
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Satellite $satellite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Satellite $satellite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Satellite $satellite)
    {
        //
    }
}
