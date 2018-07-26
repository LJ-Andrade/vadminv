<div class="mobile-filters-actions">
	{!! Form::open(['route' => 'web.blog', 'method' => 'GET', 'class' => '']) !!}
		<div class="form-group form-inline center-mobile">
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo', 'aria-describedby' => 'search']) !!}
			<button type="submit" class="btn btn-hollow-sm search-btn"><i class="ion-ios-search"></i></button>
			<button class="Show-Mobile-Filter btn btn-hollow-sm openFilterBtn"> <b> Filtros</b></button>
		</div>
	{!! Form::close() !!}

	<div class="mobile-filters">
		<div class="Fiter-Inner filter-inner animated fadeIn Hidden">
			<div class="CloseFilters close-filters"><i class="ion-close-circled"></i></div>
			<div class="search-buttons">
				<div class="title">Categorías</div>
				
				@foreach($categories as $category)
					<a href="{{ route('web.search.category', $category->name ) }}"> 
						<button class="btn filter-button"> 
						{{ $category->name }} ({{ $category->article->count() }})</button>
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
</div>