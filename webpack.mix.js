// Javascript dependencies are compiled with Laravel Mix https://laravel.com/docs/5.5/mix
// See also: https://github.com/JeffreyWay/laravel-mix/tree/master/docs
let mix = require('laravel-mix');

mix
    // Make sure the public path is declared
    .setPublicPath('public/application/themes/dreamrs')

    .sass('resources/sass/style.scss', 'public/application/themes/dreamrs/css')
