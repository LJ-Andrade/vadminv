@extends('vadmin.layouts.main')
@section('title', 'VADmin | Nuevo Artículo')

@section('header')
	@section('header_title', 'Nuevo Artículo') 
	@section('header_subtitle', ' ')
	@section('options')
		<div class="actions">
			<a href="{{ route('blog.index') }}"><button type="button" class="animated fadeIn btnSm buttonOther">Volver</button></a>
		</div>	
	@endsection
@endsection

@section('styles')
	{!! Html::style('plugins/texteditor/trumbowyg.min.css') !!}
	{!! Html::style('plugins/jqueryFileUploader/jquery.fileuploader.css') !!}
	{!! Html::style('plugins/jqueryfiler/themes/jquery.filer-dragdropbox-theme.css') !!}
	{!! Html::style('plugins/jqueryfiler/jquery.filer.css') !!}
@endsection

@section('content')
		@component('vadmin.components.mainloader')
		@slot('text','Creando...')
	@endcomponent
	<div class="container">
	    <div class="row">
	        {!! Form::open(['route' => 'blog.store', 'method' => 'POST', 'files' => true, 'id' => 'NewItemForm', 'class' => 'big-form', 'data-parsley-validate' => '']) !!}	
				<div class="row">
					{{-- Title --}}
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('title', 'Título') !!}
							{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del artículo', 'id' => 'TitleInput', 
							'required' => '', 'maxlength' => '120', 'minlength' => '4']) !!}
						</div>
					</div>
					{{-- Slug --}}
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('slug', 'Url - Dirección web') !!}
							{!! Form::text('slug', null, ['class' => 'SlugInput form-control', 'placeholder' => 'Dirección visible (en explorador)', 'id' => 'SlugInput', 'required' => '']) !!}
							<div class="slug2"></div>
							<p class="muted-small-text"> La URL no debe contener espacios, caracteres extraños ni acentos. Solo palabras en minúsculas separadas con guiones. (Ej.: este-es-un-slug-correcto)</p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				{{-- Content --}}
				<div class="form-group">
					{!! Form::label('content', 'Contenido') !!}
					{!! Form::textarea('content', null, ['class' => 'form-control Textarea-Editor']) !!}
				</div>
				<div class="row">
					{{-- Category --}}
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="form-group">
							{!! Form::label('category_id', 'Categoría') !!}
							{!! Form::select('category_id', $categories, null, ['class' => 'form-control Select-Category', 'placeholder' => 'Seleccione una opcion',
							'required' => '']) !!}
						</div>
					</div>
					{{-- Tags--}}
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="form-group">
							{!! Form::label('tags', 'Tags') !!}
							{!! Form::select('tags[]',$tags, null, ['class' => 'form-control Select-Tags', 'multiple', 'required' => '']) !!}
						</div>
					</div>
					{{-- Status--}}
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="form-group">
							{!! Form::label('status', 'Estado') !!}
							{!! Form::select('status', ['active' => 'Activo','paused' => 'Pausado'], null, ['class' => 'form-control']) !!}
						</div>
					</div>	
				</div>
				{{-- Images--}}
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							{!! Form::label('images', 'Imágenes') !!}
							<span style="font-size: 12px"> | Formatos soportados: jpeg, jpg, png, gif</span>
							{!! Form::file('images[]', array('multiple'=>true, 'id' => 'Multi_Images')) !!}
							<div class="ErrorImage"></div>
						</div>
						<hr class="softhr">
					</div>
				</div>
				<div class="row text-center">
					{!! Form::submit('Crear artículo', ['class' => 'button buttonOk']) !!}
				</div>
			{!! Form::close() !!}
	    </div>
	</div>  
	
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('plugins/texteditor/trumbowyg.min.js')}} "></script>
	<script type="text/javascript" src="{{ asset('plugins/jqueryfiler/jquery.filer.min.js')}} "></script>
	<script type="text/javascript" src="{{ asset('plugins/jqueryFileUploader/jquery.fileuploader.min.js')}} "></script>
	<script type="text/javascript" src="{{ asset('plugins/chosen/chosen.jquery.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/forms.js') }}" ></script>
@endsection

@section('custom_js')
	<script>
		$.trumbowyg.svgPath = '{{ asset('plugins/texteditor/icons.svg') }}';
		$('.Textarea-Editor').trumbowyg();
	</script>
@endsection


