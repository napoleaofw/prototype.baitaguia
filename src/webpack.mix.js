const { mix } = require('laravel-mix');

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

// Home
mix.sass('resources/assets/sass/page/home/style.scss', 'public/css/home.css');

// Search
mix.sass('resources/assets/sass/page/search/style.scss', 'public/css/search.css');