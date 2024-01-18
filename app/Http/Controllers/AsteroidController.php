<?php

namespace App\Http\Controllers;

use App\Models\Asteroid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AsteroidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asteroids = Asteroid::all('id', 'name', 'diameter', 'mass', 'webp', 'png');
        foreach ($asteroids as $asteroid) 
        {
            $asteroid->webp = Storage::url($asteroid->webp);
            $asteroid->png = Storage::url($asteroid->png);
        }
        return response()->json($asteroids);
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
        $asteroids = Asteroid::findMany($ids, ['id', 'name', 'diameter', 'mass', 'webp', 'png']);
        foreach ($asteroids as $asteroid) 
        {
            $asteroid->webp = Storage::url($asteroid->webp);
            $asteroid->png = Storage::url($asteroid->png);
        }

        $response = count($asteroids) > 1 ? $asteroids : $asteroids[0];
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asteroid $asteroid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asteroid $asteroid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asteroid $asteroid)
    {
        //
    }
}
