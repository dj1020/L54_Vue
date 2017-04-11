const {mix} = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/elements.js', 'public/js')
    .js('resources/assets/js/menus/index.js', 'public/js/menus')
    .js('resources/assets/js/menus/create2.js', 'public/js/menus')
    .extract(['vue', 'jquery', 'axios', 'lodash'])
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/menus/create.scss', 'public/css/menus')
    .copy('node_modules/element-ui/lib/theme-default/index.css', 'public/css/elementUI.css');
