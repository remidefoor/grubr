@extends('layouts.master')

@section('main')
    <form method="POST" action="" enctype="multipart/form-data">  <!-- TODO add parameter with route -->
        @csrf
        <img src="" alt="profile picture" title="profile picture" />  <!-- display uploaded profile picture -->
        <input type="file" id="profile-picture" name="profile-picture" />

        <label for="email">Email address</label>
        <input type="email" id="email" name="email" required />

        @guest
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
        @endguest

        <label for="first-name">First name</label>
        <input type="text" id="first-name" name="last-name" required />

        <label for="last-name">Last name</label>
        <input type="text" id="last-name" name="first-name" required />

        @foreach ($genders as $gender)
            <label for="{{$gender}}">{{$gender}}</label>    
            <input type="radio" id={{$gender}} name="gender" required />
        @endforeach

        <label for="birth-date">Date of birth</label>
        <input type="date" id="birth-date" name="birth-date" required />

        <label for="club">Club</label>
        <input id="club" name="club" required list="clubs" />
        <datalist id="clubs" name="clubs">
            @for ($i = 0; $i < count($clubs); $i++)
                <option value={{$clubs[$i]->name}} />  <!-- TODO optgroup per country -->
            @endfor
        </datalist>

        <label for="dominant-hand">Dominant hand</label>
        <select id="dominant-hand" name="dominant-hand">
            @foreach ($dominantHandValues as $dominantHandValue)
                <option value={{$dominantHandValue}}>{{$dominantHandValue}}</option>
            @endforeach
        </select>

        <label for="position"></label>
        <select id="position" name="position">
            @foreach ($positions as $position)
                <option value={{$position}}>{{$position}}</option>
            @endforeach
        </select>

        <label for="height"></label>
        <input type="number" id="height" name="height" required />

        <label for="weight"></label>
        <input type="number" id="weight" name="weight" required />

        @guest
            <input type="submit" id="register" name="register" value="register" />
        @else
        <input type="submit" id="edit-player" name="register" value="update info" />
        @endguest
    </form>
@endsection
