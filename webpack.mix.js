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
    .js("resources/js/backside/product-create.js", 'public/js/backside/')
    .js("resources/js/backside/product-search.js", 'public/js/backside/')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/bs_style.scss', 'public/css')
    .postCss('resources/css/bs_sidebar.css', 'public/css');

mix.sourceMaps().js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps();
