const mix = require('laravel-mix');

mix.sass('public/css/style.scss', 'public/css/style.css')
    .sass('public/css/players/players.scss', 'public/css/players/players.css')
    .sass('public/css/auth/login.scss', 'public/css/auth/login.css');
