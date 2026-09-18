<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/player/register', function () {
    return view('pages.player.register');
});

Route::post('/player/register', [PlayerController::class, 'store']);

Route::get('/players', [PlayerController::class, 'index']);

Route::get('/districts', [DistrictController::class, 'index']);