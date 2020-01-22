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
		{{-- Addsense Script --}}
		<script data-ad-client="ca-pub-7540234395148040" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	</head>
	<body>
		<header>
			@include('web.layouts.partials.nav')
		</header>
		@yield('content')
		<div class="row qr-container">
			<a href="https://qr.afip.gob.ar/?qr=4eudXoohi0uG3EyBb0rmHA,," target="_F960AFIPInfo">
			<img src="https://www.afip.gob.ar/images/f960/DATAWEB.jpg" border="0" style="max-width: 80px"></a>
		</div>
		@include('web.layouts.partials.foot')
		@include('web.layouts.partials.scripts')
		@yield('scripts')
		@yield('custom_js')
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
				var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
				s1.async=true;
				s1.src='https://embed.tawk.to/5b283bd061a2e64e5fb595c7/default';
				s1.charset='UTF-8';
				s1.setAttribute('crossorigin','*');
				s0.parentNode.insertBefore(s1,s0);
			})();

			// Check Broken Portfolio Images
			$('.CheckImgPortfolio').on('error', function(){
				var defaultImg = "{{ asset('webimages/gen/portfolio-gen.jpg') }}"
				$(this).attr('src', defaultImg);
			});

			// Check Broken Blog Images
			$('.CheckImgBlog').on('error', function(){
				var defaultImg = "{{ asset('webimages/gen/blog-gen.jpg') }}"
				$(this).attr('src', defaultImg);
			});


		</script>
		<!--End of Tawk.to Script-->
	</body>
</html>
