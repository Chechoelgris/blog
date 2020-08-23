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
        'resources/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css',
        'resources/vendor/datatables-responsive/css/responsive.bootstrap4.min.css',

    ], 'public/css/app.css')

    .styles([
        'resources/css/blog/gallery-dark-materialize.min.css',
    ], 'public/css/blog.css')

    .js('resources/js/app.js', 'public/js')

    .scripts([
        'resources/vendor/jquery/jquery.min.js',
        'resources/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'resources/vendor/datatables/jquery.dataTables.min.js',
        'resources/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js',
        'resources/vendor/datatables-responsive/js/dataTables.responsive.min.js',
        'resources/vendor/datatables-responsive/js/responsive.bootstrap4.min.js',
        
    ],'public/js/vendor.js')

    .scripts([
        'resources/vendor/admin-datatable.js',
    ],'public/js/admin-datatable-script.js')

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


