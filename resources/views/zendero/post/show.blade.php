@extends('zendero.layouts.app')

@section('meta-title', $post->title)
@section('meta-content', $post->excerpt)

@section('blog-content')
    <article class="post">
        


        <div class="content-post">
        <header class="container-flex space-between">
            <div class="date">
            <span class="c-gris">{{ $post->published_at->format('M d') }}</span>
            </div>
            <div class="post-category">
            <span class="category">{{ $post->category->name  }}</span>
            </div>
        </header>
        <h1>{{ $post->title }}</h1>
            <div class="divider"></div>
            <div class="image-w-text">
            <figure class="block-left"><img src="img/img-post-2.png" alt=""></figure>
            <div>
                <p>{!! $post->body !!}</p>
            </div>
            </div>

            <footer class="container-flex space-between">

            @include('zendero.layouts.partials.social-links',['description' => $post->title])

            <div class="tags container-flex">
                
                @foreach ($post->tags as $tag)
                    
                    <span class="tag c-gris">#{{ $tag->name }}</span>
                @endforeach
            </div>
            
        </footer>
        <div class="comments">
        <div class="divider"></div>
            <div id="disqus_thread"></div>

                                    
        </div><!-- .comments -->
        </div>
    </article>
@endsection

@push('scripts')

<script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://zendero.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>
    Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
</noscript>

@endpush