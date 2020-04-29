<!DOCTYPE HTML>
<html>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Roll the Dice</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/fontawesome-all.min.css') }}" />

	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- Header -->
							<header id="header">
									<a href="index.html" class="logo"><strong>Roll</strong> the Dice</a>
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
									<a href="/" class="image"><img src="images/logo.png" width="300px" alt=""></a>
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
												<li><a href="#">Mis Campañas</a></li>
											</ul>
										</li>
										<li><a href="/character">Personajes</a></li>
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

							<!-- Section
								<section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>
								 -->

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>