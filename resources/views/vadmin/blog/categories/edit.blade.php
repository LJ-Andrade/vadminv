@extends('vadmin.layouts.main')

@section('title', 'Vadmin | Categorias')

@section('header')
	@section('header_title', 'Edicion de Categoría') 
	@section('options')
		<div class="actions">
			<a href="{{ url('vadmin/categories') }}"><button type="button" class="animated fadeIn btnSm buttonOther">Volver</button></a>
		</div>	
	@endsection
@endsection

@section('content')
<div class="container">
	<div class="row">
		{!! Form::model($category, [
			'method' => 'PATCH',
			'url' => ['/vadmin/categories', $category->id],
			'files' => true,
			'class' => 'big-form'
		]) !!}

		@include ('vadmin.blog.categories.form', ['submitButtonText' => 'Update'])
		{!! Form::submit('Editar Categoría', ['class' => 'button btnGreen']) !!}
		{!! Form::close() !!}
		
	</div>
</div>

@endsection