<div class="search-input pull-right">
    {!! Form::open(['route' => 'web.blog', 'method' => 'GET', 'class' => '']) !!}
        <div class="form-group form-inline">
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar por título', 'aria-describedby' => 'search']) !!}
            <button type="submit" class="btn search-btn"><i class="ion-ios-search"></i></button>
        </div>
    {!! Form::close() !!}
    <br>
    <div class="title">Categorías</div>
			
        <a href="{{ route('web.blog') }}">Todos</a><br>
    @foreach($categories as $category)
        <a href="{{ route('web.search.category', $category->name ) }}">
            {{ $category->name }} <span class="badge">{{ $category->article->count() }}</span>
        </a> <br>
    @endforeach
</div>