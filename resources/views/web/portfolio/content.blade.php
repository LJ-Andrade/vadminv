@if($articles === null)
    @if(! count($articles))
        <div class="container">
            <div class="col-md-9">
                <h2>No se encontraron artículos</h2>
                <hr>
                <h4>Puede realizar una nueva búsqueda o  <a href="{{ route('web.blog') }}"></i> ver todos los artículos</a></h4>
            </div>
        </div>
    @endif
@else
@foreach($articles as $article)
    <div class="col-xs-12 col-sm-4 col-lg-4 center-mobile">
        <div class="portfolio-item">
            <div class="inner">
                {{-- IMAGE --}}
                {{-- Prevents error when No image is uploaded in article --}}
                <div class="imagen">
                    @if ($article->thumb != '')
                        <img class="ViewImage" data-filename="{{ asset('webimages/portfolio/'. $article->filename ) }}" src="{{ asset('webimages/portfolio/'. $article->thumb ) }}" class="img-responsive" alt="" data-toggle="modal" data-target="#ImageModal">
                    @else
                        <img src="{{ asset('webimages/gen/genlogo.jpg') }}" class="img-responsive" alt="">
                    @endif
                </div>
                {{-- ARTICLE INFO --}}
                <div class="info">
                    {{-- SLUG --}}
                    <div class="title"> 
                        <a href="{!! route('web.portfolio.article', $article->slug ) !!}">
                            @if(strlen($article->title) > 25)
                            {!!  substr($article->title, 0, 25)!!}...
                            @else
                            {!! $article->title !!}
                            @endif
                        </a>
                    </div>
                </div> {{-- / info --}}
            </div> {{-- / inner --}}
        </div>
    </div> {{-- / blog-item --}}
@endforeach
@endif


<div id="ImageModal" class="modal fade" style="padding: 0 !important" role="dialog">
  <div class="modal-dialog modal-image">

    <!-- Modal content-->
    <div class="modal-content2">

      <div class="modal-body">
        <img id="ShowSelectedImage" alt="">
      </div>

    </div>

  </div>
</div>