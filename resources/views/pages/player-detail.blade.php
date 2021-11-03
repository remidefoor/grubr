@extends('layouts.master')

@section('main')
    <form method='POST' action=''>  <!-- TODO provide action -->
        @csrf
        <label for='email'>Email address</label>
        <input type='email' id='email' name='email' required />

        <label for='first-name'>First name</label>
        <input type='text' id='first-name' name='last-name' required />

        <label for='last-name'>Last name</label>
        <input type='text' id='last-name' name='first-name' required />

        @foreach ($genders as $gender)
            <label for='{{$gender}}'>{{$gender}}</label>    
            <input type='radio' id={{$gender}} name='gender' required />
        @endforeach

        <label for='birth-date'>Date of birth</label>
        <input type='date' id='birth-date' name='birth-date' required />

        <label for='club'>Club</label>
        <input id='club' name='club' list='clubs' required />
        <datalist id='clubs' name='clubs'>
            @for ($i = 1; $i < count($clubs); $i++)
                <option value={{$clubs[$i]->name}} />
            @endfor
        </datalist>

        <label for='dominant-hand'>Dominant hand</label>
        <select id='dominant-hand' name='dominant-hand'>
            @foreach ($dominantHandValues as $dominantHandValue)
                <option value={{$dominantHandValue}}>{{$dominantHandValue}}</option>
            @endforeach
        </select>

        <label for='position'></label>
        <select id='position' name='position'>
            @foreach ($positions as $position)
                <option value={{$position}}>{{$position}}</option>
            @endforeach
        </select>

        <label for='height'></label>
        <input type='number' id='height' name='height' required />

        <label for='weight'></label>
        <input type='number' id='weight' name='weight' required />

        @guest
            <input type='submit' id='register' name='register' value='register' />
        @else
        <input type='submit' id='edit-player' name='register' value='update info' />
        @endguest
    </form>
@endsection
