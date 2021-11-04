<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('get-players');
});

Route::get('/players', [PlayerController::class, 'getPlayersView'])
    ->name('get-players');

Route::get('/player/{uuid}/{firstName}-{lastName}', [PlayerController::class, 'getPlayerView'])
    ->name('get-player');

Route::get('/player/{uuid}/{firstName}-{lastName}/edit', [PlayerController::class, 'getPlayerEditView'])
    ->name('get-player-edit')
    /*->middleware('auth')*/;

Route::post('/player/{uuid}/{firstName}-{lastName}/edit', [PlayerController::class, 'processPlayerEdit'])
    ->name('post-player-edit')
    /*->middleware('auth')*/;

Route::get('/player/{uuid}/{firstName}-{lastName}/add-statistic', [PlayerController::class, 'getAddStatisticView'])
    ->name('get-add-statistic')
    /*->middleware('auth')*/;

Route::post('/player/{uuid}/{firstName}-{lastName}/add-statistic', [PlayerController::class, 'processAddStatistic'])
    ->name('post-add-statistic')
    /*->middleware('auth')*/;

// auth
Route::get('/register', [AuthController::class, 'getRegisterView'])
    ->name('get-register');

Route::post('/register', [AuthController::class, 'processRegister'])
    ->name('post-register');

Route::get('/login', [AuthController::class, 'getLoginView'])
    ->name('get-login');

Route::post('/login', [AuthController::class, 'processLogin'])
    ->name('post-login');

// require __DIR__.'auth.php';
