@extends('vadmin.layouts.main')

@section('title', 'Vadmin | Categorias')

@section('header')
	@section('header_title', 'Categoría del Portfolio') 
	@section('options')
		<div class="actions">
			<a href="{{ url('vadmin/port_categories') }}"><button type="button" class="animated fadeIn btnSm buttonOther">Volver</button></a>
		</div>	
	@endsection
@endsection

@section('content')
	<div class="container">
		<div class="narrow-form">
			<div class="inner">
				{!! Form::open(['route' => 'port_categories.store', 'method' => 'POST', 'data-parsley-validate' => '']) !!}	
	            	@include ('vadmin.portfolio.categories.form')
					{!! Form::submit('Crear', ['class' => 'button btnGreen', 'id' => 'InsertItemBtn']) !!}
	            {!! Form::close() !!}
			</div>
	    </div>
		<div id="Error"></div>
    </div>  
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('js/products.js') }}" ></script>
	@include('vadmin.components.ajaxscripts')
@endsection
