<?php

use App\Http\Controllers\AsteroidController;
use App\Http\Controllers\PlaneteController;
use App\Http\Controllers\PlaneteTypeController;
use App\Http\Controllers\SatelliteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// planete-types
Route::get('/planete-types', [PlaneteTypeController::class, 'index'])->name('planete-types.index');
Route::get('/planete-types/{planeteType}', [PlaneteTypeController::class, 'show'])->name('planete-types.show');

// planetes
Route::get('/planetes', [PlaneteController::class, 'index'])->name('planetes.index');
Route::get('/planetes/{planete}', [PlaneteController::class, 'showMultiple'])->name('planetes.show');

// satellites
Route::get('/satellites', [SatelliteController::class, 'index'])->name('satellites.index');
Route::get('/satellites/{satellite}', [SatelliteController::class, 'showMultiple'])->name('satellites.show');

// asteroids
Route::get('/asteroids', [AsteroidController::class, 'index'])->name('asteroids.index');
Route::get('/asteroids/{asteroid}', [AsteroidController::class, 'showMultiple'])->name('asteroids.show');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
