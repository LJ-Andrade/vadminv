@extends('vadmin.layouts.main')

@section('title', 'Vadmin | V de Verde')

@section('header_title', 'Panel de Control | ')

@section('header_subtitle')
	Bienvenid@ <b>{{ Auth::user()->name }}</b>
@endsection

@section('styles')
	{!! Html::style('plugins/jqueryfiler/themes/jquery.filer-dragdropbox-theme.css') !!}
	{!! Html::style('plugins/jqueryfiler/jquery.filer.css') !!}
	{!! Html::style('plugins/colorpicker/spectrum.css') !!}
@endsection

@section('content')
	<div class="container">
		Este es el panel de control del sitio. <br>	
		Aquí vas a poder crear y actualizar el contenido del mismo.
		<hr class="softhr">
		<a href="{{ url('vadmin/blog/create') }}"><button type="button" class="button btnGreen w-icon"><i class="ion-paper-airplane"></i> Nuevo Artículo</button></a>
		<a href="{{ url('vadmin/blog') }}"><button type="button" class="button btnBlue w-icon"><i class="ion-clipboard"></i> Listado de Artículos</button></a>
		<a href="{{ url('vadmin/categories/create') }}"><button type="button" class="button btnYellow w-icon"><i class="ion-shuffle"></i> Nueva Categoría</button></a>
		<a href="{{ url('vadmin/tags/create') }}"><button type="button" class="button btnRed w-icon"><i class="ion-pricetags"></i> Nuevo Tag</button></a>
		<hr class="softhr">
		<div class="row article-preview-container">
			<div class="col-md-12 title">
				<span>Últimos artículos publicados</span>
			</div>
			@foreach($articles as $item)
				<div class="col-xs-12 col-sm-3 item">
					<div class="edit"><a href="{{ route('blog.edit', $item->id) }}"><i class="ion-edit"></i></a></div>
					@if(count($item->images))
					<img src="{{ asset('webimages/blog/articles/'. $item->images->first()->name ) }}">
					@else
					<img src="{{ asset('webimages/gen/genlogo.jpg') }}">
					@endif
					<div class="content">
						<span><b>{{ $item->title }}</b></span> <br>
						<span class="small-text">Categoría: {{ $item->category->name }}</span> <br>	
						<a href="{!! route('web.blog.article', $item->slug ) !!}">
							<span class="small-text">Ver post...</span>
						</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>  


	<div id="Error"></div>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('plugins/jqueryfiler/jquery.filer.min.js')}} "></script>
	<script type="text/javascript" src="{{ asset('plugins/colorpicker/spectrum.js')}} "></script>
	<script type="text/javascript" src="{{ asset('plugins/colorpicker/jquery.spectrum-es.js')}} "></script>
	{{-- <script type="text/javascript" src="{{ asset('js/jslocal/forms.js') }}" ></script> --}}
	<script type="text/javascript" src="{{ asset('js/products.js') }}" ></script>
	@include('vadmin.components.ajaxscripts')
@endsection

@section('custom_js')

	<script type="text/javascript">

	</script>

@endsection
