@extends('layouts.master')

@section('headInfo')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/players/players.css')}}" />
    <script src="{{asset('js/players/players.js')}}"></script>
@endsection

@section('main')
    <input type="text" id="player-search-bar" name="player-search-bar" placeholder="Search..." />

    <article id="players">
        @for ($i = 0; $i < count($players); $i++)
            <article class="player" data-uuid="{{$players[$i]->uuid}}" data-first-name="{{$players[$i]->first_name}}" data-last-name="{{$players[$i]->last_name}}">
                @if (file_exists(public_path('media/profile-pictures/' . $players[$i]->uuid)))
                    <image src="{{asset('media/profile-pictures/' . $players[$i]->uuid)}}" alt="picture of {{$players[$i]->fist_name}} {{$players[$i]->last_name}}" />
                @else
                    <image src="{{asset('media/profile-pictures/default.png')}}" alt="picture of {{$players[$i]->fist_name}} {{$players[$i]->last_name}}" />
                @endif
                <h1>{{$players[$i]->first_name}} {{$players[$i]->last_name}}</h1>
                <h2>{{$players[$i]->club->name}}</h2>
            </article>
        @endfor
    </article>
@endsection
