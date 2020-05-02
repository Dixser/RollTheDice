<!DOCTYPE HTML>
<html>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Roll the Dice</title>
		<meta charset="utf-8" />
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
										<li><span>{{Auth::user()->username}}</span></li>
										<li><a href="/logout" class="button small primary">Cerrar Sesión</a></li>
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
												<li><a href="/scene">Mis campañas</a></li>
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
											<span class="opener">Razas</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Equipo</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
									</ul>
								</nav>
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
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