@extends('blog.layouts.app')

@section('meta-title', 'Blog')
@section('meta-content', 'Majime.cl pone a tu disposición toda la información que necesitas para dar el salto al mundo digital.')

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
                        <img src="/img/sacredgeometry1.jpg" alt="placeholder" >
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
                            {!! $post->body !!}
                        </p>

                        <div class="carousel-wrapper">
                            <div class="carousel">
                            <a class="carousel-item" href="#one!"><img src="/img/sacredgeometry1.jpg"></a>
                            <a class="carousel-item" href="#two!"><img src="/img/sacredgeometry2.jpg"></a>
                            <a class="carousel-item" href="#three!"><img src="/img/sacredgeometry3.jpg"></a>
                            <a class="carousel-item" href="#four!"><img src="/img/sacredgeometry1.jpg"></a>
                            <a class="carousel-item" href="#five!"><img src="/img/sacredgeometry2.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-action">
                        <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
                    </div>
                    </div>
                </div>
            @endforeach
                  
        </div>

    </div><!-- /.container -->
@endsection