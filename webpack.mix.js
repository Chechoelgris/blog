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
    //CSS para pagina principal MAJIME.cl
    .styles([
        'resources/vendor/majime/carousel.css',
    ], 'public/css/majime.css')
        

    //CSS Para sistema de administracion
    .styles([
        'resources/vendor/fontawesome-free-5.13.0-web/css/all.min.css',
        'resources/css/adminlte.css',
        'resources/css/custom-dark-mode.css',
    ], 'public/css/app.css')

    //CSS DataTables
    .styles([
        'resources/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css',
        'resources/vendor/datatables-responsive/css/responsive.bootstrap4.min.css',
    ], 'public/css/datatables.css')

    //CSS DatePicker
    .styles([ 
        'resources/vendor/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
    ], 'public/css/tempusdominus.css')

    //CSS Summernote
    .styles([ 
        'resources/vendor/summernote/summernote-bs4.css',
    ], 'public/css/summernote.css')
    
    //CSS Select2
    .styles([
        'resources/vendor/select2/css/select2.min.css',
    ], 'public/css/select2.css')
    
    
    //CSS post.update perzonalizado
    .styles([
        'resources/css/custom-admin-post-update.css',
    ], 'public/css/custom-admin-post-update.css')

    //CSS para el "Blog"
    .styles([
        'resources/css/blog/gallery-dark-materialize.min.css',
    ], 'public/css/blog.css')
    
   //CSS para el "Blog" ZENDERO
   .styles([
        'resources/vendor/zendero/css/framework.css',
        'resources/vendor/zendero/css/normalize.css',
        'resources/vendor/zendero/css/responsive.css',
        'resources/vendor/zendero/css/style.css',
    ], 'public/zendero/css/blog.css')


    .js('resources/js/app.js', 'public/js')

    .scripts([
        'resources/vendor/jquery/jquery.min.js',
        'resources/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'resources/vendor/datatables/jquery.dataTables.min.js',//############################
        'resources/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js',//#################
        'resources/vendor/datatables-responsive/js/dataTables.responsive.min.js',//Datatables
        'resources/vendor/datatables-responsive/js/responsive.bootstrap4.min.js',//##########
       
        
        'resources/vendor/select2/js/select2.full.min.js', //Select2
        
    ],'public/js/vendor.js')

    //inicializa DataTables
    .scripts([
        'resources/vendor/admin-datatable.js',
    ],'public/js/admin-datatable-script.js')

    //inicializa datepiker 
    .scripts([
        'resources/vendor//moment/moment.min.js', //Dependencia de Tempusdominus
        'resources/vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js', //TempusDominus
        'resources/vendor/admin-datepicker.js',
    ],'public/js/admin-datepicker-script.js')


    //inicializa Summernote 
    .scripts([
        'resources/vendor/summernote/summernote-bs4.min.js', //JS Summernote
        'resources/vendor/admin-summernote.js', // Inicializar instancia
    ],'public/js/admin-summernote-script.js')

    //inicializa Select2 
    .scripts([
        'resources/vendor/admin-select2.js',
    ],'public/js/admin-select2-script.js')

    //inicializa Dropzone 
    .scripts([
        'resources/vendor/admin-dropzone.js',
    ],'public/js/admin-dropzone-script.js')


    //Javascript para el "Blog"
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
    .copy('resources/vendor/summernote/font', 'public/css/font')


    .copy('resources/vendor/zendero/img', 'public/zendero/img')

    //.sass('resources/sass/app.scss', 'public/css')
    .version()
;


