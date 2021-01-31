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
    .js("resources/js/morita/consept.js", 'public/js/')
    .js("resources/js/morita/news.js", 'public/js/')
    .js("resources/js/morita/calendar.js", 'public/js/')
    .js("resources/js/morita/jquery.lighter.js", 'public/js/')
    .js("resources/js/backside/sidebar.js", 'public/js/backside/')
    .js("resources/js/backside/product-create-edit.js", 'public/js/backside/')
    .js("resources/js/backside/product-search.js", 'public/js/backside/')
    .js("resources/js/backside/news-create-edit.js", 'public/js/backside/')
    .js("resources/js/backside/page-change.js", 'public/js/backside/')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/bs_style.scss', 'public/css')
    .sass('resources/sass/style.scss', 'public/css')
    .postCss('resources/css/bs_sidebar.css', 'public/css')
    .postCss('resources/css/calendar.css', 'public/css')
    .postCss('resources/css/jquery.lighter.css', 'public/css');

mix.sourceMaps().js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps();
