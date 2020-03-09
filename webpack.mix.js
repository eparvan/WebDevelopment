const mix = require('laravel-mix');

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

mix.scripts([
    'node_modules/bootstrap/dist/js/bootstrap',
    'node_modules/popper.js/dist/popper',
], 'public/js/app.js');
mix.scripts([
    'node_modules/aos/dist/aos.js',
    'node_modules/jquery/dist/jquery.js',
    'node_modules/owl.carousel/dist/owl.carousel.js',
], 'public/js/plugins.js');
mix.styles([
    'node_modules/owl.carousel/dist/assets/owl.carousel.css',
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/aos/dist/aos.css',
    'public/css/main.css',
], 'public/css/app.css');
