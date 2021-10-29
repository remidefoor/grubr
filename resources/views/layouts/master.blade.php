<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scout.me</title>
    <link rel='stylesheet' type='text/css' href='{{asset('css/reset.css')}}'/>
    <link rel='stylesheet' type='text/css' href='{{asset('css/style.css')}}'/>
    @yield('headInfo')
</head>
<body>
    <header>
        <p>login</p>
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        <p>&copy; Rémi Defoor</p>
    </footer>
    
</body>
</html>