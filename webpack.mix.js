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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [ require('tailwindcss') ])
    // .sass('resources/sass/app.scss', 'public/css', [ require('tailwindcss') ])
    .js('resources/js/modal.js', 'public/js')
    .js('resources/js/comment.js', 'public/js')
    .sourceMaps();

mix.webpackConfig({
    stats: {
        children: true,
    },
});
