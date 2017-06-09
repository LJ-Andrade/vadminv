<nav class="navbar navbar-default">
	<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('webimages/logos/navlogo.png') }}" alt=""></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Nuestra Escencia</a></li>
				<li><a href="{{ url('blog') }}">Blog</a></li>
				<li><a href="#">Tienda</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Contacto</a></li>
				<li class="nav-icon"><a href="#"><i class="ion-ios-cart-outline"></i></a></li>
			{{-- 	<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Nuestra Escencia</a></li>
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