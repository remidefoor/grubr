<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scout.me</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />  <!-- TODO read -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />  <!-- TODO read -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" />  <!-- TODO read -->
    <link rel="stylesheet" type="text/css" href="{{asset("css/reset.css")}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset("css/style.css")}}"/>
    @yield('headInfo')
</head>
<body>
    <header>
        <nav>
            <div>
                <a href="{{route("get-players")}}">players</a>
                @auth
                    <a href="">my profile</a>  <!-- TODO add route -->
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
