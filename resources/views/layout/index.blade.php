<!DOCTYPE HTML>
<html>
	<head>
		<title>Roll the Dice</title>
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- Header -->
							<header id="header">
									<a href="/" class="logo"><strong>Roll</strong> the Dice</a>
									<ul class="icons">
										@auth
										<li><span id="user">{{Auth::user()->username}}</span></li>
										<li><a href="/scene" class="button small primary"><i class="fas fa-gamepad"></i> Mis partidas</a></li>
										<li><a href="/master" class="button small primary"><i class="fas fa-book"></i> Master</a></li>
										<li><a href="/logout" class="button small primary logout"><i class="fas fa-power-off"></i> Cerrar Sesión</a></li>
										@else
										<li><a href="/user/create" class="button big">Registro</a></li>
										<li><a href="/login" class="button big primary">Iniciar Sesión</a></li>
										@endauth
									</ul>
								</header>
								
                            @yield("content")

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<a href="/" class="image"><img src="{{URL::asset('images/logo.png') }}" width="300px" alt=""></a>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="/">Inicio</a></li>
										<li>
											<span class="opener">Campañas</span>
											<ul>
												<li><a href="/campaign">Ver Campañas</a></li>
												<li><a href="/scene">Mis partidas</a></li>
												<li><a href="/campaign/create">Crear campaña</a></li>
												<li><a href="/master">Panel de Master</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Personajes</span>
											<ul>
												<li><a href="/character">Mis personajes</a></li>
												<li><a href="/character/create">Crear personaje</a></li>
											</ul>
										</li>
										<li>
											<a href="/item">Armería</a>
										</li>
										<li>
											<span class="opener">Biblioteca</span>
											<ul>
												<li><a href="/races/elves">Elfos</a></li>
												<li><a href="/races/dwarves">Enanos</a></li>
												<li><a href="/races/gnomes">Gnomos</a></li>
												<li><a href="/races/humans">Humanos</a></li>
												<li><a href="/races/halflings">Medianos</a></li>
												<li><a href="/races/orcs">Orcos</a></li>
												<li><a href="/races/goblins">Trasgos</a></li>
											</ul>
										</li>
									</ul>
								</nav>
							<!-- Footer -->
								<footer id="footer">
									<div class="mini-posts">
										<article>
											<img class="image slider" src="{{ URL::asset('images/slider1.jpg') }}" alt="" />
											<img class="image slider" src="{{ URL::asset('images/slider2.jpg') }}" alt="" />
											<img class="image slider" src="{{ URL::asset('images/slider3.jpg') }}" alt="" />
											<img class="image slider" src="{{ URL::asset('images/slider4.jpg') }}" alt="" />
										</article>
										<button class="prevImage">Anterior</button>
										<button class="nextImage">Siguiente</button>
									</div>
									<br>
									<p class="copyright">&copy; Daniel Ortiz Maciá. Proyecto DAW 19-20</p>
								</footer>

						</div>
					</div>
			</div>

		<!-- Scripts -->
			<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ URL::asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ URL::asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ URL::asset('assets/js/util.js') }}"></script>
			<script src="{{ URL::asset('assets/js/main.js') }}"></script>
	</body>
</html>