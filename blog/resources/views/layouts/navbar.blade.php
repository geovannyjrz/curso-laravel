<ul id="dropdown1" class="dropdown-content">
	<li><a href="/perfil">Mi perfil</a></li>
	<li><a href="/posts/create">Agregar</a></li>
	<li class="divider"></li>
	<li><a href="/logout">Salir</a></li>
</ul>
<nav>
	<div class="nav-wrapper">
		<a href="/" class="brand-logo">GJ - Blog</a>
		<a href="#" data-activates="menu-side" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="/">Inicio</a></li>

			@if(!Auth::check())
			<li><a href="/login">Login</a></li>
			@endif

			@if(Auth::check())
			<li>
				<a class="dropdown-button" href="#!" data-activates="dropdown1">Perfil<i class="material-icons right">arrow_drop_down</i></a>
			</li>

			@endif

		</ul>
	</div>
	<ul id="menu-side" class="side-nav">
		

		@if(!Auth::check())
		<li><a href="/">Inicio</a></li>
		<li><a href="/login">Login</a></li>
		@endif

		@if(Auth::check())
		<li><a>{{Auth::user()->name }}</a></li>
		<li><a href="/">Inicio</a></li>
		<li><a href="/posts/create">Agregar</a></li>
		<li><a href="/logout">Salir</a></li>
		@endif
	</ul>
</nav>