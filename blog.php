<?php
/*
Template Name: Blog

*/
?>

<?php get_header(); ?>


<div class="banner">
	<div class="banner-titulo interna membresias">
	  <div class="banner-titulo-cont prensa">
		<h1 class="banner-titulo-txt prensa"><?php echo the_field('titulo_blog'); ?></span></h1>
	  </div>
	</div><a href="#Contenido" class="banner-flecha w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/flecha-abajo-amarilla.svg" class="banner-flecha-img"></a></div>
  <div id="Contenido" class="contenido blanco">
	<div class="blog-cont">
	  <div class="blog-top">
		<!-- <div class="blog-filtro-cont">
		  <div data-delay="0" class="blog-filtro w-dropdown">
			<div class="blog-filtro-titulo w-dropdown-toggle">
			  <div class="w-icon-dropdown-toggle"></div>
			  <div>Filtrar por</div>
			</div>
			<nav class="blog-filtro-contenido w-dropdown-list"><a href="#" class="blog-filtro-contenido-link w-dropdown-link">Filtro 1</a><a href="#" class="blog-filtro-contenido-link w-dropdown-link">Filtro 2</a><a href="#" class="blog-filtro-contenido-link w-dropdown-link">Filtro 3</a></nav>
		  </div>
		</div> -->
		<!-- <div class="blog-pagination">
			<img src="/images/flecha-izquiera-negra.svg" class="blog-pagination-flecha">
		  		<div class="blog-pagination-texto">Página 1 de 10</div>
			  <img src="images/flecha-derecha-negra.svg" class="blog-pagination-flecha"></div> -->
			  
			
	  </div>
	  <div class="blog-grid">


							<?php

						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

						query_posts(array(
							'post_type'      => 'post', // You can add a custom post type if you like
							'paged'          => $paged,
							'posts_per_page' => 9
						));

						if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>

						
										<a href="<?php echo get_permalink(); ?>" class="blog-item w-inline-block">
											<div class="blog-item-img"></div>
											<h3 class="blog-item-titulo"><?php echo the_title(); ?></h3>
											<!-- <div class="blog-item-sub">Categoría</div> -->
											<p class="blog-item-txt"><?php the_excerpt(); ?></p>
										</a>
								

						<?php endwhile; ?>

							

						<?php else : ?>

								<?php // no posts found message goes here ?>

						<?php endif; ?>



	  </div>
	  <div class="pagination-baw">
	  <?php my_pagination(); ?>
	  </div>
	 
	</div>
  </div>








<?php get_footer(); ?>








