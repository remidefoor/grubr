@extends('layouts.master')

@section('headInfo')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" integrity="sha512-0SPWAwpC/17yYyZ/4HSllgaK7/gg9OlVozq8K7rf3J8LvCjYEEIfzzpnA2/SSjpGIunCSD18r3UhvDcu/xncWA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/auth/register.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js" integrity="sha512-ooSWpxJsiXe6t4+PPjCgYmVfr1NS5QXJACcR/FPpsdm6kqG1FmQ2SVyg2RXeVuCRBLr0lWHnWJP6Zs1Efvxzww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="{{asset('js/auth/register.js')}}"></script>
@endsection

@section('main')
    @if ($errors->any())
    <ul id="errors">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <form method="POST" action="{{route('post-register')}}" enctype="multipart/form-data">
        @csrf
        <fieldset id="profile-picture">
            <video id="video-input" class="hidden">Video stream not available.</video>

            <canvas class="hidden">
            </canvas>

            <div id="output-wrapper">
                <img id="output" src="{{asset('media/profile-pictures/default.png')}}" alt="profile picture" title="profile picture" />  <!-- TODO crop & display uploaded profile picture -->
            </div>

            <div id="profile-picture-controls">
                <label id="file-input-substitute" for="file-input">File input</label>
                <input type="file" id="file-input" name="file-input" accept="image/*" capture="image/*" />
                <input type="submit" id="use-camera" name="use-camera" value="Use camera" />
                <input type="submit" id="take-picture" name="take-picture" class="hidden" value="Take picture" />
                <input type="submit" id="take-new-picture" name="take-new-picture" class="hidden" value="Take new picture" />
            </div>
        </fieldset>

        <fieldset id="player-info">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" required placeholder="Email address" />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Password" />

            <label for="first-name">First name</label>
            <input type="text" id="first-name" name="first-name" required placeholder="First name" />

            <label for="last-name">Last name</label>
            <input type="text" id="last-name" name="last-name" required  placeholder="Last name" />

            <div id="genders">
                @foreach ($genders as $gender)   
                    <input type="radio" id={{$gender}} name="gender" required value="{{$gender}}" />
                    <label class="permanent" for="{{$gender}}">{{$gender}}</label> 
                @endforeach
            </div>

            <label class="permanent" for="birth-date">Date of birth</label>
            <input type="date" id="birth-date" name="birth-date" required />

            <label for="club">Club</label>
            <input id="club" name="club" required list="clubs" placeholder="Club" />  <!-- TODO no input possible -->
            <datalist id="clubs" name="clubs">
                @for ($i = 0; $i < count($clubs); $i++)
                    <option value="{{$clubs[$i]->name}}" />  <!-- TODO optgroup per country -->
                @endfor
            </datalist>

            <label class="permanent" for="dominant-hand">Dominant hand</label>
            <select id="dominant-hand" name="dominant-hand">
                @foreach ($dominantHandValues as $dominantHandValue)
                    <option value="{{$dominantHandValue}}">{{$dominantHandValue}}</option>
                @endforeach
            </select>

            <label class="permanent" for="position">Position</label>
            <select id="position" name="position">
                @foreach ($positions as $position)
                    <option value="{{$position}}">{{$position}}</option>
                @endforeach
            </select>

            <label for="height">Height (m)</label>
            <input type="number" id="height" name="height" required min="0.01" step="0.01" placeholder="Height (m)" />

            <label for="weight">Weight (kg)</label>
            <input type="number" id="weight" name="weight" required min="0.1" step="0.1" placeholder="Weight (kg)" />

            <input type="submit" id="register" name="register" value="Register" />
        </fieldset>
    </form>
@endsection
