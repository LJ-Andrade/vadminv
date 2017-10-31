<!DOCTYPE html>
<html lang="es">
	<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('title')</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="V de Verde" />
		<meta name="keywords" content="huerta, huerta urbana, natural, jardin" />
		<meta name="author" content="Studio Vimana" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('webimages/logos/favicon.png') }}">

		<meta property="og:url"         content="http://vdeverde.com.ar" />
		<meta property="og:type"        content="article" />
		<meta property="og:title"       content="V de Verde" />
		<meta property="og:description" content="Es volver a incorporar a tu vida elementos esenciales. 
		Todo lo que necesitamos está en la naturaleza, sólo hay 
		que saber conectarse con ella." />
		<meta property="og:image"       content="{{ asset('webimages/logos/main-logo.png') }}" />
		<meta name="twitter:title"      content="V de Verde" />
		<meta name="twitter:image"      content="{{ asset('webimages/logos/main-logo.png') }}" />
		<meta name="twitter:url"        content="http://studiovimana.com.ar" />
		{{-- <meta name="twitter:card"       content="" /> --}}
		<link rel="stylesheet" async  type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" async  type="text/css" href="{{ asset('plugins/animate/animate.css') }}">
		<link rel="stylesheet" async  type="text/css" href="{{ asset('plugins/ionicons/ionicons.min.css') }}"> 
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/sweetalert/sweetalert2.min.css') }}">
		
		@yield('styles')
		<link rel="stylesheet" type="text/css" href="{{ asset('css/web.css') }}">
		@include('web.layouts.partials.analyticstracking')		

	</head>
	<body>
		<header>
			@include('web.layouts.partials.nav')
		</header>
		@yield('content')
		@include('web.layouts.partials.foot')
		
		@include('web.layouts.partials.scripts')
		
		@yield('scripts')
		@yield('custom_js')
	</body>
</html>