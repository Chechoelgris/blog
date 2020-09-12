<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descripcion" content="@yield('meta-content', 'Blog')">

    <meta name="author" content="">

    <title>{{ env('APP_NAME') }} | @yield('meta-title', 'Blog')</title>

    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheet -->
    <!-- <link href="css/gallery-dark-materialize.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ mix('css/blog.css') }}">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <body class="blue-grey darken-4">
    @include('blog.layouts.navbar')

    <!-- Gallery -->

    @yield('blog-content')


    <!-- Core Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="{{ mix('js/blog.js') }}"></script>

<!-- 
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/color-thief.min.js"></script>
    <script src="js/galleryExpand.js"></script>
    <script src="js/init.js"></script> -->

  </body>
</html>
