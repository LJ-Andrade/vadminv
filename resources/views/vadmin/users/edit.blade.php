@extends('vadmin.layouts.main')
@section('title', 'VADmin | Nueva Imágen')

@section('header')
	@section('header_title', 'Nueva Imágen') 
	@section('header_subtitle', ' ')
	@section('options')
		<div class="actions">
			<a href="{{ url('vadmin/users') }}"><button type="button" class="animated fadeIn btnSm buttonOther">Volver</button></a>
		</div>	
	@endsection
@endsection

@section('content')
		@component('vadmin.components.mainloader')
		@slot('text','Creando...')
	@endcomponent
	<div class="container">
	    <div class="row">
            {!! Form::model($user, [
                'method' => 'PATCH',
                'url' => ['/vadmin/users', $user->id],
                'files' => true,
                'class' => 'narrow-form',
                ]) !!}
				<div class="inner">
					@include('vadmin.users.form')
					<div class="row text-center">
						{!! Form::submit('Editar Usuario', ['class' => 'button btnGreen']) !!}
					</div>
				</div>
            {!! Form::close() !!}

			@if(auth()->user()->id == $user->id)
			{!! Form::open(['route' => 'user.updatepassword', 'class' => 'narrow-form', 'method' => 'POST']) !!}	
				<div class="inner">
					Cambiar contraseña
					<hr class="softhr">
					<div class="form-group">
						{!! Form::label('password', 'Contraseña:') !!}
						<input class="form-control" name="password" type="password" value="">
						{!! Form::label('password', 'Repita la contraseña:') !!}
						<input id="PassConfirmation" class="form-control" name="password-confirm" type="password" value="">
						
					</div>
					<div class="text-center">
						{!! Form::submit('Cambiar Contraseña', ['class' => 'button btnGreen']) !!}
					</div>
				</div>
			{!! Form::close() !!}
			@endif

	    </div>
	</div>  
@endsection

@section('custom_js')
	<script>
		// Loader
		$("#NewItemForm").on("submit", function(){
			$('.Main-Loader').removeClass('Hidden');
		});
		
        $('#ActualImage').click(function(){
            $('#SingleImage').click();
        }); 
	</script>
@endsection


