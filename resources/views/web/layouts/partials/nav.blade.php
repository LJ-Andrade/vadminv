<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button id="BtnNavContainer"  type="button" class="navbar-toggle">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('webimages/logos/navlogo.png') }}" alt=""></a>
			<a href="https://vdeverde.mitiendanube.com/" class="mobile-shop-cta"><div class="icon"><i class="ion-ios-cart-outline"></i></div> <div class="text">Visitá nuestra tienda</div></a>
		</div>
		<div id="NavContainer" class="collapse navbar-collapse" id="MobileMenu">
			<ul class="nav navbar-nav navbar-right">
				<li><a {{ (Request::is('esencia') ? 'class=nav-active' : '') }} href="{{ url('esencia') }}">Nuestra Esencia</a></li>
				<li><a {{ (Request::is('blog') ? 'class=nav-active' : '') }} href="{{ url('blog') }}">Blog</a></li>
				<li><a {{ (Request::is('portfolio') ? 'class=nav-active' : '') }} href="{{ url('portfolio') }}">Portfolio</a></li>
				<li><a {{ (Request::is('#contacto') ? 'class=nav-active' : '') }} href="{{ url('contacto#contact') }}">Contacto</a></li>	
				<li><a href="https://vdeverde.mitiendanube.com/">Tienda</a></li>
				<li class="nav-icon"><a href="https://vdeverde.mitiendanube.com/"><i class="ion-ios-cart-outline"></i></a></li>
		{{-- 	<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Nuestra Esencia</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Tienda</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Contacto</a></li>
					</ul>
				</li> --}}
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

