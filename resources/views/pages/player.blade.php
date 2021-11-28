@extends('layouts.master')

@section('headInfo')
    <link rel="stylesheet" type="text/css" href="{{asset('css/players/player.css')}}" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js" integrity="sha256-7lWo7cjrrponRJcS6bc8isfsPDwSKoaYfGIHgSheQkk=" crossorigin="anonymous"></script>  <!-- TODO read -->
    <script type="module" src="{{asset('js/players/player.js')}}"></script>
@endsection

@section('main')
    @if (session('success'))
        <p id="success">{{session('success')}}</p>
    @endif

    <section id="player">
        @guest
            <h1>{{$player->first_name}} {{$player->last_name}}</h1>
        @else
            <h1>Hi, {{$player->first_name}}</h1>
        @endguest
        <div id="player-info">
            <img src="{{$profilePictureUrl}}" alt="Profile picture." title="Profile picture." />
            <div id="player-details">
                <p>
                    <em>Gender:</em>
                    {{$player->gender}}
                </p>
                <p>
                    <em>Date of birth:</em>
                    {{$player->birth_date}}
                </p>
                <p>
                    <em>Dominant hand:</em>
                    {{$player->dominant_hand}}
                </p>
                <p>
                    <em>Position:</em>
                    {{$player->position}}
                </p>
                <p>
                    <em>Height:</em>
                    {{$player->height}} m
                </p>
                <p>
                    <em>Weight:</em>
                    {{$player->weight}} kg
                </p>
                <p>
                    <em>Club:</em>
                    {{$player->club->name}}
                </p>
            </div>
        </div>
        @if (Auth::id() == $player->uuid)
            <div id="player-controls">
                <a href="{{route('get-add-statistic', ['uuid' => $player->uuid, 'firstName' => $player->first_name, 'lastName' => $player->last_name])}}">Add statistic</a>
                <a href="{{route('get-player-edit', ['uuid' => $player->uuid, 'firstName' => $player->first_name, 'lastName' => $player->last_name])}}">Edit profile</a>
            </div>
        @else
            <a id="emai" href="mailto:{{$player->email}}">Get in touch</a>
        @endif
    </section>

    <section id="statistics">
        <h1>Statistics</h1>
        <div id="charts">
        </div>
    </section>
@endsection
