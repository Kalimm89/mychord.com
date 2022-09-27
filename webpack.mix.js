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

 mix.styles([
    'resources/assets/admin/plugins/bootstrap/css/bootstrap.css',
    'resources/assets/admin/plugins/node-waves/waves.css',
    'resources/assets/admin/plugins/animate-css/animate.css',
    'resources/assets/admin/plugins/morrisjs/morris.css',
    'resources/assets/admin/css/style.css',
    'resources/assets/admin/css/themes/all-themes.css'
], 'public/assets/admin/css/admin.css');

mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.js',
    'resources/assets/admin/plugins/bootstrap-select/js/bootstrap-select.js',
    'resources/assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js',
    'resources/assets/admin/plugins/node-waves/waves.js',
    'resources/assets/admin/plugins/jquery-countto/jquery.countTo.js',
    'resources/assets/admin/plugins/raphael/raphael.min.js',
    'resources/assets/admin/plugins/morrisjs/morris.js',
    'resources/assets/admin/plugins/chartjs/Chart.bundle.js',
    'resources/assets/admin/plugins/flot-charts/jquery.flot.js',
    'resources/assets/admin/plugins/flot-charts/jquery.flot.resize.js',
    'resources/assets/admin/plugins/flot-charts/jquery.flot.pie.js',
    'resources/assets/admin/plugins/flot-charts/jquery.flot.categories.js',
    'resources/assets/admin/plugins/flot-charts/jquery.flot.time.js',
    'resources/assets/admin/plugins/jquery-sparkline/jquery.sparkline.js',
    'resources/assets/admin/js/admin.js',
    'resources/assets/admin/js/pages/index.js',
    'resources/assets/admin/js/demo.js'
], 'public/assets/admin/js/admin.js');

mix.copyDirectory('resources/assets/admin/images', 'public/assets/admin/images');