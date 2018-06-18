@section('searcher')

@if(isset($_GET['search']))
    <a href="{{ url('vadmin/port_categories') }}"><button type="button" class="btnSmall buttonOk">Mostrar Todos</button></a> <br><br>
    Resultados de la búsqueda:
@endif
<div class="row header-options">
    <div class="Search-Filters search-filters">
        {{-- Search --}}
        <h4 class="hide-desk">Buscador</h4>
        {!! Form::open(['method' => 'GET', 'url' => 'vadmin/port_categories', 'class' => 'navbar-form', 'role' => 'search']) !!}
            <div class="inner-column">
                <div class="input-group">
                    <span class="input-group-btn">
                    <input type="text" class="form-control" name="search" placeholder="Buscar categoría...">
                    <button type="submit" class="btnSmall buttonOk">Buscar</button>
                    </span>
                </div>
            </div>
            
        {!! Form::close() !!}
        {{-- /Search --}}
        <div class="btnClose"><i class="ion-close-round"></i></div>        
    </div>
</div>

@endsection