const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/tour.js', 'public/js')
    .js('resources/js/contact.js', 'public/js')
    .js('resources/js/resume.js', 'public/js')
    .js('resources/js/home.js', 'public/js')
    .postCss('resources/css/tour.css', 'public/css', [
        require('tailwindcss'),
        require('postcss-nested'),
        require('postcss-import')
    ])
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
        require('postcss-nested'),
    ])
    .copyDirectory('resources/images', 'public/images');
