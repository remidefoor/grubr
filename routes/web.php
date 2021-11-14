<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('get-players');
});

Route::get('/players', [PlayerController::class, 'getPlayersView'])
    ->name('get-players');

Route::get('/players/{uuid}/{firstName}-{lastName}', [PlayerController::class, 'getPlayerView'])
    ->name('get-player');

Route::get('/players/{uuid}/{firstName}-{lastName}/edit', [PlayerController::class, 'getPlayerEditView'])
    ->name('get-player-edit')
    /*->middleware('auth')*/;

Route::post('/players/{uuid}/{firstName}-{lastName}/edit', [PlayerController::class, 'processPlayerEdit'])
    ->name('post-player-edit')
    /*->middleware('auth')*/;

Route::get('/players/{uuid}/{firstName}-{lastName}/add-statistic', [PlayerController::class, 'getAddStatisticView'])
    ->name('get-add-statistic')
    /*->middleware('auth')*/;

Route::post('/players/{uuid}/{firstName}-{lastName}/add-statistic', [PlayerController::class, 'processAddStatistic'])
    ->name('post-add-statistic')
    /*->middleware('auth')*/;

// auth
Route::get('/login', [CustomAuthController::class, 'getLoginView'])
    ->name('get-login');

Route::post('/login', [CustomAuthController::class, 'processLogIn'])
    ->name('post-login');

Route::get('/register', [CustomAuthController::class, 'getRegisterView'])
    ->name('get-register');

Route::post('/register', [CustomAuthController::class, 'processRegister'])
    ->name('post-register');

Route::get('/logout', [CustomAuthController::class, 'processLogOut'])
    ->name('get-logout')
    ->middleware('auth');

// require __DIR__.'auth.php';
