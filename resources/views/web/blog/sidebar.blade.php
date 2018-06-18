<div class="sidebar-filters">
    <div class="title">Buscar</div>
    {!! Form::open(['route' => 'web.blog', 'method' => 'GET']) !!}
        <div class="form-group">
            <div class="input-group search-form">
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar por título', 'aria-describedby' => 'search']) !!}
                <span class="input-group-addon"><i class="ion-ios-search"></i></span>
            </div>
        </div>
        {{-- <div class="form-inline">
            <button type="submit" class="btn search-btn"><i class="ion-ios-search"></i></button>
        </div> --}}
    {!! Form::close() !!}
    <br>
    
    <div class="title">Categorías</div>
    @foreach($categories as $category)
        <a href="{{ route('web.search.category', $category->name ) }}">
            <span class="items">{{ $category->name }} ({{ $category->article->count() }})</span>
            <hr>
        </a>
    @endforeach
    <span class="items"><a href="{{ route('web.blog') }}">Todos</a><span class="items">
    <hr>
    <br>
    <div class="title">Etiquetas</div>
    @foreach($tags as $tag)
        <a href="{{ route('web.search.tag', $tag->name ) }}">
            <span class="items ">{{ $tag->name }}</span> |
        </a> 
    @endforeach
</div>