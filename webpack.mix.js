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

mix.js('resources/assets/js/app.js', 'public/js');
mix.js('resources/assets/js/incomingPackage.js', 'public/js');
mix.js('resources/assets/js/loading.js', 'public/js');
mix.js('resources/assets/js/pricing.js', 'public/js');
mix.js('resources/assets/js/profile.js', 'public/js');
mix.js('resources/assets/js/user.js', 'public/js');
mix.styles(['resources/assets/css/app.css'], 'public/css/app.css');
