<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/player/register', [PlayerController::class, 'create']);


Route::post('/player/register', [PlayerController::class, 'store']);

Route::get('/players', [PlayerController::class, 'index']);

Route::get('/districts', [DistrictController::class, 'index']);
 

Route::get('/teams', [TeamController::class, 'index']);
Route::get('/teams/create', [TeamController::class, 'create']);
Route::post('/teams', [TeamController::class, 'store']);

Route::get('/teams/{team}', [TeamController::class, 'show']);