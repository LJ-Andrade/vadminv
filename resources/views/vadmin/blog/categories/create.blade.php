@extends('vadmin.layouts.main')

@section('title', 'Vadmin | Categorias')

@section('header')
	@section('header_title', 'Creación de Categoría') 
	@section('options')
		<div class="actions">
			<a href="{{ url('vadmin/categories') }}"><button type="button" class="animated fadeIn btnSm buttonOther">Volver</button></a>
		</div>	
	@endsection
@endsection

@section('styles')
	{!! Html::style('plugins/jqueryfiler/themes/jquery.filer-dragdropbox-theme.css') !!}
	{!! Html::style('plugins/jqueryfiler/jquery.filer.css') !!}
	{!! Html::style('plugins/colorpicker/spectrum.css') !!}
@endsection

@section('content')
	
	<div class="container">
		<div class="row">
			<div id="Error"></div>
        </div>
		<div class="narrow-form">
			<div class="inner">
				{!! Form::open(['route' => 'categories.store', 'method' => 'POST', 'files' => true, 'id' => 'NewItemForm', 'data-parsley-validate' => '']) !!}	
	            	@include ('vadmin.blog.categories.form')
					{!! Form::submit('Crear', ['class' => 'button btnGreen', 'id' => 'InsertItemBtn']) !!}
	            {!! Form::close() !!}
			</div>
	    </div>

{{-- 	    <div class="row">
	    	{!! Form::open(['route' => 'categories.store', 'method' => 'POST', 'files' => true, 'id' => 'NewItemForm', 'class' => 'big-form', 'data-parsley-validate' => '']) !!}	
            	@include ('vadmin.blog.categories.form')
				<div class="text-center">
					{!! Form::submit('Aceptar', ['class' => 'button btnGreen', 'id' => 'InsertItemBtn']) !!}
				</div>
            {!! Form::close() !!}
        </div> --}}
    </div>  
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('plugins/jqueryfiler/jquery.filer.min.js')}} "></script>
	<script type="text/javascript" src="{{ asset('plugins/colorpicker/spectrum.js')}} "></script>
	<script type="text/javascript" src="{{ asset('plugins/colorpicker/jquery.spectrum-es.js')}} "></script>
	<script type="text/javascript" src="{{ asset('js/jslocal/forms.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/products.js') }}" ></script>
	@include('vadmin.components.ajaxscripts')
@endsection

@section('custom_js')
	
	<script>


	</script>

@endsection


