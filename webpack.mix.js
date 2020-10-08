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

mix.js([
    'resources/js/app.js',
    'resources/js/main.js',
],'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/profile_sass.scss', 'public/css')
mix.copy('resources/js/delete.js', 'public/js/delete.js')
mix.copy('resources/js/follow-button.js', 'public/js/follow-button.js')
mix.copy('resources/js/notifications.js', 'public/js/notifications.js')
mix.copy('resources/js/post-comment.js', 'public/js/post-comment.js')
