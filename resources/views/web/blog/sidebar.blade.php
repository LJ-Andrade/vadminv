<div class="sidebar-filters">
    <div class="title">Buscar</div>
    {!! Form::open(['route' => 'web.blog', 'method' => 'GET', 'class' => '']) !!}
        <div class="form-inline">
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar por título', 'aria-describedby' => 'search']) !!}
            <button type="submit" class="btn search-btn"><i class="ion-ios-search"></i></button>
        </div>
    {!! Form::close() !!}
    <hr>

    <div class="title">Categorías</div>
    @foreach($categories as $category)
        <a href="{{ route('web.search.category', $category->name ) }}">
            <span class="custom-badge blue-back items">{{ $category->article->count() }}</span> <span class="items">{{ $category->name }}</span> 
        </a> <br>
    @endforeach
    <span class="items"><a href="{{ route('web.blog') }}">Todos</a><span class="items">
    <hr>

    <div class="title">Etiquetas</div>
    @foreach($tags as $tag)
        <a href="{{ route('web.search.tag', $tag->name ) }}">
            <div class="custom-badge blue-back"><span class="items ">{{ $tag->name }}</span></div>
        </a> 
    @endforeach
</div>