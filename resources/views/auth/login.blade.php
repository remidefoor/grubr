@extends('layouts.master')

@section('headInfo')
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
@endsection

@section('main')
    <div>
        <form action="{{route('post-login')}}">
            @csrf

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required autofocus placeholder="Email" {{old('email')}} />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Password" {{old('password')}} />

            <input type="submit" id="login" name="login" value="log in" />
        </form>

        <p>No account?</p>

        <a href="{{route('get-register')}}">Create one</a>
    </div>
@endsection
