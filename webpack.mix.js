<<<<<<< HEAD
const { mix } = require('laravel-mix');
=======
let mix = require('laravel-mix');
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
