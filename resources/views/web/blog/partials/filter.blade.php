<div class="mobile-filters-actions">
	{!! Form::open(['route' => 'web.blog', 'method' => 'GET', 'class' => '']) !!}
		<div class="form-group form-inline">
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo', 'aria-describedby' => 'search']) !!}
			<button type="submit" class="btn search-btn"><i class="ion-ios-search"></i></button>
		<button class="Show-Mobile-Filter btn openFilterBtn"> <b> Filtros</b></button>
		</div>
	{!! Form::close() !!}
</div>
<div class="mobile-filters">
	<div class="Fiter-Inner filter-inner animated fadeIn Hidden">
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
