@extends('vadmin.layouts.main')
@section('title', 'VADmin | Editar Artículo')
@section('header_title', 'Editando artículo: ') 
@section('header_subtitle')
	{{ $article->title }}
@endsection
 
@section('styles')
	{!! Html::style('plugins/texteditor/trumbowyg.min.css') !!}
    {!! Html::style('plugins/jqueryfiler/themes/jquery.filer-dragdropbox-theme.css') !!}
	{!! Html::style('plugins/jqueryfiler/jquery.filer.css') !!}
	{!! Html::style('plugins/jqueryFileUploader/jquery.fileuploader.css') !!}
	{!! Html::style('plugins/colorpicker/spectrum.css') !!}
@endsection

@section('content')
	@component('vadmin.components.mainloader')
		@slot('text','Editando...')
	@endcomponent
	<div class="container">
	    <div class="row">
	        {!! Form::open(['route' => ['blog.update', $article], 'id' => 'EditForm', 'class' => 'big-form', 'method' => 'PUT', 'files' => true]) !!}
	        	<div class="row">
					{{-- Title --}}
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('title', 'Título') !!}
							{!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Título del artículo']) !!}
						</div>
					</div>
					{{-- Slug --}}
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('slug', 'Slug') !!}
							{!! Form::text('slug', $article->slug, ['class' => 'SlugInput form-control', 'required']) !!}
							<p class="muted-small-text"> La URL no debe contener espacios, caracteres extraños ni acentos. Solo palabras en minúsculas separadas con guiones. (Ej.: este-es-un-slug-correcto)</p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				{{-- Conten --}}
				<div class="form-group">
					{!! Form::label('content', 'Contenido') !!}
					{!! Form::textarea('content', $article->content, ['class' => 'form-control Textarea-Editor']) !!}
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							{!! Form::label('category_id', 'Categoría') !!}
							{!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control Select-Category', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							{!! Form::label('tags', 'Tags') !!}
							{!! Form::select('tags[]', $tags, $actual_tags, ['class' => 'form-control Select-Tags', 'multiple', 'required']) !!}
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							{!! Form::label('status', 'Estado') !!}
							{!! Form::select('status', ['active' => 'Activo','paused' => 'Pausado'], $article->status, ['class' => 'form-control']) !!}
						</div> 
					</div>
				</div>
				@if(count($article->images) == 0 )
				@else
				<div class="row">
					<div class="col-md-12 actual-images horizontal-list">
						<h2>Imágenes publicadas</h2>
						<ul>
							@foreach($article->images as $image)
							<li id="Id{{ $image->id }}" class="Edit_Actual_Image" data-imgid="{{ $image->id }}">	
								<img src="{{ asset('webimages/blog/articles/'.$image->name) }}">
								<div class="overlayItemCenter"><i class="ion-trash-a"></i></div>
							</li>
							@endforeach
						</ul>
						<hr class="softhr">
					</div>
				</div>
				@endif
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<span><b>Agregar nuevas imágenes </b></span><span style="font-size: 12px"> | Formatos soportados: jpeg, jpg, png, gif</span>
							{!! Form::file('images[]', array('multiple'=>true, 'id' => 'Multi_Images')) !!}
							<div class="ErrorImage"></div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row text-center">
					{!! Form::submit('Editar Item', ['class' => 'button buttonOk']) !!}
				</div>
			{!! Form::close() !!}
	    </div>
	</div>  

@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('plugins/texteditor/trumbowyg.min.js')}} "></script>
	<script type="text/javascript" src="{{ asset('plugins/jqueryfiler/jquery.filer.min.js')}} "></script>
	<script type="text/javascript" src="{{ asset('plugins/jqueryFileUploader/jquery.fileuploader.min.js')}} "></script>
	<script type="text/javascript" src="{{ asset('plugins/colorpicker/spectrum.js')}} "></script>
	<script type="text/javascript" src="{{ asset('plugins/chosen/chosen.jquery.min.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('plugins/colorpicker/jquery.spectrum-es.js')}} "></script>
	<script type="text/javascript" src="{{ asset('js/forms.js') }}" ></script>
@endsection

@section('custom_js')
	
	<script>

		// ---- Textarea Text Editor ----- //
		// Path to icons
		$.trumbowyg.svgPath = '{{ asset('plugins/texteditor/icons.svg') }}';
		// Init
		$('.Textarea-Editor').trumbowyg();

		// -------------- Single Delete -------------- //
		// --------------------------------------------//
		$(document).on('click', '.Edit_Actual_Image', function(e){
			e.preventDefault();
			// var id    = $(this).data('id');
			var id    = $(this).data('imgid');
			var route = "{{ url('vadmin/deleteArticleImg') }}/"+id+"";
			
			singleDelete(id, route, 'Cuidado!','Está seguro?');

		});

		// Loader
		$("#EditForm").on("submit", function(){
			$('.Main-Loader').removeClass('Hidden');
		});



		
	</script>

@endsection


