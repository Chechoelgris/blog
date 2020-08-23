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
    .styles([
        'resources/vendor/fontawesome-free-5.13.0-web/css/all.min.css',
        'resources/css/adminlte.css',
    ], 'public/css/app.css')

    .styles([
        'resources/css/blog/gallery-dark-materialize.min.css',
    ], 'public/css/blog.css')

    .js('resources/js/app.js', 'public/js')

    .scripts([
        'resources/vendor/jquery/jquery.min.js',
        'resources/vendor/bootstrap/js/bootstrap.bundle.min.js',
    ],'public/js/vendor.js')

    .scripts([
        'resources/vendor/blog/imagesloaded.pkgd.min.js',
        'resources/vendor/blog/masonry.pkgd.min.js',
        'resources/vendor/blog/materialize.js',
        'resources/vendor/blog/color-thief.min.js',
        'resources/vendor/blog/galleryExpand.js',
        'resources/vendor/blog/init.js',
        
    ],'public/js/blog.js')

    .copy('resources/vendor/fontawesome-free-5.13.0-web/webfonts', 'public/webfonts')
    .copy('resources/img', 'public/img')

    //.sass('resources/sass/app.scss', 'public/css')
    .version()
;


