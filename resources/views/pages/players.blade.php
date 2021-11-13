@extends('layouts.master')

@section('headInfo')
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/players.css')}}"
@endsection

@section('main')
    <article id="players">
        @for ($i = 0; $i < count($players); $i++)
                <article class="player" data-uuid="{{$players[$i]->uuid}}" data-first-name="{{$players[$i]->first_name}}" data-last-name="{{$players[$i]->last_name}}">
                    <image src="{{asset('media/profile-pictures/default.png')}}" alt="picture of {{$players[$i]->fist_name}} {{$players[$i]->last_name}}" title="picture of {{$players[$i]->first_name}} {{$players[$i]->last_name}}" />  <!-- add image source -->
                    <h1>{{$players[$i]->first_name}} {{$players[$i]->last_name}}</h1>
                    <h2>{{$players[$i]->club->name}}</h2>
                </article>
        @endfor
    </article>
@endsection
