@extends('vadmin.layouts.main')

@section('title', 'VADmin | Artículos')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
              	<h1>{!! $article->title !!}</h1>
            	<p>{!! $article->content !!}</p>
				
				<img src="{{ asset('webimages/portfolio/'.$article->filename ) }}" class="img-responsive img-article" style="max-width: 300px">
				
				<hr>
				Url: <span class="badge">{!! $article->slug !!}</span>
				<hr>
				Categoría: <span class="badge">{!! $article->category->name !!}</span>
				<hr>
            </div>
        </div>
    </div>
@endsection



