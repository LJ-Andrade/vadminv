@section('searcher')

@if(isset($_GET['title']))
    <a href="{{ url('vadmin/blog') }}"><button type="button" class="btnSmall buttonOk">Mostrar Todos</button></a>
@endif
    <div class="row header-options">
        <div class="Search-Filters search-filters">
            {{-- Search --}}
            <h4 class="hide-desk">Buscador</h4>
            {!! Form::open(['method' => 'GET', 'url' => 'vadmin/blog', 'class' => 'navbar-form', 'role' => 'search']) !!}
                <div class="inner-column">
                    <div class="input-group">
                        <span class="input-group-btn">
                        <input type="text" class="form-control" name="title" placeholder="Buscar por título...">
                            <button class="btn btn-default" type="submit">
                                <i class="ion-ios-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
                {{-- <a href="{{ url('vadmin/catalogo') }}"><button type="button" class="btnSmall buttonOk">Todos</button></a>--}}
            {!! Form::close() !!}
            {{-- /Search --}}
            <div class="btnClose"><i class="ion-close-round"></i></div>		
        </div>
    </div>
@endsection