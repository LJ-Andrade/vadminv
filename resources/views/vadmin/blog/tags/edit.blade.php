@extends('vadmin.layouts.main')

@section('title', 'Vadmin | Editar Usuario')

@section('content')
<div class="container">
	<div class="row">
		<h2>Editando tag <b>{{ $tag->name}}</b></h2>
		<hr>
		{!! Form::open(['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
			<div class="form-group">
				{!! Form::label('name', 'Nombre') !!}
				{!! Form::text('name', $tag->name, ['class' => 'form-control', 'placeholder' => 'Nombre de Usuario', 'required'] )!!}
			</div>
			<div class="form-group">
				{!! Form::submit('Editar Categoría', ['class' => 'btn btn-primary']) !!}
			</div>
			
		{!! Form::close() !!}
		
	</div>
</div>

@endsection