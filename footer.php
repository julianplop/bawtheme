
<div class="pre-footer"></div>
<div class="footer">
<div class="footer-top">
	<div class="footer-left">
		<h2 class="footer-titulo left"><?php echo pll__('Visítanos'); ?></h2>
		<p class="footer-txt left"><?php echo pll__('Sede Santa Bárbara<br>Cll 119 N 11D 30<br>Bogotá, Colombia<br>Horarios de Atención: 0:00 h - 0:00 h'); ?></p>
	</div>
	<div class="footer-center">
		<h2 class="footer-titulo center"><?php echo pll__('Síguenos'); ?></h2>
		<div class="footer-social"><a href="<?php echo get_option('facebook'); ?>" class="footer-icono"></a><a href="<?php echo get_option('instagram'); ?>" class="footer-icono"></a><a href="<?php echo get_option('twitter'); ?>" class="footer-icono"></a></div>
	</div>
	<div class="footer-right">
		<h2 class="footer-titulo right"><?php echo pll__('Reservas'); ?></h2>
		<p class="footer-txt right"><?php echo pll__('Sede Santa Bárbara</p><a href="tel:+5714767634" class="footer-txt right">(+57) (1) 476 7634</a><a href="tel:+573045826892" class="footer-txt right"><span class="footer-txt-icon"></span> (+57) 304 582 6892</a>'); ?></div>
</div>

<?php
	wp_nav_menu( array(
		'menu'       => 'footer-menu',
		'menu_class' => 'footer-bottom',
		'container'  => 'false'
	) );
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/webflow.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

<script>

	$('.navbar-menu li').attr("data-ix", "open-dropdown").addClass("navbar-menu-item");
	$('.footer-bottom li').addClass("footer-sitemap-link");
	$('.contacto-link').attr("data-ix", "contacto-open");
	$('.masajes-item p').addClass("masajes-item-txt");
	$(".modal-carrito-contacto").css({
			'transition': ': all 0.25s ease 0s'
	});
	$(".modal-cont").css({
			'transition': 'all 0.3s ease-in-out 0s, width 600ms ease-in-out',
	});
	$(".modal-contacto").css({
		'transition': 'all 0.3s ease-in-out 0s, opacity 200ms ease-in-out',
	});

	$(".modal-carrito").css({
		'transition': 'all 0.3s ease-in-out 0s, opacity 200ms ease-in-out',
	});

	var wow = new WOW(
			{
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       0,          // distance to the element when triggering the animation (default is 0)
				mobile:       true,       // trigger animations on mobile devices (default is true)
				live:         true,       // act on asynchronously loaded content (default is true)
				callback:     function(box) {
				// the callback is fired every time an animation is started
				// the argument that is passed in is the DOM node being animated
				},
				scrollContainer: null // optional scroll container selector, otherwise use window
			}
		);
		wow.init();







	if( location.hash == "#rf" ) { 
		openmodal();
		openmodal_carrito();
	}
	else {
		
	}
	

	//hover items
	$( ".menu-item a" ).hover(
		function() {
		$(this).parent().find('.sub-menu').css({
			'visibility' : 'visible',
			'opacity' : '1'
			});
		}, function() {
			$( this ).parent().find('.sub-menu').css({
				'opacity' : '0',
				'visibility' : 'hidden'
			});
		}
	);

	//hover submenu
	$( ".sub-menu" ).hover(
		function() {
			$(this).css({
			'visibility' : 'visible',
			'opacity' : '1'
			});
		
		}, function() {
			$( this ).css({
				'opacity' : '0',
				'visibility' : 'hidden'
			});
		}
	);
			
	//hover cart
	$( ".cart-desktop" ).hover(
		function() {
			$(".navbar-menu-item").css({
				'opacity' : '0.25'
			});
		}, function() {
			$(".navbar-menu-item").css({
				'opacity' : '1',
			});
		}
	);

	//Masaje thumbnail Hover

	$( ".masajes-item" ).hover(
		function() {
			$( this ).find(".masajes-item-fondo").css({
				'opacity' : '1'
			});

			$( this ).find("p").css({
				'opacity' : '1',
				'height':'40px'
			});

		}, function() {
			$( this ).parent().find(".masajes-item-fondo").css({
				'opacity' : '0',
			});
			$( this ).find("p").css({
				'opacity' : '0',
				'height':'0px'
			});
		}
	);

	//Contact Slide open
	$( ".contacto_id" ).click(function() {

		openmodal();
		openmodal_contact();

	});


	//Contact Slide open
	$( ".cart-desktop" ).click(function() {

		openmodal();
		openmodal_carrito();

	});




	function openmodal(){
		
		$(".modal-carrito-contacto").css({
			'display' : 'flex'
		});

		
		$(".modal-cont").css({
			'display':'flex',
		});


		setTimeout(function(){
			$(".modal-carrito-contacto").css({
				'opacity':'1'
			});

			$(".modal-cont").css({
				'opacity' : '1',
				'width':'100%'
			});
		},100);

	}


	function openmodal_contact(){
		
		$(".modal-contacto").css({
				'display' : 'flex',
			
			});

		setTimeout(function(){
			$(".modal-contacto").css({
				'opacity' : '1',
			
			});
		},450);


	}


	function openmodal_carrito(){


		setTimeout(function(){
			$(".modal-carrito").css({
				'opacity' : '1',
				'display' : 'flex'
			});
		},500);


	}


	









	//modal close
	$( ".modal-cerrar" ).click(function() {
  		
		$(".modal-contacto").css({
			'opacity':'0'
		});

		$(".modal-carrito").css({
			'opacity':'0'
		});


		$(".modal-cont").css({
			'width':'0%'
		}).delay( 1200 );

		setTimeout(function(){
			$(".modal-cont").css({
				'display':'none'
			});
			$(".modal-carrito-contacto").css({
				'opacity':'0'
			});
		},750);

		setTimeout(function(){
			$(".modal-carrito-contacto").css({
				'display' : 'none'
			});

			$(".modal-contacto").css({
				'display':'none'
			});

			$(".modal-carrito").css({
				'display':'none'
			});

			
		},800);

	});


	





	


	



</script>
<?php wp_footer(); ?>
</body>
</html>