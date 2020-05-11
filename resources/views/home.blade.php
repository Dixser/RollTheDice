@extends("layout.index")
@section("content")
							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>¿Te gusta el Rol?<br />
											¡Roll the dice!</h1>
											<p>Tu gran experiencia de Rol Online</p>
										</header>
										<p>¿Siempre has querido jugar a rol pero te parece muy complejo? ¿Tienes un grupo al que iniciar al rol y quieres simplificar las cosas? Con Roll the Dice juega a Rol Online con tus amigos, ahorra cargar con decenas hojas de personaje y preocupate solo de disfrutar la partida. ¡En unos minutos tendrás lista tu cuenta y tu personaje para probar esta experiencia de juego!</p>
										@guest
										<ul class="actions">
											<li><a href="/user/create" class="button big">¡Empieza ya!</a></li>
										</ul>
										@endguest
									</div>
									<span class="image object">
										<img src="images/pic10.jpg" alt="" />
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>¿Qué ofrecemos?</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon solid fa-dice-d20"></span>
											<div class="content">
												<h3>Gestión de personajes y equipo</h3>
												<p>Roll the Dice permite de forma sencilla crear un personaje listo para empezar una partida en muy poco tiempo. </p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-dragon"></span>
											<div class="content">
												<h3>Descubre la mitología</h3>
												<p>En nuestra biblioteca encontrarás información sobre las distintas criaturas que habitan este universo de Rol. ¡No te pierdas nada!</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-copy"></span>
											<div class="content">
												<h3>Exporta a PDF</h3>
												<p>Guarda e imprime tus personajes generadas automáticamente en PDF para tenerlas listas si necesitas ir con ellas a alguna parte.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-dungeon"></span>
											<div class="content">
												<h3>Totalmente gratuito</h3>
												<p>¡Todas estas funciones sin ningún tipo de coste! Jugar a rol con tus amigos nunca había sido tan sencillo e intuitivo.</p>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Biblioteca</h2>
									</header>
									<div class="posts">
										<article>
											<a href="/races/elves" class="image"><img src="images/pic01.jpg" height="220px" alt="" /></a>
											<h3>Elfos</h3>
											<p>Suelen merodear por los bosques viviendo en paz y comunión por la naturaleza. ¡Ten cuidado, cualquier aproximación a su territorio será tomada como una amenaza!</p>
											<ul class="actions">
												<li><a href="races/elves" class="button">Leer más</a></li>
											</ul>
										</article>
										<article>
											<a href="/item" class="image"><img src="images/pic02.jpg" height="220px" alt="" /></a>
											<h3>Armería</h3>
											<p>¡Ármate hasta los dientes o pontelos largos viendo equipo legendario solo apto para los aventureros más experimentados! ¡Echa un vistazo aquí!</p>
											<ul class="actions">
												<li><a href="/item" class="button">Leer más</a></li>
											</ul>
										</article>
										<article>
											<a href="/races/humans" class="image"><img src="images/pic03.jpg" alt="" height="220px" /></a>
											<h3>Humanos</h3>
											<p>Desde guerreros implacables, a poderosos magos, pasando por simples aventureros y comerciantes. ¡Sin duda envidiados por su versatilidad!</p>
											<ul class="actions">
												<li><a href="/races/humans" class="button">Leer más</a></li>
											</ul>
										</article>
										
									</div>
								</section>


@endsection