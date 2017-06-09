@extends('web.layouts.main')

@section('title', 'VADmin | Artículos')

@section('styles')
	{!! Html::script('plugins/swiper.jquery.min.js') !!}
	{!! Html::style('plugins/swiper-slider/swiper.min.css') !!}
@endsection	

@section('content')
    <div class="blog-header">
        <div class="inner">
            <h1>BLOG</h1>
        </div>
    </div>
    <div class="container">
        <div class="row single-item">
			<div class="head">
				<div class="col-xs-6 left">
					<span class="title">Categoría: </span>
					<a href="{{ route('web.search.category', $article->category->name ) }}">
						<span class="custom-badge blue-back">{!! $article->category->name !!}</span>
					</a>
					|
					<span class="title">Tags: </span>
					@foreach($article->tags as $tag)
						<a href="{{ route('web.search.tag', $tag->name ) }}"><span class="custom-badge green-back">{!! $tag->name !!}</span></a>
					@endforeach
				</div>
				<div class="col-xs-6 right">
					<span class="text"><i class="ion-ios-clock-outline"></i>  {{ $article->created_at->diffForHumans() }}</span>
				</div>
			</div>
			<div class="clearfix"></div>
			<hr>
			<h1>{!! $article->title !!}</h1>
			<div class="title-mobile"><h1><b>{!! $article->title !!}</b></h1></div>
		
			<!-- Slider main container -->
			<div class="col-md-4 pad0">
				<div class="swiper-container-blog">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						{{-- Show generic Image if img not exist --}}
						@if(count($article->images) == 0)
							<div class="swiper-slide"><img src="{{ asset('webimages/gen/article-gen.jpg') }}" class="slider-image"></div>
						@else 
							@foreach($article->images as $image)
							@endforeach
						@endif
							<div class="swiper-slide"><img src="{{ asset('webimages/blog/articles/'.$image->name ) }}" class="slider-image"></div>
					</div>
					<!-- Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Navigation buttons -->
					<div class="swiper-button-prev"><i class="ion-ios-arrow-left"></i></div>
					<div class="swiper-button-next"><i class="ion-ios-arrow-right"></i></div>
					<!-- Scrollbar -->
					<div class="swiper-scrollbar"></div>
				</div>
			</div>

			<div class="col-md-8">
				<div class="content">
					<p>{!! $article->content !!}</p>
				</div>
				<hr>
			</div>
        </div>
            	
    </div>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('plugins/swiper-slider/swiper.jquery.min.js') }}" ></script>
@endsection

@section('custom_js')
    <script type="text/javascript">

		$('body').addClass('portfolio-body');
	
		var mySwiper = new Swiper ('.swiper-container-blog', {
		// Optional parameters
		direction: 'horizontal',
		
		// If we need pagination
		pagination: '.swiper-pagination',
		
		// Navigation arrows
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		
		// And if we need scrollbar
		scrollbar: '.swiper-scrollbar',
	})        


    </script>
@endsection



