<div class="portfolio-filters">
	<div class="inner-main">
		<span class="title">Portfolio</span>
		<button class="Show-Mobile-Filter btn openFilterBtn"> <b><i class="ion-android-search"></i></b></button>
	</div>
	<div class="Fiter-Inner filter-inner animated fadeIn Hidden">
		<hr>
		<h2>Buscador</h2>
		<div class="search-input">
			{!! Form::open(['route' => 'web.blog', 'method' => 'GET', 'class' => '']) !!}
				<div class="form-group form-inline">
					{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar por título', 'aria-describedby' => 'search']) !!}
					<button type="submit" class="btn search-btn"><i class="ion-ios-search"></i></button>
				</div>
			{!! Form::close() !!}
		</div>
		<div class="search-buttons">
		<hr>
			<div class="title">Categoría</div>
			
			@foreach($categories as $category)
				<a href="{{ route('web.search.category', $category->name ) }}"> 
					<button class="btn filter-button"> 
					{{ $category->name }} <span class="badge">{{ $category->article->count() }}</span></button>
				</a>
			@endforeach
		</div>
		<div class="search-buttons">
		<hr>
			<div class="title">Tags</div>
			@foreach($tags as $tag)
				<a href="{{ route('web.search.category', $category->name ) }}"> 
					<button class="btn filter-button"> 
					{{ $tag->name }}</button>
				</a>
			@endforeach
		</div>
	</div>
</div>