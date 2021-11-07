@extends('layouts.master')

@section('main')
    <article id="players">
        @for ($i = 0; $i < count($players); $i++))
                <article id="player" data-uuid="{{$players[$i]->uuid}}" data-first-name="{{$players[$i]->first_name}}" data-last-name="{{$players[$id]->last_name}}">
                    <image src="" alt="picture of {{$players[$i]->fist_name}} {{$players[$i]->last_name}}" title="picture of {{$players[$i]->first_name}} {{$players[$i]->last_name}}" />  <!-- add image source -->
                    <h1>{{$players[$i]->first_name}} {{$players[$i]->last_name}}</h1>
                    <h2>{{$players[$i]->club->name}}</h2>
                </article>
        @endfor
    </article>
@endsection
