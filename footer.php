<?php wp_footer(); ?>

	<script>

		$(".dashboardMenu").on("mouseleave", function() {
			$(this).removeClass('menuSlideRight');
			$(this).addClass('menuSlideLeft');
		});

		function menuSlideRight() {
			if	($('.dashboardMenu').hasClass('menuSlideLeft')) {
				$('.dashboardMenu').removeClass('menuSlideLeft');
				$('.dashboardMenu').addClass('menuSlideRight');
				$('body').addClass('fixedBody');
			}
		}

		function menuSlideLeft() {
			if	($('.dashboardMenu').hasClass('menuSlideRight')) {
				$('.dashboardMenu').removeClass('menuSlideRight');
				$('.dashboardMenu').addClass('menuSlideLeft');
				$('body').removeClass('fixedBody');
			}
		}

		function goBack() {
			window.history.back();
		}
	

		// - Controles Paginación
		$('.iconPagLeft').hover( function(){
			$('.iconPagLeft img').attr('src', '<?php bloginfo('template_directory'); ?>/img/arrowPagLeftWhite.svg');
		}, function() {
			$('.iconPagLeft img').attr('src', '<?php bloginfo('template_directory'); ?>/img/arrowPagLeft.svg');
		});

		$('.iconPagRight').hover( function(){
			$('.iconPagRight img').attr('src', '<?php bloginfo('template_directory'); ?>/img/arrowPagRightWhite.svg');
		}, function() {
			$('.iconPagRight img').attr('src', '<?php bloginfo('template_directory'); ?>/img/arrowPagRight.svg');
		});
		

		// - Animación Iconos Menú Header
		$('.btnNavbarHeader').hover(function(){
			$('.btnNavbarHeader span.icon1').animate({width: "35%"});
			$('.btnNavbarHeader span.icon2').animate({width: "65%"});
		}, function(){
			$('.btnNavbarHeader span.icon1').stop().animate({width: "100%"});
			$('.btnNavbarHeader span.icon2').stop().animate({width: "100%"});
		});

		// - Breadcrumbs

		if ($('.breadcrumb-item').hasClass('active')) {
			$('.breadcrumb-item a').toggleClass('greyText');
		}

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

		
	</script>

</body>
</html>