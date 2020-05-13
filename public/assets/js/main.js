/*
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	var	$window = $(window),
		$head = $('head'),
		$body = $('body');

	// Breakpoints.
		breakpoints({
			xlarge:   [ '1281px',  '1680px' ],
			large:    [ '981px',   '1280px' ],
			medium:   [ '737px',   '980px'  ],
			small:    [ '481px',   '736px'  ],
			xsmall:   [ '361px',   '480px'  ],
			xxsmall:  [ null,      '360px'  ],
			'xlarge-to-max':    '(min-width: 1681px)',
			'small-to-xlarge':  '(min-width: 481px) and (max-width: 1680px)'
		});

	// Stops animations/transitions until the page has ...

		// ... loaded.
			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-preload');
				}, 100);
			});

		// ... stopped resizing.
			var resizeTimeout;

			$window.on('resize', function() {

				// Mark as resizing.
					$body.addClass('is-resizing');

				// Unmark after delay.
					clearTimeout(resizeTimeout);

					resizeTimeout = setTimeout(function() {
						$body.removeClass('is-resizing');
					}, 100);

			});

	// Fixes.

		// Object fit images.
			if (!browser.canUse('object-fit')
			||	browser.name == 'safari')
				$('.image.object').each(function() {

					var $this = $(this),
						$img = $this.children('img');

					// Hide original image.
						$img.css('opacity', '0');

					// Set background.
						$this
							.css('background-image', 'url("' + $img.attr('src') + '")')
							.css('background-size', $img.css('object-fit') ? $img.css('object-fit') : 'cover')
							.css('background-position', $img.css('object-position') ? $img.css('object-position') : 'center');

				});

	// Sidebar.
		var $sidebar = $('#sidebar'),
			$sidebar_inner = $sidebar.children('.inner');

		// Inactive by default on <= large.
			breakpoints.on('<=large', function() {
				$sidebar.addClass('inactive');
			});

			breakpoints.on('>large', function() {
				$sidebar.removeClass('inactive');
			});

		// Hack: Workaround for Chrome/Android scrollbar position bug.
			if (browser.os == 'android'
			&&	browser.name == 'chrome')
				$('<style>#sidebar .inner::-webkit-scrollbar { display: none; }</style>')
					.appendTo($head);

		// Toggle.
			$('<a href="#sidebar" class="toggle">Toggle</a>')
				.appendTo($sidebar)
				.on('click', function(event) {

					// Prevent default.
						event.preventDefault();
						event.stopPropagation();

					// Toggle.
						$sidebar.toggleClass('inactive');

				});

		// Events.

			// Link clicks.
				$sidebar.on('click', 'a', function(event) {

					// >large? Bail.
						if (breakpoints.active('>large'))
							return;

					// Vars.
						var $a = $(this),
							href = $a.attr('href'),
							target = $a.attr('target');

					// Prevent default.
						event.preventDefault();
						event.stopPropagation();

					// Check URL.
						if (!href || href == '#' || href == '')
							return;

					// Hide sidebar.
						$sidebar.addClass('inactive');

					// Redirect to href.
						setTimeout(function() {

							if (target == '_blank')
								window.open(href);
							else
								window.location.href = href;

						}, 500);

				});

			// Prevent certain events inside the panel from bubbling.
				$sidebar.on('click touchend touchstart touchmove', function(event) {

					// >large? Bail.
						if (breakpoints.active('>large'))
							return;

					// Prevent propagation.
						event.stopPropagation();

				});

			// Hide panel on body click/tap.
				$body.on('click touchend', function(event) {

					// >large? Bail.
						if (breakpoints.active('>large'))
							return;

					// Deactivate.
						$sidebar.addClass('inactive');

				});

		// Scroll lock.
		// Note: If you do anything to change the height of the sidebar's content, be sure to
		// trigger 'resize.sidebar-lock' on $window so stuff doesn't get out of sync.

			$window.on('load.sidebar-lock', function() {

				var sh, wh, st;

				// Reset scroll position to 0 if it's 1.
					if ($window.scrollTop() == 1)
						$window.scrollTop(0);

				$window
					.on('scroll.sidebar-lock', function() {

						var x, y;

						// <=large? Bail.
							if (breakpoints.active('<=large')) {

								$sidebar_inner
									.data('locked', 0)
									.css('position', '')
									.css('top', '');

								return;

							}

						// Calculate positions.
							x = Math.max(sh - wh, 0);
							y = Math.max(0, $window.scrollTop() - x);

						// Lock/unlock.
							if ($sidebar_inner.data('locked') == 1) {

								if (y <= 0)
									$sidebar_inner
										.data('locked', 0)
										.css('position', '')
										.css('top', '');
								else
									$sidebar_inner
										.css('top', -1 * x);

							}
							else {

								if (y > 0)
									$sidebar_inner
										.data('locked', 1)
										.css('position', 'fixed')
										.css('top', -1 * x);

							}

					})
					.on('resize.sidebar-lock', function() {

						// Calculate heights.
							wh = $window.height();
							sh = $sidebar_inner.outerHeight() + 30;

						// Trigger scroll.
							$window.trigger('scroll.sidebar-lock');

					})
					.trigger('resize.sidebar-lock');

				});

	// Menu.
		var $menu = $('#menu'),
			$menu_openers = $menu.children('ul').find('.opener');

		// Openers.
			$menu_openers.each(function() {

				var $this = $(this);

				$this.on('click', function(event) {

					// Prevent default.
						event.preventDefault();

					// Toggle.
						$menu_openers.not($this).removeClass('active');
						$this.toggleClass('active');

					// Trigger resize (sidebar lock).
						$window.triggerHandler('resize.sidebar-lock');

				});

			});

			//PROYECTO////////////////////
















			////////////////////////////////////////////
			$("input[name$='item_type']").on("change",(function() {		//muestra solo el formulario de creación de equipo que interesa para el objeto que se va a crear
				$("div.weapon").hide();
				$("div.armor").hide();
				$("div.consumable").hide();
				$("div."+$(this).val()).toggle();
				
			}));
			$(".char_hide").click(function(){ //oculta el contenido para facilitar la organización
				$(this).next().toggle("fast");
				$(this).children("i").toggleClass("closed");
			});

			$(".roll").on("submit",function(event){ //realización de una tirada
				event.preventDefault(); //previene el submit del formulario
				data = $(this).serialize(); //recibimos todos los datos del formulario en una string
				data = data.split("&"); //separamos la string para tener los valores
				for(i=0;i<data.length;i++){
					data[i] = data[i].split("=");
				}
				data[6][1] = data[6][1].split("%20").join(" ") //Convierte %20 (unicode para espacios) en espacios
				roll = Math.floor((Math.random() * data[3][1]) + 1); //realizamos una tirada aleatoria entre 1 y el nº de caras del dado
				result = roll + parseInt(data[1][1]) + parseInt(data[4][1]); //hacemos la operación de sumarle el atributo correspondiente, modificadores
				if(result<parseInt(data[5][1])){																		//y calculamos el resultado con la dificultad de la tirada
					result="<strong class='failed'> NO SUPERADO ("+result+")";
				}else{
					result="<strong class='passed'> SUPERADO ("+result+")";
				}
				var fecha = new Date();		 		//extramos la timestamp de la tirada para certificar el día y hora de la tirada
				horaTirada="["+fecha.getDate()+"/"
				+(fecha.getMonth()+1)+"/"
				+fecha.getFullYear()+" "
				+fecha.getHours()+":"
				+fecha.getMinutes()+":"
				+fecha.getSeconds()+"] "

				texto = horaTirada+			//damos formato al html a mostrar
				data[6][1]+
				" realizó una tirada de D"+data[3][1]+" con resultado "+roll+
				" (Mod: "+data[4][1]+
				" Atr: +"+data[1][1]+
				") Requisito: "+data[5][1]+
				result+"<br>"
				
				$("."+data[2][1]+"_result").append(texto);
				$.ajax({ //hacemos una petición ajax para subir el resultado a la BBDD
					type:"POST",  //sin hacer recarga en la página
					url: "/roll",
					headers: {"X-CSRF-TOKEN": $("meta[name='csrf-token']").attr("content")},
					data: {		//CSRF es el token que usa laravel para evitar que estas 
						campaign_id: data[7][1], //peticiones se hagan por usuarios sin autorización
						roll: texto
					}
				});
			})


			$(".masterRoll").click(function(){ //realización de una tirada del master
				roll = Math.floor((Math.random() * $("#masterDice").val()) + 1); //realizamos una tirada aleatoria entre 1 y el nº de caras del dado
				result = parseInt(roll) + parseInt($("#masterModifier").val()); //hacemos la operación de sumarle el atributo correspondiente, modificadores
				if(result<parseInt($("#masterScore").val())){																		//y calculamos el resultado con la dificultad de la tirada
					result="<strong class='failed'> NO SUPERADO ("+result+")";
				}else{
					result="<strong class='passed'> SUPERADO ("+result+")";
				}
				var fecha = new Date();		 		//extramos la timestamp de la tirada para certificar el día y hora de la tirada
				horaTirada="["+fecha.getDate()+"/"
				+(fecha.getMonth()+1)+"/"
				+fecha.getFullYear()+" "
				+fecha.getHours()+":"
				+fecha.getMinutes()+":"
				+fecha.getSeconds()+"] "

				texto = horaTirada+			//damos formato al html a mostrar
				" Tirada de D"+$("#masterDice").val()+" con resultado "+roll+
				" (Mod: "+$("#masterModifier").val()+") Requisito: "+$("#masterScore").val()+
				result+"<br>"
				
				$(".master_result").append(texto);
			})




			$(".limpiarTiradas").click(function(){ //limpia el historial de tiradas
				$(this).prev().children("p").last().empty();
			});


			//Pantalla del jugador
			$(".pedirTiradas").click(function(){ //Petición AJAX para recibir las tiradas efectuadas en la campaña.
				id = $("#campaign_id").val();
				$.ajax({
					type:"GET",
					url: "/roll/"+id,
					headers: {"X-CSRF-TOKEN": $("meta[name='csrf-token']").attr("content")},
					success: function(rolls){
						$(".resultados").html("");
						for(i=0;i<rolls.length;i++){
							$(".resultados").append(rolls[i].roll);
						}
					}
					
				})
				
			});





			//Slider
			var slideIndex = 1; //establece la primera imagen del slider
			showSlides(slideIndex);

			$(".nextImage").click(function(){ //imagen posterior del slider
				slideIndex+=1;
				showSlides(slideIndex);
			});
			$(".prevImage").click(function(){ //imagen previa del slider
				slideIndex-=1;
				showSlides(slideIndex);
			});

			function showSlides(n) {
			  var i;
			  var slides = $(".slider");
			  if (n > slides.length) {slideIndex = 1} //establecemos los limites del slider
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) { //ocultamos todos los elementos
				  $(".slider").eq(i).hide();
			  }
			  $(".slider").eq(slideIndex-1).fadeIn("slow"); //Usamos Fade para la aparición progresiva de la imagen
			}


			//Validación de formularios
			$("#submit").prop("disabled",true); //deshabilita los formulario hasta comprobar que los datos introducidos son correctos
			//Expresiones regulares usadas en los formularios
			var alfaNumericoReg = /^\s*[a-zA-Z0-9,\s]+\s*$/; //valida letras, números y espacios
			var contraseñaReg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/; //Minimo 8 caracteres, números y letras
			var numericoReg = /^-?(0|[1-9][0-9]*)$/
			//Login
			$(".loginRegExp").keyup(function(){
					if(loginCheck()){
						$("#submit").prop("disabled",false);
					}else{
						$("#submit").prop("disabled",true);
					}
			})
			function loginCheck(){ //comprueba las expresiones regulares y la longitud de los campos
				if($("#name").val().length<=4 && !alfaNumericoReg.test($("#name").val())){
					return false;
				}
				if(!contraseñaReg.test($("#password").val())){
					return false;
				}
				return true;
			}
			$(".charRegExp").keyup(function(){
				if(charCheck()){
					$("#submit").prop("disabled",false);
				}else{
					$("#submit").prop("disabled",true);
				}
			})
			function charCheck(){ //comprueba las expresiones regulares y la longitud de los campos
				if($("#name").val().length<=4 && !alfaNumericoReg.test($("#name").val())){
					return false;
				}
				if($("#religion").val().length<=4 && !alfaNumericoReg.test($("#religion").val())){
					return false;
				}
				if($("#hometown").val().length<=4 && !alfaNumericoReg.test($("#hometown").val())){
					return false;
				}
				return true;
			}
			$(".itemRegExp").keyup(function(){
				if(itemCheck()){
					$("#submit").prop("disabled",false);
				}else{
					$("#submit").prop("disabled",true);
				}
			})
			$("input[name='item_type']").click(function(){ //evita el cumplimentar un tipo de objeto, cambiar de objeto y poder guardarlo
				if(itemCheck()){
					$("#submit").prop("disabled",false);
				}else{
					$("#submit").prop("disabled",true);
				}
			})

			
			function itemCheck(){ //comprueba las expresiones regulares y la longitud de los campos
				if($("#name").val().length<=4 && !alfaNumericoReg.test($("#name").val())){
					return false;
				}
				if(!numericoReg.test($("#price").val())){
					return false;
				}
				if($("input[name='item_type']:checked").val()=="weapon"){ //comprueba los campos segun el tipo de objeto
					if(!numericoReg.test($("#weapon_range").val())){
						return false;
					}
					if(!numericoReg.test($("#weapon_damage").val())){
						return false;
					}
					if($("#weapon_type").val().length<=4 && !alfaNumericoReg.test($("#weapon_type").val())){
						return false;
					}
					
				}else if($("input[name='item_type']:checked").val()=="armor"){
					if(!numericoReg.test($("#armour").val())){
						return false;
					}
					if(!numericoReg.test($("#penality").val())){
						return false;
					}
				}else if($("input[name='item_type']:checked").val()=="consumable"){
					if($("#description").val().length<=4 && !alfaNumericoReg.test($("#description").val())){
						return false;
					}
				}else{
					return false;
				}


				return true;
			}

			






})(jQuery);