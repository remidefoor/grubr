@extends('layouts.master')

@section('main')
    <form method="POST" action="" enctype="multipart/form-data">  <!-- TODO add parameter with route -->
        @csrf
        <img src="" alt="profile picture" title="profile picture" />  <!-- TODO display uploaded profile picture -->
        <input type="file" id="profile-picture" name="profile-picture" accept="image/*" autofocus capture="image/*" {{old('profile-picture')}} />

        <label for="email">Email address</label>
        <input type="email" id="email" name="email" required placeholder="Email address" {{old('email')}} />

        @guest
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Password" {{old('password')}} />
        @endguest

        <label for="first-name">First name</label>
        <input type="text" id="first-name" name="last-name" required placeholder="First name" {{old('last-name')}} />

        <label for="last-name">Last name</label>
        <input type="text" id="last-name" name="first-name" required  placeholder="Last name" {{old('first-name')}} />

        @foreach ($genders as $gender)
            <label for="{{$gender}}">{{$gender}}</label>    
            <input type="radio" id={{$gender}} name="gender" required {{old('gender')}} />  <!-- TODO show label -->
        @endforeach

        <label for="birth-date">Date of birth</label>
        <input type="date" id="birth-date" name="birth-date" required {{old('birth-date')}} />  <!-- TODO show label -->

        <label for="club">Club</label>
        <input id="club" name="club" required list="clubs" placeholder="Club" {{old('club')}} />  <!-- TODO no input possible -->
        <datalist id="clubs" name="clubs">
            @for ($i = 0; $i < count($clubs); $i++)
                <option value={{$clubs[$i]->name}} />  <!-- TODO optgroup per country -->
            @endfor
        </datalist>

        <label for="dominant-hand">Dominant hand</label>
        <select id="dominant-hand" name="dominant-hand" {{old('dominant-hand')}}>
            @foreach ($dominantHandValues as $dominantHandValue)
                <option value={{$dominantHandValue}}>{{$dominantHandValue}}</option>
            @endforeach
        </select>

        <label for="position">Position</label>
        <select id="position" name="position" {{old('position')}}>
            @foreach ($positions as $position)
                <option value={{$position}}>{{$position}}</option>
            @endforeach
        </select>

        <label for="height">Height</label>
        <input type="number" id="height" name="height" required min="0.01" step="0.01" placeholder="Height" {{old('height')}} />

        <label for="weight">Weight</label>
        <input type="number" id="weight" name="weight" required min="0.1" step="0.1" placeholder="Weight" {{old('weight')}} />

        @guest
            <input type="submit" id="register" name="register" value="Register" />
        @else
        <input type="submit" id="edit-player" name="edit-player" value="Update profile" />
        @endguest
    </form>
@endsection