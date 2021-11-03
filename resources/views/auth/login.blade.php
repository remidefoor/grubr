@extends('layouts.master')

@section('main')
    <form action=''>  <!-- TODO add route -->
        @csrf

        <label for='email'>Email</label>
        <input type='email' id='email' name='email' required />

        <label for='password'>Password</label>
        <input type='password' id='password' name='password' required />

        <input type='submit' id='login' name='login' value='Login' />
    </form>
@endsection
