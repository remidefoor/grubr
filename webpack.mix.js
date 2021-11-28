const mix = require('laravel-mix');

mix.sass('public/css/_style.scss', 'public/css/style.css')
    .sass('public/css/players/_players.scss', 'public/css/players/players.css')
    .sass('public/css/players/_player.scss', 'public/css/players/player.css')
    .sass('public/css/auth/_register.scss', 'public/css/auth/register.css')
    .sass('public/css/auth/_login.scss', 'public/css/auth/login.css');
