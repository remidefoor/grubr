@extends('layouts.master')

@section('headInfo')
    <link rel="stylesheet" type="text/css" href="{{asset('css/players/add-statistic.css')}}" />
@endsection

@section('main')
    <div>
        @if ($errors->any())
        <ul id="errors">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    
        <form method="POST" action="">
            @csrf
            <label class="permanent" for="date">Date</label>
            <input type="date" id="date" name="date" required autofocus placeholder="Date" />
    
            <label for="opponent-club">Opponent</label>
            <input type="text" id="opponent-club" name="opponent-club" required list="opponent-clubs" placeholder="Opponent" />
            <datalist id="opponent-clubs">
                @for ($i = 0; $i < count($opponentClubs); $i++)
                    <option value="{{$opponentClubs[$i]->name}}" />
                @endfor
            </datalist>
    
            <label for="team-goals">Team goals</label>
            <input type='number' id="team-goals" name="team-goals" required min="0" placeholder="Team goals" />
    
            <label for="opponent-goals">Opponent goals</label>
            <input type="number" id="opponent-goals" name="opponent-goals" required min="0" placeholder="Opponent goals" />
    
            <div id="personal-goals-group">
                <label for="personal-goals">Personal goals</label>
                <input type="number" id="personal-goals" name="personal-goals" required min="0" placeholder="Personal goals" />
                <p>including</p>
                <label for="seven-meter-throws">Seven meter throws</label>
                <input type="number" id="seven-meter-throws" name="seven-meter-throws" required min="0" placeholder="Seven meter throws" />
            </div>
    
            <label for="played-minutes">Played minutes</label>
            <input type="number" id="played-minutes" name="played-minutes" required min="0" max="60" placeholder="Played minutes" />
    
            <input type="submit" id="add-statistic" name="add-statistic" value="Add statistic" />
        </form>
    </div>
@endsection
