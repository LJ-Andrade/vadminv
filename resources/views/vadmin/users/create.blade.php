@extends('vadmin.layouts.main')

@section('title', 'Vadmin | Categorias')

@section('header')
	@section('header_title', 'Categoría del Portfolio') 
	@section('options')
		<div class="actions">
			<a href="{{ url('vadmin/users') }}"><button type="button" class="animated fadeIn btnSm buttonOther">Volver</button></a>
		</div>	
	@endsection
@endsection

@section('content')
	<div class="container">
		{!! Form::open(['route' => 'users.store', 'class' => 'narrow-form', 'method' => 'POST', 'data-parsley-validate' => '']) !!}	
			<div class="inner">
				@include ('vadmin.users.form')
				<div class="form-group">
					{!! Form::label('password', 'Contraseña:') !!}
					<input class="form-control" name="password" type="password" value="" required="" data-parsley-equalto="#PassConfirmation">
					{!! Form::label('password', 'Repita la contraseña:') !!}
					<input id="PassConfirmation" class="form-control" name="password-confirm" type="password" value="" required="">
				</div>
			</div>
			<div class="text-center">
				{!! Form::submit('Crear', ['class' => 'button btnGreen', 'id' => 'InsertItemBtn']) !!}
			</div>
	
		{!! Form::close() !!}

		<div id="Error"></div>
    </div>  
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('js/products.js') }}" ></script>
	@include('vadmin.components.ajaxscripts')
@endsection
