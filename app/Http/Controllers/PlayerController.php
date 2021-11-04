<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    function getPlayersView() {
        return view('pages.players', ['users' => User::all()]);
    }

    function getPlayerView($uuid, $name) {
        //
    }

    function getPlayerEditView($uuid, $name) {
        return view('pages.player-detail', [
            'genders' => User::getEnumValues('gender'),
            'dominantHandValues' => User::getEnumValues('dominant_hand'),
            'positions' => User::getEnumValues('position'),
            'clubs' => Club::all()->sort('name')
        ]);
    }

    function processPlayerEdit(Request $request) {
        //
    }

    function getAddGameStatsView($uuid, $name) {
        $clubId = User::find($uuid)->club->id;
        return view('pages.add-statistic', ['opponentClubs' => Club::where('id', '!=', $clubId)]);  // filter out own club
    }

    function processAddGameStats(Request $request) {
        //
    }
}
