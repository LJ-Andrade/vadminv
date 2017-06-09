 @if(! count($articles))
    <div class="container">
        <h2>No se encontraron artículos</h2>
        <hr>
        <h4>Puede realizar una nueva búsqueda o  <a href="{{ route('web.blog') }}"></i> ver todos los trabajos</a></h4>
    </div>
@endif

@foreach($articles as $article)
    <div class="col-sm-6 col-md-6 col-lg-6 blog-item">
        <div class="inner">
            {{-- IMAGE --}}
            {{-- Prevents error when No image is uploaded in article --}}
            <a href="{!! route('web.blog.article',$article->slug ) !!}">
                @if (count($article->images))
                    <img src="{{ asset('webimages/blog/'. $article->images->first()->name ) }}" class="img-responsive" alt="">
                @else
                    <img src="{{ asset('webimages/gen/genlogo.jpg') }}" class="img-responsive" alt="">
                @endif
            </a>

            {{-- ARTICLE INFO --}}
            <div class="info">
                {{-- SLUG --}}
                <a href="{!! route('web.blog.article',$article->slug ) !!}">
                    <span class="text title"> {!! $article->title !!} </span> <br>
                </a>
                {{-- CATEGORY --}}
                <a href="{{ route('web.search.category', $article->category->name ) }}">
                    <span class="text cat-title">Categoría: </span><span class="text cat-text">{{ $article->category->name }}</span>
                </a>
                <hr>
                {{-- TAGS --}}
                <div class="tags">
                    @foreach($article->tags as $tag)
                        <a href="{{ route('web.search.tag', $tag->name ) }}">
                            <span class="text badge badgeGrey">{!! $tag->name !!}</span>
                        </a>
                    @endforeach
                </div>
                {{-- DATE --}}
                <div class="date">
                    <span class="text">{{ $article->created_at->diffForHumans() }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
@endforeach