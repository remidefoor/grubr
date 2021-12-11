<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grubr.com</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" />
    <link rel="stylesheet" type="text/css" href="{{asset("css/reset.css")}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset("css/style.css")}}"/>
    <script src="{{asset('js/script.js')}}"></script>
    @yield('headInfo')
</head>
<body>
    <header>
        <svg id="hamburger-menu" width="50" height="44" fill="#000000">
            <rect x="0" y="0" width="50" height="10" rx="3" />
            <rect x="0" y="17" width="50" height="10" rx="3" />
            <rect x="0" y="34" width="50" height="10" rx="3" />
        </svg>
        <nav>
            <div>
                <a href="{{route("get-players")}}">players</a>
                @auth
                    <a href="{{route('get-player', ['uuid' => Auth::user()->uuid, 'firstName' => Auth::user()->first_name, 'lastName' => Auth::user()->last_name])}}">my profile</a>
                @endauth
            </div>
            <div>
                @guest
                    <a href="{{route('get-login')}}">log in</a>
                    <a id="register" href="{{route('get-register')}}">register</a>
                @else
                    <a href="{{route('get-logout')}}">log out</a>
                @endguest
            </div>
        </nav>
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        <p>&copy; Rémi Defoor</p>
    </footer>
</body>
</html>
