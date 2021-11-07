<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class CustomAuthController extends Controller
{

    public function getLoginView()
    {
        return view('auth.login');
    }  

    public function processLogin(Request $request)
    {
        $validationRules = [
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ];

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function getRegisterView()
    {
        return view('pages.player-edit', [
            'genders' => User::getEnumValues('gender'),
            'clubs' => Club::all(),
            'dominantHandValues' => User::getEnumValues('dominant_hand'),
            'positions' => User::getEnumValues('position')
        ]);
    }  

    public function customRegistration(Request $request)
    {  
        $validationRules = [
            'profile-picture' => ['image', 'nullable'],
            'email' => ['required', 'email', 'unique:App\Models\User'],
            'password' => ['required', 'string'],
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

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
