<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\RaceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/characters', [CharacterController::class,'characters']);
Route::get('/api/characters/{id}', [CharacterController::class,'getCharacter']);
Route::post('/api/characters/edit', [CharacterController::class,'editCharacter']);
Route::post('/api/characters/add', [CharacterController::class,'addCharacter']);
Route::delete('/api/characters/delete/{id}', [CharacterController::class,'deleteCharacter']);

Route::get('/api/films', [FilmController::class,'films']);
Route::get('/api/films/all', [FilmController::class,'allFilms']);
Route::get('/api/films/{id}', [FilmController::class,'getFilm']);
Route::post('/api/films/edit', [FilmController::class,'editFilm']);
Route::post('/api/films/add', [FilmController::class,'addFilm']);
Route::delete('/api/films/delete/{id}', [FilmController::class,'deleteFilm']);

Route::get('/api/planets', [PlanetController::class,'planets']);
Route::get('/api/planets/all', [PlanetController::class,'allPlanets']);
Route::get('/api/planets/{id}', [PlanetController::class,'getPlanet']);
Route::post('/api/planets/edit', [PlanetController::class,'editPlanet']);
Route::post('/api/planets/add', [PlanetController::class,'addPlanet']);
Route::delete('/api/planets/delete/{id}', [PlanetController::class,'deletePlanet']);

Route::get('/api/races', [RaceController::class,'races']);
Route::get('/api/races/all', [RaceController::class,'allRaces']);
Route::get('/api/races/{id}', [RaceController::class,'getRace']);
Route::post('/api/races/edit', [RaceController::class,'editRace']);
Route::post('/api/races/add', [RaceController::class,'addRace']);
Route::delete('/api/races/delete/{id}', [RaceController::class,'deleteRace']);

