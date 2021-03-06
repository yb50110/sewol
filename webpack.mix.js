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

mix
    .copy('resources/images', 'public/images')

    .js('resources/js/app.js', 'public/js')
    .js('resources/js/voice-recognition.js', 'public/js')
    .js('resources/js/timeline.js', 'public/js')
    .js('resources/js/messages.js', 'public/js')

    .sass('resources/sass/app.scss', 'public/css')
        .options({
            processCssUrls: false
        })
;
