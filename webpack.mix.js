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

mix.options({
  uglify: {
        sourceMap: true,
        mangle: {
            keep_fnames: true
        },
        compress: {
            warnings: false,
            drop_console: true,
            unused: false
        }
    }
});

mix.scripts(['resources/assets/js/app.js'], 'public/js/app.js');
mix.scripts(['resources/assets/js/incomingPackage.js'], 'public/js/incomingPackage.js');
mix.scripts(['resources/assets/js/loading.js'], 'public/js/loading.js');
mix.scripts(['resources/assets/js/pricing.js'], 'public/js/pricing.js');
mix.scripts(['resources/assets/js/profile.js'], 'public/js/profile.js');
mix.scripts(['resources/assets/js/user.js'], 'public/js/user.js');
mix.scripts(['resources/assets/js/ie.js'], 'public/js/ie.js');
mix.styles(['resources/assets/css/app.css'], 'public/css/app.css');
