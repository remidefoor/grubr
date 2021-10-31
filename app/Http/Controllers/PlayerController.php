<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    function getPlayersView() {
        return view('pages.players');
    }

    function getPlayerView($uuid, $name) {
        
    }

    function getPlayerEditView($uuid, $name) {

    }

    function processPlayerEdit(Request $request) {

    }

    function getAddGameStatsView($uuid, $name) {

    }

    function processAddGameStats(Request $request) {

    }
}
