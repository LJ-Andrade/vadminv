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

				{!! Form::model($category, [
					'method' => 'PATCH',
					'url' => ['/vadmin/port_categories', $category->id],
					'files' => true
				]) !!}

				@include ('vadmin.portfolio.categories.form', ['data-parsley-validate' => ''])
				{!! Form::submit('Editar Categoría', ['class' => 'button btnGreen']) !!}
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
