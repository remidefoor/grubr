<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Statistic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PlayerController extends Controller
{
    public function getPlayersView() {
        return view('pages.players', ['players' => User::all()]);
    }

    public function getPlayerView($uuid, $firstName, $lastName) {
        //
    }

    public function getPlayerEditView($uuid, $firstName, $lastName) {
        return view('pages.player-detail', [
            'genders' => User::getEnumValues('gender'),
            'dominantHandValues' => User::getEnumValues('dominant_hand'),
            'positions' => User::getEnumValues('position'),
            'clubs' => Club::all()
        ]);
    }

    public function processPlayerEdit(Request $request, $uuid, $firstName, $lastName) {
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

    public function getAddStatisticView($uuid, $firstName, $lastName) {
        return view('pages.add-statistic', ['opponentClubs' => Club::getOpponentClubs($uuid)]);
    }

    public function validateStatistic(Request $request, $uuid) {
        $validationRules = [
            'date' => ['required', 'date', 'before_or_equal:today'],
            'opponent-club' => ['required', 'string', Rule::in(Club::getOpponentClubs($uuid))],
            'team-goals' => ['required', 'integer', 'min:0'],
            'opponent-goals' => ['required', 'integer', 'min:0'],
            'personal-goals' => ['required', 'integer', 'min:0'],
            'seven-meter-throws' => ['required', 'integer', 'min:0', 'lte:personal-goals'],
            'played-minutes' => ['required', 'integer', 'between:0,60']
        ];

        return $request->validate($validationRules);
    }

    public function createStatistic($uuid, $data) {
        Statistic::create([
            'user_uuid' => $uuid,
            'date' => $data['date'],
            'opponent_club_id' => Club::where('name', '=', $data['opponent-club']->value('id')),
            'team_goals' => $data['team-goals'],
            'opponent_goals' => $data['opponent-goals'],
            'personal_goals' => $data['personal-goals'],
            'seven_meter_trhows' => $data['seven-meter-throws'],
            'played_minutes' => $data['played-minutes']
        ]);
    }

    public function processAddStatistic(Request $request, $uuid, $firstName, $lastName) {
        $data = validateStatistic($request);
        createStatistic($uuid, $data);

        return redirect()->route('get-player', [
            'uuid' => $uuid,
            'firstName' => $firstName,
            'lastName' => $lastName
    ]);
    }
}
