@extends('layouts.master')

@section('headInfo')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" />  <!-- TODO read -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/players/players.css')}}" />
    <script src="{{asset('js/players/players.js')}}"></script>
@endsection

@section('main')
    <article id="players">
        @for ($i = 0; $i < count($players); $i++)
                <a href="{{route('get-player', ['uuid' => $players[$i]->uuid, 'firstName' => $players[$i]->first_name, 'lastName' => $players[$i]->last_name])}}">
                    <article class="player">
                        @if (file_exists(public_path('media/profile-pictures/' . $players[$i]->uuid)))
                            <image src="{{asset('media/profile-pictures/' . $players[$i]->uuid)}}" alt="picture of {{$players[$i]->fist_name}} {{$players[$i]->last_name}}" />
                        @else
                            <image src="{{asset('media/profile-pictures/default.png')}}" alt="picture of {{$players[$i]->fist_name}} {{$players[$i]->last_name}}" />
                        @endif
                        <h1>{{$players[$i]->first_name}} {{$players[$i]->last_name}}</h1>
                        <h2>{{$players[$i]->club->name}}</h2>
                    </article>
                </a>
        @endfor
    </article>
@endsection
