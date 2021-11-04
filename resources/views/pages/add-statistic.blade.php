@extends('layouts.master')

@section('main')
    <form method="POST" action="">  <!-- TODO add parameter with route -->
        @csrf
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required />

        <label for="opponent-club">Opponent</label>
        <input type="text" id="opponent-club" name="opponent-club" required list="opponent-clubs" />
        <datalist id="opponent-clubs">
            @for ($i = 0; $i < count($opponentClubs); $i++)
            <option value={{$opponentClub}} />
            @endfor
        </datalist>

        <label for="team-goals">Team goals</label>
        <input type='number' id="team-goals" name="team-goals" required />

        <label for="opponent-goals">Opponent goals</label>
        <input type="number" id="opponent-goals" name="opponent-goals" required />

        <label for="personal-goals">Personal goals</label>
        <input type="number" id="personal-goals" name="personal-goals" required />

        <label for="seven-meter-throws">Seven meter throws</label>
        <input type="number" id="seven-meter-throws" name="seven-meter-throws" required />

        <label for="played-minutes">Played minutes</label>
        <input type="number" id="played-minutes" name="played-minutes" required />
    </form>
@endsection
