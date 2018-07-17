 @if(! count($articles))
    <div class="container">
        <div class="col-md-9">
            <h2>No se encontraron artículos</h2>
            <hr>
            <h4>Puede realizar una nueva búsqueda o  <a href="{{ route('web.blog') }}"></i> ver todos los artículos</a></h4>
        </div>
    </div>
@endif

@foreach($articles as $article)
    <div class="col-xs-12 col-sm-6 col-lg-6 center-mobile">
        <div class="blog-item">
            <div class="inner">
                {{-- IMAGE --}}
                {{-- Prevents error when No image is uploaded in article --}}
                <div class="imagen">
                    <a href="{!! route('web.blog.article',$article->slug ) !!}">
                        @if (count($article->images))                            
                            <img src="{{ asset('webimages/blog/articles/'. $article->images->first()->name ) }}" class="CheckImgBlog img-responsive" alt="{{ $article->title }}">
                        @else
                            <img src="{{ asset('webimages/gen/blog-gen.jpg') }}" class="img-responsive" alt="V de Verde Logo">
                        @endif
                    </a>
                </div>

                {{-- ARTICLE INFO --}}
                <div class="info">
                    {{-- CATEGORY --}}
                    <div class="category">
                        <a href="{{ route('web.search.category', $article->category->name ) }}">
                            <span>{{ $article->category->name }}</span>
                        </a>
                    </div>
                    {{-- SLUG --}}
                    <div class="title"> 
                        <a href="{!! route('web.blog.article', $article->slug ) !!}">
                            @if(strlen($article->title) > 50)
                            {!!  substr($article->title, 0, 50)!!}...
                            @else
                            {!! $article->title !!}
                            @endif
                        </a>
                    </div>
                    {{--  <div class="content-text">
                        {!! (substr(strip_tags($article->content), 0, 150)) !!} <br>
                    </div>  dsdsd--}}
                    <div class="seemore">
                        <a href="{!! route('web.blog.article',$article->slug ) !!}">Leer más...</a>
                    </div>
                    <hr>

                    {{-- DATE --}}
                    <div class="date">
                        <i class="ion-android-alarm-clock"> </i><span> {{ $article->created_at->diffForHumans() }}</span>
                    </div>
                </div> {{-- / info --}}
            </div> {{-- / inner --}}
        </div>
    </div> {{-- / blog-item --}}
@endforeach