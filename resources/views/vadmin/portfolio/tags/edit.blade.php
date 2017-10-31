@extends('vadmin.layouts.main')

@section('title', 'Vadmin | Tag')

@section('header')
	@section('header_title', 'Edición de Tag') 
	@section('options')
		<div class="actions">
			<a href="{{ url('vadmin/tags') }}"><button type="button" class="animated fadeIn btnSm buttonOther">Volver</button></a>
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
				{!! Form::model($tag, [
					'method' => 'PATCH',
					'url' => ['/vadmin/tags', $tag->id],
					'files' => true
					]) !!}

					@include ('vadmin.blog.tags.form', ['submitButtonText' => 'Update'])
					{!! Form::submit('Editar Tag', ['class' => 'button btnGreen']) !!}
				{!! Form::close() !!}
			</div>
	    </div>


	    <div class="row">
	    	
        </div>
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


