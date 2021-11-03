<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scout.me</title>
    <!-- <link rel='stylesheet' type='text/css' href='{{asset('css/reset.css')}}'/> -->
    <link rel='stylesheet' type='text/css' href='{{asset('css/style.css')}}'/>
    @yield('headInfo')
</head>
<body>
    <header>
        <nav>
            <a href={{route('get-players')}}>players</a>

            @guest
                <a href=''>login</a>  <!-- TODO add route -->
                <a href=''>register</a>  <!-- TODO add route name -->
            @else
                <a href=''>my profile</a>  <!-- TODO add parameter with route -->
                <a href=''>sign out</a>  <!-- TODO add route name -->
            @endguest
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
