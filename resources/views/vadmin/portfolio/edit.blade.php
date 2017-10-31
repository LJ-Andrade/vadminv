


@extends('vadmin.layouts.main')
@section('title', 'VADmin | Nueva Imágen')

@section('header')
	@section('header_title', 'Nueva Imágen') 
	@section('header_subtitle', ' ')
	@section('options')
		<div class="actions">
			<a href="{{ route('portfolio.index') }}"><button type="button" class="animated fadeIn btnSm buttonOther">Volver</button></a>
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
            {!! Form::model($article, [
                'method' => 'PATCH',
                'url' => ['/vadmin/portfolio', $article->id],
                'files' => true,
                'class' => 'row big-form'
                ]) !!}
                @include('vadmin.portfolio.editform')
				<div class="row text-center">
                    {!! Form::submit('Editar Artículo', ['class' => 'button btnGreen']) !!}
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
		// Loader
		$("#NewItemForm").on("submit", function(){
			$('.Main-Loader').removeClass('Hidden');
		});
		
        $('#ActualImage').click(function(){
            $('#SingleImage').click();
        }); 

	</script>
@endsection


