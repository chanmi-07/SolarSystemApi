<?php

use App\Http\Controllers\AsteroidController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\PlanetTypeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SatelliteController;
use App\Http\Controllers\SunController;
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
// home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// sun
Route::get('/sun', [SunController::class, 'index'])->name('sun.index');

// planet-types
Route::get('/planet-types', [PlanetTypeController::class, 'index'])->name('planet-types.index');
Route::get('/planet-types/{planetType}', [PlanetTypeController::class, 'show'])->name('planet-types.show');

// planets
Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');
Route::get('/planets/{planet}', [PlanetController::class, 'showMultiple'])->name('planets.show');

// satellites
Route::get('/satellites', [SatelliteController::class, 'index'])->name('satellites.index');
Route::get('/satellites/{satellite}', [SatelliteController::class, 'showMultiple'])->name('satellites.show');

// asteroids
Route::get('/asteroids', [AsteroidController::class, 'index'])->name('asteroids.index');
Route::get('/asteroids/{asteroid}', [AsteroidController::class, 'showMultiple'])->name('asteroids.show');

// questions'
Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
