<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('get-players');
});

Route::get('/players', [PlayerController::class, 'getPlayersView'])
    ->name('get-players');

Route::get('/player/{uuid}/{name}', [PlayerController::class, 'getPlayerView'])
    ->name('get-player');

Route::get('/player/{uuid}/{name}/edit', [PlayerController::class, 'getPlayerEditView'])
    ->name('get-player-edit')
    /*->middleware('auth')*/;

Route::post('/player/{uuid}/{name}/edit', [PlayerController::class, 'processPlayerEdit'])
    ->name('post-player-edit')
    /*->middleware('auth')*/;

Route::get('/player/{uuid}/{name}/add-game-stats', [PlayerController::class, 'getAddGameStatsView'])
    ->name('get-add-game-stats')
    /*->middleware('auth')*/;

Route::post('/player/{uuid}/{name}/add-game-stats', [PlayerController::class, 'processAddGameStats'])
    ->name('post-add-game-stats')
    /*->middleware('auth')*/;

// require __DIR__.'auth.php';
