<h3>Categorías</h3>
@foreach($categories as $category)
	<span class="badge sqbadge-red">
		<a href="{{ route('web.search.port_category', $category->name ) }}">
			{{ $category->name }} |
		</a>
	<span class="badge badgeWhite">{{ $category->article->count() }}</span>
</span>
@endforeach

