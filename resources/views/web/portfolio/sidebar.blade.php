<div class="sidebar-filters">
    <div class="title">Buscar</div>
    {!! Form::open(['route' => 'web.portfolio', 'method' => 'GET']) !!}
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
    @foreach($portCategories as $category)
        <a href="{{ route('web.search.port_category', $category->name ) }}">
            <span class="items">{{ $category->name }} ({{ $category->article->count() }})</span>
            <hr>
        </a>
    @endforeach
    <span class="items"><a href="{{ route('web.portfolio') }}">Todos</a><span class="items">
</div>