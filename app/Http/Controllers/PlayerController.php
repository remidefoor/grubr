<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PlayerController extends Controller
{
    function getPlayersView() {
        return view('pages.players', ['players' => User::all()]);
    }

    function getPlayerView($uuid, $name) {
        //
    }

    function getPlayerEditView($uuid, $name) {
        return view('pages.player-detail', [
            'genders' => User::getEnumValues('gender'),
            'dominantHandValues' => User::getEnumValues('dominant_hand'),
            'positions' => User::getEnumValues('position'),
            'clubs' => Club::all()
        ]);
    }

    function processPlayerEdit(Request $request, $uuid, $name) {
        $validationRules = [
            'profile-picture' => ['image', 'nullable'],
            'email' => ['required', 'email', 'unique:App\Models\User'],
            'last-name' => ['required', 'string'],
            'first-name' => ['required', 'string'],
            'gender' => ['required', 'string', Rule::in(User::getEnumValues('gender'))],
            'birth-date' => ['required', 'date', 'before:today'],
            'club' => ['required', 'string', Rule::in(Club::pluck('name'))],
            'dominant-hand' => ['required', 'string', Rule::in(User::getEnumValues('dominant_hand'))],
            'position' => ['required', 'string', Rule::in(User::getEnumValues('position'))],
            'height' => ['required','digits:3', 'min:0.01'],
            'weight' => ['required', 'digits_between:2,4', 'min:0.01']
        ];
    }

    function getAddGameStatsView($uuid, $name) {
        $clubId = User::find($uuid)->club->id;
        return view('pages.add-statistic', ['opponentClubs' => Club::getOpponentClubs($uuid)]);
    }

    function processAddGameStats(Request $request, $uuid, $name) {
        $validationRules = [
            'date' => ['required', 'date', 'before_or_equal:today'],
            'opponent-club' => ['required', 'string', Rule::in(Club::getOpponentClubs($uuid))],
            'team-goals' => ['required', 'integer', 'min:0'],
            'opponent-goals' => ['required', 'integer', 'min:0'],
            'personal-goals' => ['required', 'integer', 'min:0'],
            'seven-meter-throws' => ['required', 'integer', 'min:0', 'lte:personal-goals'],
            'played-minutes' => ['required', 'integer', 'between:0,60']
        ];
    }
}
