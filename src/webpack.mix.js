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

var array = [
    'home',
    'advertisement',
    'search'
];

foreach(array as element) {
    var variavel = require(element);
    mix.sass(
        variavel.arquivosScss,
        variavel.saida
    );
}

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);

mix.sass(
    [
        '/resources/sass/module/button.scss',
        '/resources/sass/module/color.scss',
        '/resources/sass/module/input.scss',
        '/resources/sass/page/home/footer.scss',
        '/resources/sass/page/home/header.scss',
        '/resources/sass/page/home/photo.scss'
    ],
    '/public/css/home.css'
);