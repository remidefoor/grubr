@extends('layouts.master')

@section('main')
    <form action="">  <!-- TODO add route -->
        @csrf

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required autofocus {{old('email')}} />

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required {{old('password')}} />

        <input type="submit" id="login" name="login" value="log in" />
    </form>
@endsection
