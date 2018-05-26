let mix = require('laravel-mix');

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

mix.sass('resources/assets/sass/app.scss', 'public/css/bootstrap/bootstrap.css')
    .sass('resources/assets/css/stylish_portfolio/scss/stylish-portfolio.scss', 'public/css/stylish-portfolio')
    .sass('node_modules/simple-line-icons/scss/simple-line-icons.scss', 'public/css/simple-line-icons')
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery/')
    .copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap')
    .copy('resources/assets/js/stylish-portfolio/stylish-portfolio.min.js', 'public/js/stylish-portfolio')
    .js('resources/assets/js/bootstrap.js', 'public/js/bootstrap/');