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
    .js('resources/assets/web/js/app.js', 'public/assets/web/js')
    .js('resources/assets/web/js/vendor.js', 'public/assets/web/js')
    .sass('resources/assets/web/scss/app.scss', 'public/assets/web/css')
    .sass('resources/assets/web/scss/vendor.scss', 'public/assets/web/css')
    .version().vue();
