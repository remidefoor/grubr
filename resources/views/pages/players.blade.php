@extends('layouts.master')

@section('main')
    <article id='players'>
        @for ($i = 0; $i < count($users); $i++))
            <article>
                <image src='' alt='picture of {{$users[$i]->fist_name}} {{$users[$i]->last_name}}' title='picture of {{$users[$i]->first_name}} {{$users[$i]->last_name}}' />  <!-- add image source -->
                <h1>{{$users[$i]->first_name}} {{$users[$i]->last_name}}</h1>
                <h2>{{$users[$i]->club->name}}</h2>
            </article>
        @endfor
    </article>
@endsection
