const mix = require('laravel-mix');

mix.sass('public/css/style.scss', 'public/css/style.css')
    .sass('public/css/login.scss', 'public/css/login.css');
