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

		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1949146635331041');
		fbq('track', 'PageView');
		</script>
		<noscript>
		<img height="1" width="1"
		src="https://www.facebook.com/tr?id=1949146635331041&ev=PageView
		&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->
				 
		<!-- Google Code for VdeVerde Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 844812370;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "gufLCPqNx3MQ0qDrkgM";
		var google_conversion_value = 1.00;
		var google_conversion_currency = "ARS";
		var google_remarketing_only = false;
		/* ]]> */
		</script>
		<script type="text/javascript" 
		src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" 
		src="//www.googleadservices.com/pagead/conversion/844812370/?value=1.00&amp;currency_code=ARS&amp;label=gufLCPqNx3MQ0qDrkgM&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
		 
		<!--  Google analytic -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		 
		  ga('create', 'UA-103791702-1', 'auto');
		  ga('send', 'pageview');
		</script>

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