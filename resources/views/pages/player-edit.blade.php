@extends('layouts.master')

@section('headInfo')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" integrity="sha512-0SPWAwpC/17yYyZ/4HSllgaK7/gg9OlVozq8K7rf3J8LvCjYEEIfzzpnA2/SSjpGIunCSD18r3UhvDcu/xncWA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/auth/register.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js" integrity="sha512-ooSWpxJsiXe6t4+PPjCgYmVfr1NS5QXJACcR/FPpsdm6kqG1FmQ2SVyg2RXeVuCRBLr0lWHnWJP6Zs1Efvxzww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/auth/register.js')}}"></script>
@endsection

@section('main')
    @if ($errors->any())
        <ul id="errors">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{route('post-player-edit', ['uuid' => $player->uuid, 'firstName' => $player->first_name, 'lastName' => $player->last_name])}}" enctype="multipart/form-data">  <!-- TODO add parameter with route -->
        @csrf
        <fieldset id="profile-picture">
            <video id="video-input" class="hidden">Video stream not available.</video>

            <canvas class="hidden">
            </canvas>

            <div id="output-wrapper">
                <img id="output" src="{{$profilePictureUrl}}" alt="profile picture" title="profile picture" />  <!-- TODO crop & display uploaded profile picture -->
            </div>

            <div id="profile-picture-controls">
                <label for="file-input">File input</label>
                <input type="file" id="file-input" name="file-input" accept="image/*" capture="image/*" />
                <input type="submit" id="use-camera" name="use-camera" value="Use camera" />
                <input type="submit" id="take-picture" name="take-picture" class="hidden" value="Take picture" />
                <input type="submit" id="take-new-picture" name="take-new-picture" class="hidden" value="Take new picture" />
            </div>
        </fieldset>

        <fieldset id="player-info">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" required placeholder="Email address" value="{{$player->email}}" />

            <label for="first-name">First name</label>
            <input type="text" id="first-name" name="first-name" required placeholder="First name" value="{{$player->first_name}}" />

            <label for="last-name">Last name</label>
            <input type="text" id="last-name" name="last-name" required  placeholder="Last name" value="{{$player->last_name}}" />

            <div id="genders">
                @foreach ($genders as $gender)
                    @if ($player->gender == $gender)
                        <input type="radio" id={{$gender}} name="gender" required checked="checked" value="{{$gender}}" />
                    @else
                        <input type="radio" id={{$gender}} name="gender" required value="{{$gender}}" />
                    @endif
                    <label class="permanent" for="{{$gender}}">{{$gender}}</label>
                @endforeach
            </div>

            <label class="permanent" for="birth-date">Date of birth</label>
            <input type="date" id="birth-date" name="birth-date" required value="{{$player->birth_date}}" />

            <label for="club">Club</label>
            <input id="club" name="club" required list="clubs" placeholder="Club" value="{{$player->club->name}}" />  <!-- TODO no input possible -->
            <datalist id="clubs" name="clubs">
                @for ($i = 0; $i < count($clubs); $i++)
                    <option value="{{$clubs[$i]->name}}" />  <!-- TODO optgroup per country -->
                @endfor
            </datalist>

            <label class="permanent" for="dominant-hand">Dominant hand</label>
            <select id="dominant-hand" name="dominant-hand">
                @foreach ($dominantHandValues as $dominantHandValue)
                    @if ($player->dominant_hand == $dominantHandValue)
                        <option selected="selected" value={{$dominantHandValue}}>{{$dominantHandValue}}</option>
                    @else
                        <option value="{{$dominantHandValue}}">{{$dominantHandValue}}</option>
                    @endif
                @endforeach
            </select>

            <label class="permanent" for="position">Position</label>
            <select id="position" name="position">
                @foreach ($positions as $position)
                    @if ($player->position == $position)
                        <option selected="selected" value="{{$position}}">{{$position}}</option>
                    @else
                        <option value="{{$position}}">{{$position}}</option>
                    @endif
                @endforeach
            </select>

            <label for="height">Height (m)</label>
            <input type="number" id="height" name="height" required min="0.01" step="0.01" placeholder="Height (m)" value="{{$player->height}}" />

            <label for="weight">Weight (kg)</label>
            <input type="number" id="weight" name="weight" required min="0.1" step="0.1" placeholder="Weight (kg)" value="{{$player->weight}}" />

            <input type="submit" id="edit-player" name="edit-player" value="Update profile" />
        </fieldset>
    </form>
@endsection
