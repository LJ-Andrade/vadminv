<nav class="navbar navbar-inverse navbar-fixed-top">
	 <div class="container-fluid">
		  <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#expand-nav" aria-expanded="false">
					 <span class="sr-only">toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				</button>
		  </div>
		  <div class="collapse navbar-collapse" id="expand-nav">
				<ul class="nav navbar-nav navbar-left">
					 <li><a href="{{ url('/vadmin') }}">VADmin | Panel de Control</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					 <li class="dropdown user-menu">
						  @if((Auth::user()==null))
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								<img style="width: 30px; margin-right: 5px; border-radius: 100%; padding: 0"
									 src="{{ asset('images/gen/user-gen.jpg') }}">
								{{ 'Who Are you?' }}
								<span class="caret"></span>
						  </a>
						  @else
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">				
						  		@if(Auth::user()->avatar == '')
								<img style="width: 30px; margin-right: 5px; border-radius: 100%; padding: 0"
									 src="{{ asset('images/gen/user-gen.jpg') }}">
								@else
								<img style="width: 30px; margin-right: 5px; border-radius: 100%; padding: 0"
									 src="{{ asset('images/users/'.Auth::user()->avatar) }}">
								@endif
								{{ Auth::user()->name }}
								<span class="caret"></span>
						  </a>
						  @endif 
						  <ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/profile') }}"><i class="ion-android-person"></i> Perfil</a></li>
								<li>
									<a href="{{ url('/logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();"><i class="ion-log-out"></i> Desconectarse</a>
									<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
						  </ul>
					 </li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Catálogo
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('vadmin/blog') }}"><i class="ion-ios-list-outline"></i> Artículos</a></li>
							<li><a href="{{ url('vadmin/categories') }}"><i class="ion-bookmark"></i> Categorías</a></li>
							<li><a href="{{ url('vadmin/tags') }}"><i class="ion-ios-pricetags"></i> Tags</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Varios
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('/') }}"><i class="ion-ios-monitor-outline"></i> Ver Web</a></li>
							
						</ul>
					</li>
				</ul>
		  </div>
	 </div>
</nav>

