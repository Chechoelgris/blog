@extends('blog.layouts.app')

@section('titlenav', 'Blog')

@section('blog-content')
    <nav class="nav-extended  blue-grey darken-3">
        <!-- Fixed Masonry Filters -->
        <div class="categories-wrapper">
            <div class="categories-container">
                <ul class="categories container">
                <li class="active"><a href="#all">All</a></li>
                @foreach ($categories as $category)
                <li><a href="#{{ $category->slug }}">{{ $category->name }}</a></li>
                @endforeach
                {{-- <li><a href="#polygon">Polygon</a></li>
                <li><a href="#bigbang">Big Bang</a></li>
                <li><a href="#sacred">Sacred Geometry</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>

  
    <!-- Container blog post-->
    <div id="portfolio" class="section gray">
        <div class="gallery row">
        @foreach ($posts as $post)

            <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter {{ $post->category->slug }}">
                <div class="gallery-curve-wrapper">
                <a class="gallery-cover gray">
                    <img src="http://placehold.it/300x250" alt="placeholder">
                </a>
                <div class="gallery-body">
                    <div class="title-wrapper">
                        <h3>{{ $post->title }}</h3>
                        <span class="price">{{ $post->published_at->format('M d') }}</span>
                        <br>

                        @foreach ($post->tags as $tag)
                            <span class="tags">#{{ $tag->name }} </span>
                        @endforeach
                        
                    </div>
                    <p class="description">
                        {{ $post->body }}
                    </p>

                    <div class="carousel-wrapper">
                        <div class="carousel">
                        <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                        <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                        <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                        <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                        <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                        </div>
                    </div>
                </div>
                <div class="gallery-action">
                    <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
                </div>
                </div>
            </div>
        @endforeach
            {{-- <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter bigbang">
                <div class="gallery-curve-wrapper">
                <a class="gallery-cover gray">
                    <img src="http://placehold.it/300x250" alt="placeholder">
                </a>
                <div class="gallery-body">
                    <div class="title-wrapper">
                    <h3>Sun</h3>
                    <span class="price">$9.99</span>
                    </div>
                    <p class="description">
                    Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                    <p class="description">
                    Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                    <div class="carousel-wrapper">
                        <div class="carousel">
                        <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                        <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                        <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                        <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                        <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                        </div>
                    </div>
                </div>
                <div class="gallery-action">
                    <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
                </div>
                </div>
            </div>

            <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
                <div class="gallery-curve-wrapper">
                    <a class="gallery-cover gray">
                    <img src="http://placehold.it/300x250" alt="placeholder">
                    </a>
                    <div class="gallery-body">
                    <div class="title-wrapper">
                        <h3>Sun</h3>
                        <span class="price">$9.99</span>
                    </div>
                    <p class="description">
                        Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                    <p class="description">
                        Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                    <div class="carousel-wrapper">
                        <div class="carousel">
                            <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                            <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                            <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                            <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                            <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                        </div>
                        </div>
                    </div>
                    <div class="gallery-action">
                    <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
                    </div>
                </div>
            </div>

            <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter sacred">
                <div class="gallery-curve-wrapper">
                    <a class="gallery-cover gray">
                    <img src="http://placehold.it/300x250" alt="placeholder">
                    </a>
                    <div class="gallery-body">
                    <div class="title-wrapper">
                        <h3>Sun</h3>
                        <span class="price">$9.99</span>
                    </div>
                    <p class="description">
                        Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                    <p class="description">
                        Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                    <div class="carousel-wrapper">
                        <div class="carousel">
                            <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                            <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                            <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                            <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                            <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                        </div>
                        </div>
                    </div>
                    <div class="gallery-action">
                    <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
                    </div>
                </div>
            </div> --}}
        
        </div>

    </div><!-- /.container -->
@endsection