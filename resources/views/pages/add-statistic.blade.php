@extends('layouts.master')

@section('main')
    @if ($errors->any())
    <ul id="errors">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <form method="POST" action="">  <!-- TODO add parameter with route -->
        @csrf
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required autofocus placeholder="Date" {{old('date')}}/>

        <label for="opponent-club">Opponent</label>
        <input type="text" id="opponent-club" name="opponent-club" required list="opponent-clubs" placeholder="Opponent" {{old('opponent-club')}} />  <!-- TODO no input possible -->
        <datalist id="opponent-clubs">
            @for ($i = 0; $i < count($opponentClubs); $i++)
                <option value="{{$opponentClubs[$i]->name}}" />
            @endfor
        </datalist>

        <label for="team-goals">Team goals</label>
        <input type='number' id="team-goals" name="team-goals" required min="0" placeholder="Team goals" {{old('team-goals')}} />

        <label for="opponent-goals">Opponent goals</label>
        <input type="number" id="opponent-goals" name="opponent-goals" required min="0" placeholder="Opponent goals" {{old('opponent-goals')}} />

        <label for="personal-goals">Personal goals</label>
        <input type="number" id="personal-goals" name="personal-goals" required min="0" placeholder="Personal goals" {{old('personal-goals')}} />

        <label for="seven-meter-throws">Seven meter throws</label>
        <input type="number" id="seven-meter-throws" name="seven-meter-throws" required min="0" placeholder="Seven meter throws" {{old('seven-meter-throws')}} />

        <label for="played-minutes">Played minutes</label>
        <input type="number" id="played-minutes" name="played-minutes" required min="0" max="60" placeholder="Played minutes" {{old('played-minutes')}} />

        <input type="submit" id="add-statistic" name="add-statistic" value="Add statistic" />
    </form>
@endsection
