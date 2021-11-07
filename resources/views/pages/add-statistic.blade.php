@extends('layouts.master')

@section('main')
    <form method="POST" action="">  <!-- TODO add parameter with route -->
        @csrf
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required autofocus {{old('date')}}/>

        <label for="opponent-club">Opponent</label>
        <input type="text" id="opponent-club" name="opponent-club" required list="opponent-clubs" {{old('opponent-club')}} />  <!-- TODO no input possible -->
        <datalist id="opponent-clubs">
            @for ($i = 0; $i < count($opponentClubs); $i++)
            <option value={{$opponentClub}} />
            @endfor
        </datalist>

        <label for="team-goals">Team goals</label>
        <input type='number' id="team-goals" name="team-goals" required min="0" {{old('team-goals')}} />

        <label for="opponent-goals">Opponent goals</label>
        <input type="number" id="opponent-goals" name="opponent-goals" required min="0" {{old('opponent-goals')}} />

        <label for="personal-goals">Personal goals</label>
        <input type="number" id="personal-goals" name="personal-goals" required min="0" {{old('personal-goals')}} />

        <label for="seven-meter-throws">Seven meter throws</label>
        <input type="number" id="seven-meter-throws" name="seven-meter-throws" required min="0" {{old('seven-meter-throws')}} />

        <label for="played-minutes">Played minutes</label>
        <input type="number" id="played-minutes" name="played-minutes" required min="0" max="60" {{old('played-minutes')}} />

        <input type="submit" id="add-statistic" name="add-statistic" value="add statistic" />
    </form>
@endsection
