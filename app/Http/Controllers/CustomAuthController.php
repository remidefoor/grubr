<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Models\User;
use GdImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class CustomAuthController extends Controller
{

    public function getLoginView() {
        return view('auth.login');
    }

    private function validateCredentials(Request $request) {
        $validationRules = [
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ];

        return $request->validate($validationRules);
    }

    public function processLogIn(Request $request) {
        $data = $this->validateCredentials($request);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('get-player', [
                'uuid' => Auth::user()->uuid,
                'firstName' => Auth::user()->first_name,
                'lastName' => Auth::user()->last_name
            ]);
        }
        return redirect()->back()->withErrors('invalid credentials');
    }

    public function getRegisterView() {
        return view('auth.register', [
            'genders' => User::getEnumValues('gender'),
            'clubs' => Club::orderBy('name')->get(),
            'dominantHandValues' => User::getEnumValues('dominant_hand'),
            'positions' => User::getEnumValues('position')
        ]);
    }

    private function validatePlayer(Request $request) {
        $validationRules = [
            'profile-picture' => ['image', 'nullable'],
            'email' => ['required', 'email', 'unique:App\Models\User'],
            'password' => ['required', 'string'],
            'last-name' => ['required', 'string'],
            'first-name' => ['required', 'string'],
            'gender' => ['required', 'string', Rule::in(User::getEnumValues('gender'))],
            'birth-date' => ['required', 'date', 'before:today'],
            'club' => ['required', 'string', Rule::in(Club::pluck('name')->all())],
            'dominant-hand' => ['required', 'string', Rule::in(User::getEnumValues('dominant_hand'))],
            'position' => ['required', 'string', Rule::in(User::getEnumValues('position'))],
            'height' => ['required','numeric', 'min:0.01'],
            'weight' => ['required', 'numeric', 'min:0.01']
        ];

        return $request->validate($validationRules);
    }

    private function createPlayer($data) {
      return User::create([
        'uuid' => Str::uuid()->toString(),
        'last_name' => $data['last-name'],
        'first_name' => $data['first-name'],
        'gender' => $data['gender'],
        'birth_date' => $data['birth-date'],
        'email' => $data['email'],
        'dominant_hand' => $data['dominant-hand'],
        'position' => $data['position'],
        'height' => $data['height'],
        'weight' => $data['weight'],
        'club_id' => Club::where('name', '=', $data['club'])->value('id'),
        'password' => Hash::make($data['password'])
      ]);
    }

    private function storeProfilePicture(Request $request, $uuid) {
        $request->file('profile-picture')->storeAs('profile-pictures', $uuid);
    }

    public function processRegister(Request $request) {           
        $data = $this->validatePlayer($request);
        $player = $this->createPlayer($data);
        $this->storeProfilePicture($request, $player->uuid);

        Auth::login($player);
         
        return redirect()->route('get-player', [
            'uuid' => $player->uuid,
            'firstName' => $player->first_name,
            'lastName' => $player->last_name
        ]);
    }

    public function processLogOut() {
        Session::flush();
        Auth::logout();
  
        return redirect()->route('get-players');
    }
}
