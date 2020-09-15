@extends('zendero.layouts.app')

@section('meta-title', 'Blog')
@section('meta-content', 'Majime.cl pone a tu disposición toda la información que necesitas para dar el salto al mundo digital.')

@section('blog-content')

@foreach ($posts as $post)
    <article class="post ">

       
        
        <section class="post ">
            <div class="contenedor-galeria">
                @if ($post->photos->count() === 1)

                    <figure><img src="{{ $post->photos()->first()->url }}" class="img-responsive" alt=""></figure>

                @elseif($post->photos->count() > 1)
                    @foreach ($post->photos->take(4) as $photo)
                        
                        <figure class="" style="position: relative">

                            @if ($loop->iteration === 4)
                                <div class="overlay">{{ $post->photos->count() }} Fotos</div>
                            @endif
                            
                            <img class="galeria__img" src="{{  url($photo->url)  }}" alt="">
                        </figure>
                    @endforeach
                @endif
            </div>
        </section>

        
        
        <div class="content-post">
            <header class="container-flex space-between">
                <div class="date">
                    <span class="c-gray-1">{{ $post->published_at->format('M d') }}</span>
                </div>
                <div class="post-category">
                    <span class="category text-capitalize">{{ $post->category->name  }}</span>
                </div>
            </header>
            <h1>{{ $post->title }}</h1>
            <div class="divider"></div>
                <p>{!! $post->body !!}</p>
            <footer class="container-flex space-between">
                <div class="read-more">
                    <a href="blog/{{ $post->slug }}" class="text-uppercase c-green"> Leer</a>
                </div>
                <div class="tags container-flex">
                    @foreach ($post->tags as $tag)
                        <span class="tag c-gris">#{{ $tag->name }}</span>
                    @endforeach
                
                </div>
            </footer>
        </div>
    </article>

     
        
        
     
     
    
</article>
    
@endforeach
    
<div class="pagination">
    <ul class="list-unstyled container-flex space-center">
        <li><a href="#" class="pagination-active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
    </ul>
</div>
@endsection