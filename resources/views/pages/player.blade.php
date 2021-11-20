@extends('layouts.master')

@section('main')
    <section id="player">
        @guest
            <h1>{{$player->first_name}} {{$player->last_name}}</h1>
        @else
            <h1>Hi, {{$player->first_name}} {{$player->last_name}}!</h1>
        @endguest
        <div class="flexbox">
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
            <a href="{{route('get-add-statistic', ['uuid' => $player->uuid, 'firstName' => $player->first_name, 'lastName' => $player->last_name])}}">Add statistic</a>
        @else
            <a href="mailto:{{$player->email}}">Get in touch</a>
        @endif
    </section>

    <section id="statistics">
        <h1>Statistics</h1>
    </section>
@endsection
