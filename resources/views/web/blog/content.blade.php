 @if(! count($articles))
    <div class="container">
        <h2>No se encontraron artículos</h2>
        <hr>
        <h4>Puede realizar una nueva búsqueda o  <a href="{{ route('web.blog') }}"></i> ver todos los trabajos</a></h4>
    </div>
@endif

@foreach($articles as $article)
    <div class="col-xs-12 col-sm-6 col-lg-4 blog-item">
        <div class="inner">
            {{-- IMAGE --}}
            {{-- Prevents error when No image is uploaded in article --}}
            <div class="imagen">
                <a href="{!! route('web.blog.article',$article->slug ) !!}">
                        <img src="{{ asset('webimages/blog/articles/'. $article->images->first()->name ) }}" class="img-responsive" alt="">
                    @if (count($article->images))
                    @else
                        <img src="{{ asset('webimages/gen/genlogo.jpg') }}" class="img-responsive" alt="">
                    @endif
                </a>
            </div>

            {{-- ARTICLE INFO --}}
            <div class="info">
                {{-- SLUG --}}
                <div class="text title"> 
                    <a href="{!! route('web.blog.article', $article->slug ) !!}">
                        @if(strlen($article->title) > 50)
                        {!!  substr($article->title, 0, 50)!!}...
                        @else
                        {!! $article->title !!}
                        @endif
                    </a>
                </div>
                <div class="content-text">
                    {!!  substr($article->content, 0, 200)!!}... 
                    <a href="{!! route('web.blog.article',$article->slug ) !!}">Leer más...</a>
                </div>
                <hr>
                {{-- CATEGORY --}}
                <a href="{{ route('web.search.category', $article->category->name ) }}">
                    <span class="text subtitle">Categoría: </span><span class="text cat-text"><b>{{ $article->category->name }}</b></span>
                </a>
                {{-- TAGS --}}
                <div class="tags">
                    @foreach($article->tags as $tag)
                        <a href="{{ route('web.search.tag', $tag->name ) }}">
                            <span class="custom-badge grey-back">{!! $tag->name !!}</span>
                        </a>
                    @endforeach
                </div>
                {{-- DATE --}}
                <div class="date">
                    <i class="ion-android-alarm-clock"> </i><span class="text"> {{ $article->created_at->diffForHumans() }}</span>
                </div>
            </div>
        </div>
    </div>
@endforeach