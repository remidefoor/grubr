<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function getRegisterView() {
        return view('pages.player-edit', [
            'genders' => User::getEnumValues('gender'),
            'clubs' => Club::all()->sort('name'),
            'dominantHandValues' => User::getEnumValues('dominant_hand'),
            'positions' => User::getEnumValues('position')
        ]);
    }

    function processRegister(Request $request) {
        //
    }

    function getLoginView() {
        return view('auth.login');
    }

    function processLogin(Request $request) {
        //
    }
}
