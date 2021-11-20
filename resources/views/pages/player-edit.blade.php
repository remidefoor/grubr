@extends('layouts.master')

@section('main')
    <form method="POST" action="{{route('post-player-edit', ['uuid' => $player->uuid, 'firstName' => $player->first_name, 'lastName' => $player->last_name])}}" enctype="multipart/form-data">  <!-- TODO add parameter with route -->
        @csrf
        <img src="{{$profilePictureUrl}}" alt="profile picture" title="profile picture" />  <!-- TODO display uploaded profile picture -->
        <input type="file" id="profile-picture" name="profile-picture" accept="image/*" capture="image/*" {{old('profile-picture')}} />

        <label for="email">Email address</label>
        <input type="email" id="email" name="email" required placeholder="Email address" value="{{$player->email}}" {{old('email')}} />

        <label for="first-name">First name</label>
        <input type="text" id="first-name" name="first-name" required placeholder="First name" value="{{$player->first_name}}" {{old('last-name')}} />

        <label for="last-name">Last name</label>
        <input type="text" id="last-name" name="last-name" required  placeholder="Last name" value="{{$player->last_name}}" {{old('first-name')}} />

        @foreach ($genders as $gender)
            <label class="permanent" for="{{$gender}}">{{$gender}}</label>
            @if ($player->gender == $gender)
                <input type="radio" id={{$gender}} name="gender" required selected="selected" value="{{$gender}}" {{old('gender')}} />
            @else
                <input type="radio" id={{$gender}} name="gender" required value="{{$gender}}" {{old('gender')}} />
            @endif
        @endforeach

        <label for="birth-date">Date of birth</label>
        <input type="date" id="birth-date" name="birth-date" required value="{{$player->birth_date}}" {{old('birth-date')}} />

        <label for="club">Club</label>
        <input id="club" name="club" required list="clubs" placeholder="Club" value="{{$player->club->name}}" {{old('club')}} />  <!-- TODO no input possible -->
        <datalist id="clubs" name="clubs">
            @for ($i = 0; $i < count($clubs); $i++)
                <option value="{{$clubs[$i]->name}}" />  <!-- TODO optgroup per country -->
            @endfor
        </datalist>

        <label class="permanent" for="dominant-hand">Dominant hand</label>
        <select id="dominant-hand" name="dominant-hand" {{old('dominant-hand')}}>
            @foreach ($dominantHandValues as $dominantHandValue)
                @if ($player->dominant_hand == $dominantHandValue)
                    <option selected="selected" value={{$dominantHandValue}}>{{$dominantHandValue}}</option>
                @else
                    <option value="{{$dominantHandValue}}">{{$dominantHandValue}}</option>
                @endif
            @endforeach
        </select>

        <label class="permanent" for="position">Position</label>
        <select id="position" name="position" {{old('position')}}>
            @foreach ($positions as $position)
                @if ($player->position == $position)
                    <option selected="selected" value={{$position}}>{{$position}}</option>
                @else
                    <option value="{{$position}}">{{$position}}</option>
                @endif
            @endforeach
        </select>

        <label for="height">Height</label>
        <input type="number" id="height" name="height" required min="0.01" step="0.01" placeholder="Height" value="{{$player->height}}" {{old('height')}} />

        <label for="weight">Weight</label>
        <input type="number" id="weight" name="weight" required min="0.1" step="0.1" placeholder="Weight" value="{{$player->weight}}" {{old('weight')}} />

        <input type="submit" id="edit-player" name="edit-player" value="Update profile" />
    </form>
@endsection
