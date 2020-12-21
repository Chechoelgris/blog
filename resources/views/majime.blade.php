<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Sergio Sepúlveda">
    <title>Majime · Landing</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/majime.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
    

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">Majime</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                   
                </ul>
                

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </li>
                    @endguest
                </ul>
                </div>
            </nav>
        </header>

    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                <div class="carousel-caption text-left ">
                    <h1 class="text-light  mt-5">¿Primera vez? Aclaremos algunas dudas.</h1>
                    <p class="text-light  ">"¿Por qué una agencia me cobra varias veces más que un freelance por construir un sitio para mi negocio?".</p>
                    <p class="text-light  mb-5">"¿Qué debo saber para evitar cobros excesivos e innecesarios a la hora de pagar por un sitio web?".</p>

                    <p><a class="btn btn-lg btn-info text-light" href="#" role="button">Respuestas aquí</a></p>
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                <div class="carousel-caption">
                    <h1 class="text-light mb-5">¿Llegaste un poco tarde?.</h1>
                   
                    <p class="text-light mt-5 mb-5">"Ya tengo una página, pero carga lento y se ve mal en celulares".</p>
                    <p class="text-light mt-5 mb-5"><a class="btn btn-lg btn-warning text-light" href="#" role="button">Podemos ayudarte</a></p>
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                <div class="carousel-caption text-right">
                    <h1 class="text-light mb-5">Te preguntarás: ¿Por qué Majime?</h1>
                    <p class="text-light mt-5 mb-5">La respuesta es simple, queremos fomentar el desarrollo de nuevas tecnologías en latinoamerica. La web es el punto de entrada a un mundo mucho mas grande, nuestra misión es </p>
                    <p class="text-light mt-5 mb-5"><a class="btn btn-lg btn-success text-light" href="#" role="button">Informate aquí</a></p>
                </div>
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Wordpress</h2>
                <p>Un gran porcentaje de la web está construida en wordpress, su popularidad también atrae a personas malintencionadas que aprovechan las malas practicas de implementación y el escaso mantenimiento para infiltrarse y hacer de las suyas en tu servidor.</p>
                <p><a class="btn btn-secondary text-light" href="#" role="button">Leer más &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Infraestructura</h2>
                <p>Un sitio web es como una casa, la infraestructura equivale al terreno en donde se construye. Aunque tengamos la mejor y más bella página del mundo, todo se vendrá abajo si su infraestructura no es la adecuada.</p>
                <p><a class="btn btn-secondary text-light" href="#" role="button">Leer más &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Diseño y Branding</h2>
                <p>Piensa en tu empresa como una persona, dale una voz, colores distintivos, personalidad. Un punto fundamental para diferenciarte del resto es ser capaz de construir una marca única. Déjalo en manos de nuestres diseñadores, elles aman hacerlo. </p>
                <p><a class="btn btn-secondary text-light" href="#" role="button">Leer más &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Diseño UI para simplificar la vida.</h2>
                <p class="lead">Al diseñar, tenemos siempre en cuenta la interacción de los usuarios finales con nuestro sitio. Un usuario nuevo debe ser capaz de realizar un proceso acudiendo solo a la información en pantalla. ¿Genial, no?</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/web.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
            
            </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">La única manera de confirmar el éxito, es midiéndolo.</h2>
                <p class="lead">Es por eso que trabajamos con datos concretos, cuantificables y medibles. Esto nos permite optimizar recursos y lograr la eficiencia que tanto nos gusta.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/params.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">

            </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Foco en el trabajo colaborativo.</h2>
                <p class="lead">Con la implementación de metodologías ágiles y mejora continua, nuestro trabajo no se limita a entregar un servicio aislado y desaparecer. Creemos que el acompañamiento y el soporte es casi tan o más importante que el entregar el sitio web a nuestros clientes.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/team.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">

            </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-12">

                    <div class="jumbotron">
                        <h1 class="display-4">"El futuro es hoy, ¿Oiste viejo?"</h1>
                        <p class="lead">No dejes que la tecnología te supere, ¡Actualízate!</p>
                        <p class="lead">O deja que Majime se encargue de eso por ti.</p>
                        <a class="btn btn-primary btn-lg text-light" href="#" role="button">Se los encargo</a>
                    </div>
                </div>
            </div>


            <hr class="featurette-divider">

            
            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Volver arriba</a></p>
            <p>&copy; 2020 Majime  - Santiago, Chile </p>
            <p><a href="#">Contácto</a> </p>

        </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        $('#carousel').carousel({
            pause: true,
            interval: 2000
        })
    </script>

</html>
